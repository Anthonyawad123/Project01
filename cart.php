<?php





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


    <!-- Cart -->
    <section class="cart container py-5 my-5">
        <div class="container mt-5">
            <h2 class="font-weight-bold">Your Cart</h2>
            <hr>
        </div>
        <table class="mt-5 mb-5">
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>subtotal</th>
                </tr>
                <tr>
                    <td><div class="product-info">
                        <img src="assets/images/feature.jpg " />
                    
                    <div>
                    <p>White Shoes</p>
                    <small><span>$</span>166</small>
                    <br>
                    <a href="#" class="remove-btn">Remove</a>
                </div> </div></td>
                <td>
                    <input type="number" value="1"/>
                    <a  class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                     <span class="product-price">155</span>
                </td>
                </tr>
                <tr>
                    <td><div class="product-info">
                        <img src="assets/images/feature.jpg " />
                    
                    <div>
                    <p>White Shoes</p>
                    <small><span>$</span>166</small>
                    <br>
                    <a href="#" class="remove-btn">Remove</a>
                </div> </div></td>
                <td>
                    <input type="number" value="1"/>
                    <a  class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                     <span class="product-price">155</span>
                </td>
                </tr>
                <tr>
                    <td><div class="product-info">
                        <img src="assets/images/feature.jpg " />
                    
                    <div>
                    <p>White Shoes</p>
                    <small><span>$</span>166</small>
                    <br>
                    <a href="#" class="remove-btn">Remove</a>
                </div> </div></td>
                <td>
                    <input type="number" value="1"/>
                    <a  class="edit-btn">Edit</a>
                </td>
                <td>
                    <span>$</span>
                     <span class="product-price">155</span>
                </td>
                </tr>
                
        </table>
        <div class="cart-total">
            <table>
              <tr>
                <td>subtotal</td>
                <td>$155</td>
              </tr>
              <tr>
                    <td>Total</td>
                    <td>$155</td>
              </tr>
            </table>
        </div>
        <div class="checkout-container">
            <button class="Checkout-btn btn btn-dark">Checkout</button>
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