
<?php
include 'header.php';
include 'sidebar.php';
?>




<html>


<head>
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Upload Product</title>

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
<form action="../func/productinsert.php" method="POST" enctype="multipart/form-data">


<!-- <h5>ID</h5>
<input type="text" name="blogID"> -->
<br><br><br><br><br>
<h1>PRODUCT UPLOAD</h1>

<h5>productCategory</h5>
<input type="text" name="productCategory" required>

<h5>productName</h5>
<input type="text" name="productName" required> 

<h5>productPrice</h5>
<input type="number" name="productPrice" required >

<h5>productImg</h5>
<input type="file" name="productImg" required> 

<!-- <h5>productImg2</h5>
<input type="file" name="productImg2" > 

<h5>productImg3</h5>
<input type="file" name="productImg3" >  -->

<!-- <h5>productImg4</h5>
<input type="file" name="productImg4" > 

<h5>productImg5</h5>
<input type="file" name="productImg5" >  -->

<h5>sku</h5>
<input type="text" name="sku" required> 

<h5>gender</h5>
<select name="gender" id="" required>
<option value="man">man</option>
<option value="woman">woman</option>
<option value="kid">kids</option>
</select>

<h5>releasedate</h5>
<input type="date" name="releasedate" required> 

<h5>discount</h5>
<h2 style="color:red;">*Use decimal for discount (e.g. 0.05 ~ 5% discount)</h2>
<input type="text" name="discount" value="0" required> 

<h5>brand</h5>
<input type="text" name="brand" required> 

<h5>productDesc</h5>
<input type="text" name="productDesc" required> 


<!-- <h5>Conclusion</h5>
<textarea name="conclusion" id="conclusion" cols="30" rows="10" ></textarea> -->
<br><br>
<button class="subtn">Submit</button>
</form>

</div>


<?php
include 'footer.php';
?>

<script src="../javascript/sidebar.js"></script>
</body>








</html>