<?php

include "../func/connect.php";
include "header.php";
include 'sidebar.php';


//gender
if(isset($_GET['postcategory']) == false){
  $postcategory = "";      
}else{
  $postcategory =  $_GET['postcategory'];
}


//cateogry
if(isset($_GET['title']) == false){
  $title = "";      
}else{
  $title =  $_GET['title'];
}










 ?>

<head>
  <title>Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/blog.css">
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/index.css">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>

<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="list_wrapper">
                <ul>
                    <li>
                    

                    <form action="../func/blogSearch.php" class="blog_search_form" method="POST"> 
                            <input type="text" placeholder="Blog Search" name="search" class="search_box">
                            <button type="submit" class="search_button"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
       
                </ul>
            </div>
        <div class="blog_form_wrapper">
        
                     
                       

      <?php
      
         //title
        if($title != ""){
          $sql = "SELECT * from blog WHERE title = '".$title."'";
          
      }
      //postcategory
      elseif($postcategory != ""){
        $sql = "SELECT * from blog WHERE postcategory = '".$postcategory."'";
        
      }
      //all
      else{
       
         
        $sql = "SELECT * from blog ORDER BY date DESC";
        
      }
      
      
      
      
      // $sql = "SELECT * from blog ORDER BY date DESC";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)<=0)
        {
          // die("<script>alert('No topic yet!');</script>");
        }
        

        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
          while($rows = mysqli_fetch_assoc($result)){
          // $img_name1 = "../img/blog/";
          // $img_name2 = $rows["imageID"];
          // $img_name3 = ".jpg";
          // $img_path = $img_name1 . $img_name2 . $img_name3;
          // $img_path = $img_name1 . $img_name2;
        
          echo "<div class=\"blog_post\">
          <a href ='blogdetails.php?blogID=".$rows['blogID']."'>";
               
          echo '<br/><img src="data:image/png;base64,'.base64_encode( $rows['imageID'] ).'" />';
          echo " <pd class=\"title\">".$rows['title']."</pd> <br><br> <pd>".$rows ['postcategory']."</pd> <br><br>
                <p5>Posted by".$rows['author']." on ".$rows['date']."</p5><br>
                <br>
                </a></div>";
          }
        }





        

        
       ?>
        
          
          </div>
</div>


  <?php
include "footer.php";


 ?>


<script src="../javascript/sidebar.js"></script>
</body>
