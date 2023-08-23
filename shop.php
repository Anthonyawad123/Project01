<?php
include('server/connection.php');
//use the search section
if(isset($_POST['search'])){
  $category = $_POST['category'];
  $price = $_POST['price'];
  $stmt = $con->prepare("SELECT * FROM products WHERE product_category=? AND product_price<=?");
  $stmt->bind_param("si", $category, $price);
  $stmt->execute();
  
  $products = $stmt->get_result();

  // Process the search results here...

} else {
  $stmt = $con->prepare("SELECT * FROM products");
  $stmt->execute();
  
  $products = $stmt->get_result();

  // Process all products here...
}
?>

<?php   include("layouts/header.php");      ?>


  <div class="container">
  <div class="row">
 <!-- search  -->
<section id="search" class="my-5 py-5 ms-2">
<div class="container mt-5 py-5"> 
  <p>search Products</p>
  <hr>
</div>
<form action="shop.php" method="POST">
  <div class="row mx-auto container">
   <div class="col-lg-12 col-md-12 col-sm-12">
     <p>Category</p>
     <div class="form-check">
      <input class="form-check-input"  value="blue apple watch"type="radio" name="category" id="category_one">
      <label class="form-check-label" for="flexRadioDefault1">
      watch
      </label>   
     </div>   
    
     <div class="form-check">
      <input class="form-check-input" value="Headphone wirless"type="radio" name="category" id="category_one">
      <label class="form-check-label" for="flexRadioDefault1">
      headphone
      </label>   
     </div>   

     <div class="form-check">
      <input class="form-check-input" value="sport bag"type="radio" name="category" id="category_one" checked>
      <label class="form-check-label" for="flexRadioDefault2">
      Bag
      </label>   
     </div>   

   

     <div class="form-check">
      <input class="form-check-input" value="Nikes shoes" type="radio" name="category" id="category_one" checked>
      <label class="form-check-label" for="flexRadioDefault2">
      shoes
      </label>   
     </div>   

   </div>
  </div>

  <div class="my-5 pb-5">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <p>Price</p>
      <input type="range" class="form-range w-50" name="price" value="10" min="1"  max="1000" id="customRange2">
      <div class="w-100">
        <span style="float:left">1</span>
        <span style="float:right">1000</span>
      </div>
    </div>
  </div>
  <div class="form-group my-3 mx-3">
    <input type="submit" name="search" value="Search" class="btn btn-primary">


  </div>
</form>

</section>



     <!-- shop -->
      <section id="shop" class="my-5 pb-5">
      <div class="container text-center mt-5 py-3">
          <h3>Our Featured</h3>
          
          <p>Here you can check out our featured products</p>
        </div>
        <div class="row mx-auto container-fluid">
        <?php  while($row= $products->fetch_assoc()){            ?>
            <div class="product text-center col-lg-3 col-md-4 col-sm-12">
              <img class="img-fluid mb-3" src="assets/images/<?php echo $row['product_image'];   ?>" alt="">
              <div class="star">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
              </div>
              <h5 class="p-name"><?php echo $row['product_name'];  ?></h5>
              <h4 class="p-price"><?php echo $row['product_price'];  ?></h4>
             <a class="btn btn-outline-primary" href="<?php echo "single_product.php?product_id=".$row['product_id'] ?>">buy now</a>
    
            </div>
            
        <?php } ?>
           <nav aria-label="Page navigation example">
            <ul class="pagination nt-5">
               <li class="page-item"><a class="page-link" href="#">Previous</a></li>
               <li class="page-item"><a class="page-link" href="#">0</a></li>
               <li class="page-item"><a class="page-link" href="#">1</a></li>
               <li class="page-item"><a class="page-link" href="#">2</a></li>
               <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>

           </nav>
          </div>
        
      </section> 
    </div>
    </div>

    <?php   include("layouts/footer.php");      ?>