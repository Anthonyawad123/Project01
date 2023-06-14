<?php
session_start();




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


    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
        <div class="container">
            <img src="assest/images/logo.jpeg" alt="">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse nav-button" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

              <li class="nav-item">
                <a class="nav-link"  href="#">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">shop</a>
              </li>

              <li class="nav-item ">
                <a class="nav-link " href="#"  >Blog</a>
              </li>

              <li class="nav-item">
                <a class="nav-link " >Contact Us</a></li>

                <li class="nav-item">
                  <i class="fa-solid fa-cart-shopping"></i>
                 <i class="fa-solid fa-user"></i>
                </li> 
            </ul>
          
          </div>
        </div>
      </nav>
        
      


 <!-- Payment  -->
 <section class="my-5 py-5">
        <div class="container text-center mt-3 pt-5">
          <h2 class="form-weight-bold">Payment</h2>
          <hr class="mx-auto">
        </div>
        <div class="mx-auto container">
        <p><?php echo $_GET['order_status'] ; ?></p>
        <p>Total payment :<?php echo($_SESSION['total']);?></p>
        <input class="btn btn-outline-primary"type="submit" value="Pay Now">
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