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
                <a class="nav-link"  href="index.php">Home</a>
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

     <!-- Home -->
   <section id ="home">
      <div class="container">
        <h5>New arrival</h5>
        <h1><span>Best Prices</span> This Season</h1>
        <p>Eshop offers Best product for the most affordable price</p>
        <button>Shop Now</button>
      </div>
   </section>
   <!-- Brand -->

    <!-- New -->

    <section id="new" class="w-100">
      <div class="row p-0 m-0">
        <!-- one -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img src="assets/images/sale2.jpg" class="img-fluid" alt="">
          <div class="details">
            <h2>Extremely Awesome Shoes</h2>
            <button class="text-uppercase">shop now</button>
          </div>
        </div>
        <!-- two -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img src="assets/images/sale3.jpg" class="img-fluid" alt="">
          <div class="details">
            <h2>Awesome Jacket</h2>
            <button class="text-uppercase">shop now</button>
          </div>
        </div>
        <!-- three -->
        <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
          <img src="assets/images/sale1.jpg" class="img-fluid" alt="">
          <div class="details">
            <h2>50% OFF Watches</h2>
            <button class="text-uppercase">shop now</button>
          </div>
        </div>
      </div>
    </section>
   
 <!-- Featured -->
 <section id="Featured" class="my-5 pb-5">
      <div class="container text-center mt-5 py-3">
        <h3>Our Featured</h3>
        <hr>
        <p>Here you can check out our featured products</p>
      </div>
      <div class="row mx-auto container-fluid">
    <?php
include('server/get_featured_products.php');
if ($featured_products->num_rows > 0) {
    while ($row = $featured_products->fetch_assoc()) {
        ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/images/<?php echo $row['product_image']; ?>" alt="">
            <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
            </div>
            <h5 class="p-name"><?php echo $row['product_name']; ?></h5>
            <h4 class="p-price"><?php echo $row['product_price']; ?></h4>
           <a href="<?php echo "single_product.php?product_id=".$row['product_id']; ?>"> <button  type="button" class="btn btn-outline-primary">buy now</button></a>
        </div>
        <?php
    }
} else {
    echo "No featured products available.";
}

$stmt->close();
?>
      </div>
    </section>

<section id ="home">
      <div class="container">
        <h5>New arrival</h5>
        <h1><span>Best Prices</span> This Season</h1>
        <p>Eshop offers Best product for the most affordable price</p>
        <button>Shop Now</button>
      </div>
   </section>
   <!-- clothes -->
   <section id="clothes" class="my-5">
    <div class="container text-center mt-5 py-3">
      <h3>Dresses &coats</h3>
      <hr>
      <p>Here you can check out our clothes</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/clothes1.jpg" alt="">
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
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/clothes2.jpg" alt="">
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
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/clothes3.jpg" alt="">
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
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/images/clothes4.jpg" alt="">
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
  
  <section id="brand"class="container">
    <div class="row">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12 " src="assets/images/image1.jpg" >
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/image2.jpg">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/image3.jpg">
      <img class="img-fluid col-lg-3 col-md-6 col-sm-12" src="assets/images/image4.jpg">
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
