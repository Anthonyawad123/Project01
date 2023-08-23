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







<?php   include("layouts/header.php");      ?>



<!-- single_product -->
<section class="container single-product my-5 pt-5">
    <div class="row" mt-5>
        <div class="col-lg-5 col-md-6 col-sm-12">
            
        <?php   while($row = $products->fetch_assoc()){ ?>


          
          
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
           <form  method="POST" action="cart.php">
                        
           <input type="hidden" name="product_id" value="<?php echo $row['product_id'];?>"/>
           <input type="hidden" name="product_image" value="<?php echo $row['product_image'];?>"/>
           <input type="hidden" name="product_name" value="<?php echo $row['product_name'];?>"/>
           <input type="hidden" name="product_price" value="<?php echo $row['product_price'];?>"/>
           <input type="number" name="product_quantity" value="1"/>
           <button class="btn btn-primary" type="submit" name="add_to_cart" >Add To Cart</button>
        </form>
         
           <h4 class="mb-4 mt-5">Product details</h4>
           <span><?php echo $row['product_description'];?>
           </span>
        </div>
       
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
  









    
    <script>
      var mainImg =  document.getElementById("mainImg");
      var smallImg = document.getElementsByClassName("small-img");
      
      for (var i = 0; i < smallImg.length; i++) {
         smallImg[i].onclick = function() {
         mainImg.src = this.src; 
  };
      }
    </script>
   
   <?php   include("layouts/footer.php");      ?>