
<?php
include "../func/connect.php";
include 'header.php';
include 'sidebar.php';



$sql = "SELECT * from aboutus";

$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {
    $aboutus_text = stripslashes($rows['aboutus_text']);
   

  }
  else
  {
      echo "<script>alert('Please upload about us before edit! ');</script>";
      die("<script>window.location.href='insertAboutUs.php';</script>");
  }
 ?>




<html>


<head>
<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Edit About Us</title>

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button> 
<div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
<form action="../func/aboutusEdit.php" method="POST">
<br><br><br><br><br>
<h1>EDIT ABOUT US</h1>

<h5>About Us</h5>
<textarea name="aboutus_text" id="aboutus_text" cols="100" rows="10" ><?php echo $aboutus_text;?></textarea>

 



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