
<?php
include "../func/connect.php";
include 'header.php';
include 'sidebar.php';

$productID = intval($_GET['productID']);

$sql = "SELECT * from shop where productID = $productID";

$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {
    $productID = $rows['productID'];
    $productCategory = $rows['productCategory'];
      $productName = $rows['productName'];
      $productPrice = $rows['productPrice'];
      $productImg = $rows['productImg'];
      // $productImg2 = $rows['productImg2'];
      // $productImg3 = $rows['productImg3'];
      // $productImg4 = $rows['productImg4'];
      // $productImg5 = $rows['productImg5'];
      $sku = $rows['sku'];
      $gender = $rows['gender'];   
      $releasedate = $rows["releasedate"];
      $discount = $rows['discount'];
      $brand = $rows['brand'];
      $productDesc = $rows['productDesc'];

  }
  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href='dbblog.php';</script>");
  }
 ?>




<html>


<head>

<title>Edit Product</title>

<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>

<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

<div class="back_btn"><a href="dbproduct.php"><button class="subtn1">back</button></a></div>
<form action="../func/productupdate.php" method="POST" enctype="multipart/form-data">

<br><br><br><br><br><br><br>
<p11>Edit Product<p11>

<h5>ID</h5>
<input type="text" name="productID" value="<?php echo $productID;?>" readonly>

<h5>productCategory</h5>
<input type="text" name="productCategory" value="<?php echo $productCategory;?>">

<h5>productName</h5>
<input type="text" name="productName" value="<?php echo $productName;?>"> 

<h5>productPrice</h5>
<input type="number" name="productPrice" value="<?php echo $productPrice;?>">

<h5>productImg</h5>
<?php echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg'] ).'" />'."</td>"; ?>
<input type="file" name="productImg" > 



<!-- <h5>productImg4</h5>
<input type="file" name="productImg4" > 

<h5>productImg5</h5>
<input type="file" name="productImg5" >  -->

<h5>sku</h5>
<input type="text" name="sku" value="<?php echo $sku;?>"> 

<h5>gender</h5>
<select name="gender" id="">
<option value="man" <?php if($gender=="man"){echo "selected";} ?>>man</option>
<option value="woman" <?php if($gender=="woman"){echo "selected";} ?>>woman</option>
<option value="kid" <?php if($gender=="kid"){echo "selected";} ?>>kid</option>
</select>

<h5>releasedate</h5>
<input type="date" name="releasedate" value="<?php echo $releasedate;?>"> 

<h5>discount</h5>
<h2 style="color:red;">*Use decimal for discount (e.g. 0.05 ~ 5% discount)</h2>
<input type="text" name="discount" value="<?php echo $discount;?>"> 

<h5>brand</h5>
<input type="text" name="brand" value="<?php echo $brand;?>"> 

<h5>productDesc</h5>
<textarea name="productDesc" id="" cols="30" rows="10"><?php echo $productDesc;?></textarea>

<!-- <h5>Conclusion</h5>
<textarea name="conclusion" id="conclusion" cols="30" rows="10" ></textarea> -->
<br><br>
<button class="subtn">Submit</button>
</form>



<br>



<br>



</div>




<script src="../javascript/sidebar.js"></script>

</body>








</html>