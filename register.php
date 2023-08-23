<?php
session_start();
include('server/connection.php');

 if (isset($_SESSION['logged_in'])) {
  header('location: account.php');
  exit;
}
if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confirm-password'];

    // If passwords don't match
    if ($password !== $confpassword) {
        header('Location: register.php?error=passwords dont match');
    } else if (strlen($password) < 6) {
        header('Location: register.php?error=password must be at least 6 characters');
    } else {
        // Check if a user with this email already exists
        $stmt1 = $con->prepare("SELECT * FROM users WHERE user_email=?");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $num_rows = $result->num_rows;
        $stmt1->fetch();
        // If a user with this email already exists
        if ($num_rows != 0) {
            header('Location: register.php?error=user with this email already exists');
          } else {
              // Create a new user
              $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password
              $stmt = $con->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?,?,?)");
              $stmt->bind_param('sss', $name, $email, $hashed_password);
              if ($stmt->execute()) {
                  // If the account was created successfully
                  $user_id=$stmt->insert_id;
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['user_email'] = $email;
                  $_SESSION['user_name'] = $name;
                  $_SESSION['logged_in'] = true;
                  header('Location: account.php?register_success=you registered successfully');
              } else {
                  header('Location: register.php?error=could not create an account at the moment');
              }
          } 
    }
  }
?>


<?php include("layouts/header.php"); ?>


    <!-- Registre-->
        <section class="my-5 py-5">
            <div class="container text-center mt-3 pt-5">
              <h2 class="form-weight-bold">login</h2>
              <hr class="mx-auto">
            </div>
            <div class="mx-auto container">
              <form id="register-form" method="POST" action="register.php">
                <p style="color: red"><?php if(isset($_GET['error'])){ echo $_GET['error'];}?></p>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" id="register-name" name="name" placeholder="Name" required/>
                  </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" id="login-email" name="email" placeholder="Email" required/>
                </div>
                 <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" id="register-password" name="password" placeholder="Password" required/>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="register-confirm-password" name="confirm-password" placeholder="confirm Password" required/>
                  </div>
                <br>
                <div class="form-group">
                  <input type="submit" class="btn btn-outline-primary" id="register-btn" name="register"value="Registre"/>
                </div>
                <div>
                  <a id="register-url" class="btn" href="login.php">Don't have an account? Login</a>
                </div>
                </form>
            </div>
         </section>
         <?php include("layouts/footer.php"); ?>