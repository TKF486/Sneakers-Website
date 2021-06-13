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

    // $img_name1 = "../img/blog/";
    // $img_name2 = $rows["imageID"];
    // $img_name3 = ".jpg";
    // $imageID = $img_name1 . $img_name2 . $img_name3;
    $imageID = $rows['imageID'];
    
    // echo "YAY!";

  }

  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href = 'dbblog.php';</script>");
  }
  ?>

  <html>
  
  <head>
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/blogdetails.css">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
  </head>
  <body>
  <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="back_btn"><a href="blog.php"><button class="subtn1">back</button></a></div>
<div class="blog_wrapper">
  <?php

echo "<br><br>";
echo "<h1> $title </h1>";
echo '<br/><img src="data:image/png;base64,'.base64_encode($imageID).'" />';
echo "<br>";

echo "<div class=\"details_wrapper\">";
echo "<div class=\"details details1\"> $date </div>";
echo "<div class=\"details details2\"> $author </div>";
echo "<div class=\"details details3\"> $postcategory </div>";
echo "</div>";

echo "<br><br>";
echo "<h2> Introduction </h2><br>";
echo "<div>$introduction</div><br>";
echo "<h2> Main Content </h2><br>";
echo "<div>$maincontent</div><br>";
echo "<br><br>";


//media
echo "<div class=\"video\">";
echo "<iframe width=\"560\" height=\"315\" src=$video_link></iframe>";
echo "</div>";

echo "<br><h2> Sub-headlines </h2>";
echo "<br><b>$subcontent</b>";
echo "<ol>";
echo "<br><li> $subcontent1 </li>";
echo "<br><li> $subcontent2 </li>";
echo "<br><li> $subcontent3 </li>";
echo "</ol>";
echo "<br><h2> Conclusion </h2><br>";
echo "<span>$conclusion </span>";


?>



<div class="logo_wrapper_blog">
                
                  <ul>
                    <li>  <a href="https://www.facebook.com/">
                    
                    <i class="fa fa-facebook-f social_icon_blog"></i>
                    
                </a></li>
                
                  
<li>   <a href="https://www.instagram.com/">
                       <i class="fa fa-instagram social_icon_blog"></i>
                    </a></li>
               
                 
                    
</ul>  

                </div>

</div>
 








</div>


<?php
include "footer.php";
?>

<script src="../javascript/sidebar.js"></script>



  </body>
  </html>