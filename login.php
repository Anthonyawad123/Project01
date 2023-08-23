<?php  
session_start();
include('server/connection.php');
if (isset($_SESSION['logged_in'])) {
  header('location: account.php');
  exit;
}

if (isset($_POST['login_btn'])) { // Corrected the condition to check login button click
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $con->prepare("SELECT user_id, user_name, user_email, user_password FROM users WHERE user_email=? LIMIT 1"); // Corrected the SQL query
    $stmt->bind_param('s', $email); // Corrected the variable names

    if ($stmt->execute()) {
        $stmt->bind_result($user_id, $user_name, $user_email, $hashed_password);
        $stmt->store_result();
        if ($stmt->num_rows() == 1) {
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) { // Verify the password using password_verify()
                $_SESSION['user_id'] = $user_id;
                $_SESSION['user_name'] = $user_name;
                $_SESSION['user_email'] = $user_email;
                $_SESSION['logged_in'] = true;

                header('location: account.php?login_success=logged in successfully');
            } else {
                header('location: login.php?message=could not verify your account');
            }
        } else {
            header('location: login.php?message=could not verify your account');
        }
    } else {
        //error
        header('location: login.php?error=something went wrong');
    }
}
?>

 



<?php include("layouts/header.php"); ?>

    <!-- Login -->
        <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
              <h2 class="form-weight-bold">login</h2>
              <hr class="mx-auto">
            </div>
            <div class="mx-auto container">
              <form id="login-form" action="login.php" method="POST">
              <p style="color:red" class="text-center">
    <?php
    if (isset($_GET['error'])) {
        echo $_GET['error'];
    }
    ?>
</p>

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required/>
                </div>
                 <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="login-password" name="password" placeholder="Password" required/>
                </div>
                <br>
                <div class="form-group">
                  <input type="submit" class="btn btn-outline-primary" id="login-btn" name="login_btn"value="login"/>
                </div>
                <div>
                  <a id="register-url" href="register.php"class="btn" href="">Don't have an account? REgister</a>
                </div>
                </form>
            </div>


         
            
        </section>










        <?php include("layouts/footer.php"); ?>