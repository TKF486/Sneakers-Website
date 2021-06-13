
<?php
include "../func/connect.php";
include 'header.php';
include 'sidebar.php';

$blogID = intval($_GET['blogID']);

$sql = "SELECT * from blog where blogID = $blogID";
$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {

    $title = $rows['title'];
    $introduction = $rows['introduction'];
    $maincontent = $rows['maincontent'];
    $postcategory = $rows['postcategory'];
    
    $subcontent = $rows['subcontent'];
    $subcontent1 = $rows['subcontent1'];
    $subcontent2 = $rows['subcontent2'];
    $subcontent3 = $rows['subcontent3'];

    $conclusion = $rows['conclusion'];

    $author = $rows['author'];
    $mediapath = "https://www.youtube.com/embed/";
   
    $mediaCode = $rows["mediaCode"];

    $video_link = $mediapath . $mediaCode;

    $date = $rows['date'];


    $imageID =$rows['imageID'];

  }
  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href='dbblog.php';</script>");
  }
 ?>




<html>


<head>

<title>Edit Blog</title>

<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

<div class="back_btn"><a href="dbblog.php"><button class="subtn1">back</button></a></div>

<br><br><br><br><br><br><br>
          <p11>Edit blog<p11>

<form action="../func/blogupdate.php" method="POST" enctype="multipart/form-data">


<h5>ID</h5><input type="text" name="blogID" value="<?php echo $blogID;?>" readonly>

<h5>Date</h5>
<input type="date" name="date" value="<?php echo $date;?>">

<h5>Author</h5>
<input type="text" name="author" value="<?php echo $author;?>"> 

<h5>Title</h5>
<input type="text" name="title" value="<?php echo $title;?>">

<h5>Introduction</h5>
<textarea name="introduction" id="introduction" cols="30" rows="10" ><?php echo $introduction;?></textarea>

<h5>Introduction</h5>
<textarea name="maincontent" id="maincontent" cols="30" rows="10" ><?php echo $maincontent;?></textarea>

<h5>Image</h5>
<input type="file" name="image">

<h5>PostCategory</h5>
<input type="text" name="postcategory" value="<?php echo $postcategory;?>">

<h5>MediaCode</h5>
<input type="text" name="mediaCode" value="<?php echo $mediaCode;?>">

<h5>Subcontent1</h5>
<textarea name="subcontent" id="subcontent" cols="30" rows="10" ><?php echo $subcontent;?></textarea>

<h5>Subcontent1</h5>
<textarea name="subcontent1" id="subcontent1" cols="30" rows="10" ><?php echo $subcontent1;?></textarea>

<h5>Subcontent2</h5>
<textarea name="subcontent2" id="subcontent2" cols="30" rows="10" ><?php echo $subcontent2;?></textarea>

<h5>Subcontent3</h5>
<textarea name="subcontent3" id="subcontent3" cols="30" rows="10" ><?php echo $subcontent3;?></textarea>

<h5>Conclusion</h5>
<textarea name="conclusion" id="conclusion" cols="30" rows="10" ><?php echo $conclusion;?></textarea>

<br>



<br>





<br>
<br>
<button class="subtn">submit</button>
</form>


</div>



<script src="../javascript/sidebar.js"></script>

</body>








</html>