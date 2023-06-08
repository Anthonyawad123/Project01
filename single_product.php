<?php
include('server/connection.php');
if(isset($_GET['product_id'])){
  $product_id = $_GET['product_id'];
  $stmt = $con->prepare("SELECT * FROM products WHERE product_id = ? ");

  $stmt->bind_param("i", $product_id);
  $stmt->execute();
  $products = $stmt->get_result();
} else {
  header('location: index.php');
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



<!-- single_product -->
<section class="container single-product my-5 pt-5">
    <div class="row" mt-5>
        <div class="col-lg-5 col-md-6 col-sm-12">
            
        <?php   while($row = $products->fetch_assoc()){ ?>

   <form action="POST" method="">
          
            <img class="img-fluid w-100 pb-1" src="assets/images/<?php echo $row['product_image'];?>" alt="" id="mainImg">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image'];?>" alt="" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image2'];?>" alt="" width="100%" class="small-img">
                </div> <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image3'];?>" alt="" width="100%" class="small-img">
                </div> <div class="small-img-col">
                    <img src="assets/images/<?php echo $row['product_image4'];?>" alt="" width="100%" class="small-img">
                </div>
            </div>
     
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
           <h6>Men/shoes</h6>
           <h3 class="py-4"> <?php echo $row['product_name'];?> </h3>
           <h2><?php echo $row['product_price'];?></h2>
           <input type="number" name="product_quantity" value="1"/>
           <button class="btn btn-primary" type="submit" name="add_to_cart" >Add To Cart</button>
           <h4 class="mb-4 mt-5">Product details</h4>
           <span><?php echo $row['product_description'];?>
           </span>
        </div>
        </from>
        <?php } ?>
        
        </div>


</section>
 
<!-- related_product -->
<section id="Related_product" class="my-5 pb-5">
    <div class="container text-center mt-5 py-3">
      <h3>Related Products</h3>
      <hr  class="mx-auto">
  
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/feature.jpg" alt="">
        <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h5 class="p-name">appel watch</h5>
        <h4 class="p-price">198$</h4>
        <button type="button" class="btn btn-outline-primary">buy now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/feature1.jpg" alt="">
        <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h5 class="p-name">Sports bag</h5>
        <h4 class="p-price">198$</h4>
        <button type="button" class="btn btn-outline-primary">buy now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/feature2.jpg" alt="">
        <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h5 class="p-name">headphones</h5>
        <h4 class="p-price">198$</h4>
        <button type="button" class="btn btn-outline-primary">buy now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/feature3.jpg" alt="">
        <div class="star">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
        <h5 class="p-name">Sports Shoes</h5>
        <h4 class="p-price">198$</h4>
        <button type="button" class="btn btn-outline-primary">buy now</button>

      </div>
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
    
    <script>
      var mainImg =  document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img");
      
      for (var i = 0; i < smallImg.length; i++) {
         smallImg[i].onclick = function() {
         mainImg.src = this.src; 
  };
      }
    </script>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>