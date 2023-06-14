
<?php
session_start();
include('server/connection.php');

if(isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confpassword = $_POST['confirm-password'];

    // If passwords don't match
    if($password !== $confpassword) {
        header('Location: register.php?error=passwords dont match');
    } else if(strlen($password) < 6) {
        header('Location: register.php?error=password must be at least 6 characters');
    } else {
        // Check if a user with this email already exists
        $stmt1 = $con->prepare("SELECT * FROM users WHERE user_email=?");
        $stmt1->bind_param('s', $email);
        $stmt1->execute();
        $result = $stmt1->get_result();
        $num_rows = $result->num_rows;

        // If a user with this email already exists
        if($num_rows != 0) {
            header('Location: register.php?error=user with this email already exists');
        } else {
            // Create a new user
            $stmt = $con->prepare("INSERT INTO users (user_name, user_email, user_password) VALUES (?,?,?)");
            $stmt->bind_param('sss', $name, $email, md5($password));
            if($stmt->execute()) {
                // If the account was created successfully
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $name;
                $_SESSION['logged_in'] = true;
                header('Location: account.php?register=you registered successfully');
            } else {
                header('Location: register.php?error=could not create an account at the moment');
            }
        }
    }
    //if the user already exist
}else if(isset($_SESSION['logged-in'])){
    header('location: account.php');
    exit;
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
                  <a id="register-url" class="btn" href="">Don't have an account? Login</a>
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