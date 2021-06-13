<?php

include 'header.php';
include 'sidebar.php';
if($_SESSION['adminStatus'] == 'a'){
  // echo "<script>alert('Welcome back ADMIN! ".$_SESSION['fname']."');</script>";

}

else{
  header("location:../interface/index.php");
}

?>



<head>
  <title>Admin Dashbaord</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Admin.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>

</head>

<body>

 
<div></div><br> <br> <br> <br> <br> <br> 
            <div class="admin_func">
              <h1>Database</h1>
              <hr>
              <a href="dbuser.php" ><p>User Database</p></a>
              <a href="dbproduct.php" style="text-decoration: none;"><p>Product Database</p></a>
              <a href="dbblog.php" style="text-decoration: none;"><p>Blog Database</p></a>
              <a href="dbFAQ.php" style="text-decoration: none;"><p>FAQ Database</p></a>
              <a href="dbreview.php" style="text-decoration: none;"><p>Review Database</p></a>
              <hr>

              <h1>Upload & Edit</h1>
              <a href="uploadProduct.php" style="text-decoration: none;"><p>Upload Product</p></a>
              <a href="uploadBlog.php" style="text-decoration: none;"><p>Upload Blog</p></a>
              <a href="uploadFAQ.php" style="text-decoration: none;"><p>Upload FAQ</p></a>
              <a href="insertAboutUs.php" style="text-decoration: none;"><p>Upload About Us</p></a>
              <a href="editAboutUs.php" style="text-decoration: none;"><p>Edit About Us</p></a>
              <hr>
              
             
              
              
              

             
              <!-- <a href="dbcontact.php" style="text-decoration: none;"><p>Customer Contact</p></a> -->

            </div>


            
            



         

       


  <?php
include 'footer.php';
  ?>





<script src="../javascript/sidebar.js"></script>


</body>
