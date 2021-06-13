
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

    <title>Insert FAQ</title>

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
<form action="../func/faqinsert.php" method="POST">


<!-- <h5>ID</h5>
<input type="text" name="blogID"> -->
<br><br><br><br><br>
<h1>Insert FAQ</h1>



<h5>Topic</h5>
<select name="topic" id="">
<option value="general">general</option>
<option value="shipping">shipping</option>
<option value="refunds">refunds</option>
</select>

<h5>subtitle1</h5>
<input type="text" name="subtitle1" > 
<br>

<h5>SubContent</h5>
<textarea name="subcontent1" id="subcontent1"></textarea>
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