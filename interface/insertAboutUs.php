
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
    <title>Insert About Us</title>

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>

<form action="../func/aboutusInsert.php" method="POST">

<!-- <h5>ID</h5>
<input type="text" name="blogID"> -->
<br><br><br><br><br>
<h1>ABOUT US INSERT</h1>



<h5>About Us Text</h5>
<textarea name="aboutus_text" id="aboutus_text"></textarea>
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