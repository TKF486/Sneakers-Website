<?php


include "../func/connect.php";
include 'header.php';
include 'sidebar.php';

if(!isset($_SESSION['email'])){
  echo "<script>
alert('Plese login to access this function!');
window.location.href='index.php';
</script>";
}

if(isset($_POST['remove'])){
  // echo $_POST['productID'];
  
    foreach($_SESSION['cart'] as $key => $value){
      if($value["productID"] == $_POST['productID']){
        unset($_SESSION['cart'][$key]);
    }
  }
}

if(isset($_POST['purchase'])){
  echo "<script>
alert('Yay you have made a purchase!');
window.location.href='index.php';
</script>";
}


?>

<html>

<head>
<link rel="stylesheet" href="../style/cart.css">
<link rel="stylesheet" href="../style/product_grid.css">
<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Database.css">
    
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>


<div class="cart_left">
<h3>My Cart</h3>



<table>
<tr>
    <th>productName	</th>   
    <th>productImg</th>
    <th>productPrice</th>
    <th>discount</th>
    <th>size</th>
    <th>quantity</th>
    <th>Total</th>
    <th>Remove</th>
</tr>



<?php

if(isset($_SESSION['cart'])){

  

  $array_cart = $_SESSION['cart'];
  // echo print_r($array_cart);
  $array_size = array_combine(array_column($array_cart,'productID'),array_column($array_cart,'size'));
  // echo print_r($array_size);
  
  $array_quantity = array_combine(array_column($array_cart,'productID'),array_column($array_cart,'quantity'));
  // echo print_r($array_quantity);
  
  $productID = array_column($array_cart,'productID');
  
  // $size = array_column($array_cart,'size');
  // $quantity = array_column($array_cart,'quantity');
  
  $sql = "SELECT * from shop";
  $result = mysqli_query($conn, $sql);
  $total = 0;
  $total_discount = 0;
  
  if(mysqli_num_rows($result)<=0)
          {
            echo "No product is in the cart now!";
          }else{
  while ($rows = mysqli_fetch_array($result))
  {
    foreach($productID as $id){
     
      $productImg_name = $rows['productImg'];
      $total_each_product = 0;
  
  
      $path = "../img/shop/";
      $type = ".png";
  
      $productImg = $path . $productImg_name . $type;
      
      
      if($rows['productID'] == $id){
        echo "<tr>";
        
        echo "<td>".$rows ['productName']."</td>";
        // echo "<td> <img src = $productImg alt=\"product_img\" class=\"product_image\"> </td>";  
        echo "<td class=\"image_grid\">".'<br/><img class="product_image_cart" src="data:image/png;base64,'.base64_encode( $rows['productImg'] ).'" />'."</td>";
        echo "<td>".$rows ['productPrice']."</td>";
       
        echo "<td>".$rows ['discount']."</td>";
  
        echo "<td>".$array_size [$id]."</td>";
        echo "<td>".$array_quantity [$id]."</td>";
  
        $total_each_product = (int)$rows['productPrice'] * (int)$array_quantity[$id];
        $discount_price = ($rows ['discount'])*$total_each_product;
        $total_discount = $total_discount + $discount_price;
        $total = $total + $total_each_product;
        echo "<td>".$total_each_product."</td>";
        
        
        echo "<form action=\"cart.php\" method=\"POST\">";
        echo "<td><input type=\"hidden\" name=\"productID\" value= $id>";
        echo " <button name=\"remove\">REMOVE</button></td>";
        echo "</form>";
        
  
        echo "</tr>";     
      }
    }
                 
  
  }
          }



}else{
  echo "No Item is in the cart!";
}


 


?>




</table>


</div>

<div class="cart_right">

<div class="price_details_wrapper">
  <h2>Price Details</h2>
    <div class="price_details">

      <div>
        <?php
          
             if(isset($_SESSION['cart'])){
              $count = count($_SESSION['cart']);
              echo "<span>Price ($count items): RM $total</span><br>";
              echo "<span>Discount: RM $total_discount</span><br>";
              
              $total_amount = (double)$total-(double)$total_discount;
              echo "<h3 style=\"color:black;\">Amount Payable: RM $total_amount</h3>";
              
              

          }else{
              echo "<h3>Price (0 items)</h3>";
          }
          
          
          
        ?>
       <form action="cart.php" method="POST">
        <button name='purchase'>Make Purchase</button>
        </form>
        
        


      </div>

    </div>
</div>


</div>
        </div>
        
<script src="../javascript/sidebar.js"></script>
</body>

</html>