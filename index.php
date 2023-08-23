<?php include("layouts/header.php"); ?>
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


  
  <?php include("layouts/footer.php"); ?>
