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

                header('location: account.php?message=logged in successfully');
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

 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css"/>
   
</head>
<body>

  <!-- NavBar  -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <img src="assest/images/logo.jpeg" alt="">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-button" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link"  href="index.html">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">shop</a>
          </li>


          <li class="nav-item">
            <a class="nav-link " href="contact.html">Contact Us</a></li>

            <li class="nav-item">
            <a href="cart.html">  <i class="fa-solid fa-cart-shopping"></i></a>
             <a href="account.html"><i class="fa-solid fa-user"></i></a>
            </li> 
        </ul>
      
      </div>
    </div>
  </nav>
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




















  
      <footer class="bg-dark text-light text-center">
        <div class="container py-4">
          <div class="row">
            <div class="col-lg-4">
              <h5>About Us</h5>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla mauris dolor, ullamcorper id congue ut, interdum a magna.</p>
            </div>
            <div class="col-lg-4">
              <h5>Contact Us</h5>
              <p>Email: info@example.com</p>
              <p>Phone: +1 123 456 7890</p>
            </div>
            <div class="col-lg-4">
              <h5>Follow Us</h5>
              <div class="d-flex justify-content-center">
                <a href="#" class="btn btn-outline-light me-2"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="btn btn-outline-light me-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="btn btn-outline-light me-2"><i class="fab fa-instagram"></i></a>
                <a href="#" class="btn btn-outline-light"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-dark py-2">
          <div class="container text-center">
            <p class="mb-0">&copy; 2023 Your E-commerce App. All rights reserved.</p>
          </div>
        </div>
      </footer>
        
        
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>