<?php

/*
not paid 
paid
shipped
delivered

*/
include('server/connection.php');

if(isset($_POST['order_details_btn']) && isset($_POST['order_id']))
{
  $order_id=$_POST['order_id'];
  $order_status=$_POST['order_status'];
 $stmt=$con->prepare("SELECT * FROM order_items WHERE (order_id=?)");
 $stmt->bind_param('i',$order_id);
 $stmt->execute();
 $order_details=$stmt->get_result();
 $order_total_price=calculateTotalorderPrice($order_details);
}else{
//  header('location:account.php');
}







function calculateTotalorderPrice($order_details){
  $total=0;
  foreach( $order_details as $row){
         
      $product_price = $row['product_price'];
      $product_quantity = $row['product_quantity'];

      $total = $total + ($product_price*$product_quantity);
  }

 return $total;

}






?>


<?php include("layouts/header.php"); ?>



 <!-- Order details-->
 <section id="orders"class="mt-5 py-5 mx-auto">
    <div class="container mx-auto">
        <h3 class="text-center font-weight-bold">orders details</h3>
        <hr class="mx-auto">
        <div class="table-responsive">
  <table class="table table-bordered table-striped">
    
      <tr>
   
        <th>image</th>
        <th> price </th>
        <th> quantity</th>
        
      </tr>
      <?php   foreach( $order_details as $row){ ?>
      <tr>
        <td>
          <div class="product info">
            <img src="assets/images/<?php  echo $row['product_image'] ;?>" alt="">
            <div>
              <p class="mt-3"><?php echo $row['product_name'] ;?></p>
            </div>
          </div>
        </td>
        <td>
          <span> <?php echo $row['product_price'] ;?></span>
        </td>
        <td>
          <span><?php echo $row['product_quantity']; ?></span>
        </td>
      
      <td>
          <span> </span>
        </td>
      
    </tr>
    <?php } ?> 
   
  </table>
</div>
<?php  if($order_status=="not paid") {    ?>
 <form style="float : right" method="POST" action="payment.php">
   <input type="hidden" name="order_total_price" value="<?php echo $order_total_price ?>">
   <input type="hidden" name="order_status" value="<?php echo $order_status ?>">
  <input type="submit" name="order_pay_btn" value="pay now" class="btn btn-primary">
 </form>



  <?php         }  ?>
</section>











<?php include("layouts/footer.php"); ?>