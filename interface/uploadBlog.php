
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

    <title>Create Blog</title>

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
        <form action="../func/blogInsert.php" method="POST" enctype="multipart/form-data">


<!-- <h5>ID</h5>
<input type="text" name="blogID"> -->
<br><br><br><br><br>
<h1>BLOG UPLOAD</h1>

<h5>Date</h5>
<input type="date" name="publish_date" >

<h5>Author</h5>
<input type="text" name="author" > 

<h5>Title</h5>
<input type="text" name="title" >

<h5>Introduction</h5>
<textarea name="introduction" id="introduction" cols="30" rows="10" ></textarea>

<h5>Main Content</h5>
<textarea name="maincontent" id="maincontent" cols="30" rows="10" ></textarea>

<h5>Image</h5>
<input type="file" name="image" >

<h5>PostCategory</h5>
<input type="text" name="postcategory" >

<h5>MediaCode</h5>
<input type="text" name="mediaCode" >

<h5>Subcontent1</h5>
<textarea name="subcontent" id="subcontent" cols="30" rows="10" ></textarea>

<h5>Subcontent1</h5>
<textarea name="subcontent1" id="subcontent1" cols="30" rows="10" ></textarea>

<h5>Subcontent2</h5>
<textarea name="subcontent2" id="subcontent2" cols="30" rows="10" ></textarea>

<h5>Subcontent3</h5>
<textarea name="subcontent3" id="subcontent3" cols="30" rows="10" ></textarea>

<h5>Conclusion</h5>
<textarea name="conclusion" id="conclusion" cols="30" rows="10" ></textarea>
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