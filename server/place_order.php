<?php
include('connection.php');
session_start();
if(isset($_POST['place_order'])) {
    // 0. Get user info and store in the database
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['Address'];
    $order_cost = $_SESSION['total'];
    $order_status = "on_hold";
    $user_id = 1;
    $order_date = date('Y-m-d H:i:s');
    
   
    $stmt = $con->prepare("INSERT INTO `orders` (order_cost, order_status, user_id, user_phone, user_city, user_address, order_date) VALUES (?,?,?,?,?,?,?)");
    
   
        // 1. Bind the parameters and execute the statement
        $stmt->bind_param('isiisss', $order_cost, $order_status, $user_id, $phone, $city, $address, $order_date);
        $stmt->execute();
        
        // 2. Get the inserted order ID
        $order_id = $stmt->insert_id;
        
        
//2.get product from the cart
    
foreach ($_SESSION['cart'] as $key => $value) {
  $product = $_SESSION['cart'][$key];
  $product_id = $product['product_id'];
  $product_name = $product['product_name'];
  $product_image = $product['product_image'];
  $product_price = $product['product_price'];
  $product_quantity = $product['product_quantity'];
  //3.store each single item in order_items database
  $stmt1 = $con->prepare("INSERT INTO order_items (order_id, product_id, product_name, product_image, product_price, product_quantity, user_id, order_date)
                          VALUES (?,?,?,?,?,?,?,?)");
  $stmt1->bind_param('iissiiis', $order_id, $product_id, $product_name, $product_image, $product_price, $product_quantity, $user_id, $order_date);
  $stmt1->execute();
  

}

    //5.remove everything from the cart
    //unset($_SESSION['cart']);
    //inform user wether evrything is fine there is a problem
   header('location: ../payment.php?order_status=order placed successfully');
}