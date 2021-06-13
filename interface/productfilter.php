<?php

include 'header.php';
include 'sidebar.php';
?>

<html>

<head>
<link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/product_grid.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>
  


    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

        <?php if($_GET['gender']=="man" ){echo " <div class=\"gender_banner man_banner\"></div>";}?>
        <?php if($_GET['gender']=="woman" ){echo " <div class=\"gender_banner woman_banner\"></div>";}?>
        <?php if($_GET['gender']=="kid" ){echo " <div class=\"gender_banner kid_banner\"></div>";}?>
        
        
        <!-- <div class="gender_banner man_banner"></div>
        <div class="gender_banner woman_banner"></div>
        <div class="gender_banner kid_banner"></div> -->


        
        
       

        <form action="" method="GET" class="filter_form">
        <h1>Product Filter</h1>
        <div class="pro_fil">
          
            <div>
            <h2 class= "fil_title">Gender</h2>
            <select name="gender" id="">
                <option value="all" <?php if($_GET['gender']=="all" ){echo "selected" ;} ?>>all</option>
                <option value="man" <?php if($_GET['gender']=="man" ){echo "selected" ;} ?>>man</option>
                <option value="woman" <?php if($_GET['gender']=="woman" ){echo "selected" ;} ?>>woman</option>
                <option value="kid" <?php if($_GET['gender']=="kid" ){echo "selected" ;} ?>>kid</option>
            </select>
            </div>

        
            
            <div>
            <h2 class= "fil_title">Category</h2>
            <select name="category" id="">
                <option value="all">all</option>
                <option value="jordan" <?php if($_GET['category']=="jordan" ){echo "selected" ;} ?>>jordan</option>
                <option value="yeezy" <?php if($_GET['category']=="yeezy" ){echo "selected" ;} ?>>yeezy</option>
                <option value="dunk" <?php if($_GET['category']=="dunk" ){echo "selected" ;} ?>>dunk</option>
            </select>
            </div>

            <div>
            <h2 class= "fil_title">Brand</h2>
            <select name="brand" id="">
                <option value="all">all</option>
                <option value="nike" <?php if($_GET['brand']=="nike" ){echo "selected" ;} ?>>nike</option>
                <option value="adidas" <?php if($_GET['brand']=="adidas" ){echo "selected" ;} ?>>adidas</option>
                <option value="puma" <?php if($_GET['brand']=="puma" ){echo "selected" ;} ?>>puma</option>
            </select>
            </div>


            <div>
            <h2 class= "fil_title">Year</h2>
            <select name="releasedate" id="">
                <option value="">all</option>
                <option value="1990|2000" <?php if($_GET['releasedate']=="1990|2000" ){echo "selected" ;} ?>>1990-2000</option>
                <option value="2001|2010" <?php if($_GET['releasedate']=="2001|2010" ){echo "selected" ;} ?>>2001-2010</option>
                <option value="2011|2020" <?php if($_GET['releasedate']=="2011|2020" ){echo "selected" ;} ?>>2011-2020</option>
            </select>
            </div>



            <div>
            <h2 class= "fil_title">Sorting</h2>
            <select name="sort" id="">
                <option value="all">all</option>
                <option value="price_asc" <?php if($_GET['sort']=="price_asc" ){echo "selected" ;} ?>>Price [low-high]
                </option>
                <option value="price_desc" <?php if($_GET['sort']=="price_desc" ){echo "selected" ;} ?>>Price [high-low]
                </option>
                <option value="newest" <?php if($_GET['sort']=="newest" ){echo "selected" ;} ?>>Newest</option>
                <option value="discount" <?php if($_GET['sort']=="discount" ){echo "selected" ;} ?>>Discount</option>
            </select>
            </div>
       

            <!-- <a href=""><i class="fa fa-search"></i></a> -->
            <button class="filt_search"><i class="fa fa-search"></i></button>

        </form>
        </div>

        <br><br><br><br><br><br><br><br>

   
    <?php
      
      include "../func/connect.php";
      
     $gender_input =  $_GET['gender'];
     $category_input =  $_GET['category'];
     $brand =  $_GET['brand'];

     $releasedate =  $_GET['releasedate'];
     $releasedate_explode = explode('|',$releasedate);
    //  echo "Year: ". $releasedate_explode[0]."<br />";
    //  echo "Year: ". $releasedate_explode[1]."<br />";
    //  echo "Year: ". $releasedate_explode[2]."<br />";
    


     $sort =  $_GET['sort'];

//gender
     if(isset($_GET['gender']) == false){
        $gender_input = "";      
      }else{
        $gender_input =  $_GET['gender'];
      }

    
//cateogry
     if(isset($_GET['category']) == false){
        $category_input = "";      
      }else{
        $category_input =  $_GET['category'];
      }


//brand   
     if(isset($_GET['brand']) == false){
        $brand = "";      
      }else{
        $brand =  $_GET['brand'];
      }

//releasedate   
if(isset($_GET['releasedate']) == false){
  $releasedate = "";      
}else{
  $releasedate =  $_GET['releasedate'];
}     


//productName
  if(isset($_GET['productName']) == false){
        $productName = "";      
      }else{
        $productName =  $_GET['productName'];
      }








    //show all
    if($gender_input == "all" && $brand == "all" && $category_input == "all" && $releasedate == null){
        $sql = "SELECT * from shop";
    }

    //show specific gender
    elseif($gender_input != "all" && $category_input == "all" && $brand == "all" && $releasedate == null){
        $sql = "SELECT * from shop WHERE gender = '".$gender_input ."'";
    }
    
    //show specific category
    elseif($gender_input == "all" && $brand == "all" && $category_input != "all" && $releasedate == null){
        $sql = "SELECT * from shop WHERE productCategory = '".$category_input ."'";
        
    }

      //show specific brand
      elseif($gender_input == "all" && $category_input == "all" && $brand != "all" && $releasedate == null){
        $sql = "SELECT * from shop WHERE brand = '".$brand ."'";
        
    }

     //show specific release date
     elseif($gender_input == "all" && $category_input == "all" && $brand == "all" && $releasedate != null){
      $sql = "SELECT * from shop WHERE YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
        
      
  }

        //show specific gender & brand
        elseif($gender_input != "all" && $category_input == "all" && $brand != "all" && $releasedate == null){
          $sql = "SELECT * from shop WHERE brand = '".$brand ."' AND gender = '".$gender_input ."'";
          
      }

          //show specific gender & category
          elseif($gender_input != "all" && $category_input != "all" && $brand == "all" && $releasedate == null){
            $sql = "SELECT * from shop WHERE productCategory = '".$category_input ."' AND gender = '".$gender_input ."'";
            
        }

           //show specific brand & category
           elseif($gender_input == "all" && $category_input != "all" && $brand != "all" && $releasedate == null){
            $sql = "SELECT * from shop WHERE brand = '".$brand ."' AND productCategory = '".$category_input ."'";
            
        }

              //show specific gender  & release_date
              elseif($gender_input != "all" && $category_input == "all" && $brand == "all" && $releasedate != null){
                $sql = "SELECT * from shop WHERE gender = '".$gender_input ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
                
            }

                  //show specific category & release_date
           elseif($gender_input == "all" && $category_input != "all" && $brand == "all" && $releasedate != null){
            $sql = "SELECT * from shop WHERE productCategory = '".$category_input ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
            
        }

              //show specific brand  & release_date
              elseif($gender_input == "all" && $category_input == "all" && $brand != "all" && $releasedate != null){
                $sql = "SELECT * from shop WHERE brand = '".$brand ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
                
            }


              //show specific gender  & category & brand
              elseif($gender_input != "all" && $category_input != "all" && $brand != "all" && $releasedate == null){
                $sql = "SELECT * from shop WHERE gender = '".$gender_input ."' AND productCategory = '".$category_input ."' AND brand = '".$brand ."'";
                
            }

              //show specific gender & brand & release_date
              elseif($gender_input != "all" && $category_input == "all" && $brand != "all" && $releasedate != null){
                $sql = "SELECT * from shop WHERE gender = '".$gender_input ."' AND brand = '".$brand ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
                
            }

                //show specific category & brand & release_date
                elseif($gender_input == "all" && $category_input != "all" && $brand != "all" && $releasedate != null){
                  $sql = "SELECT * from shop WHERE productCategory = '".$category_input ."' AND brand = '".$brand ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
                  
              }
     





        

//select all
   else{
    $sql = "SELECT * from shop WHERE gender = '".$gender_input ."' AND productCategory = '".$category_input."' AND brand = '".$brand ."' AND YEAR(releasedate) BETWEEN '".$releasedate_explode[0]."' AND '".$releasedate_explode[1]."'";
   }


   if($sort == "price_asc"){
    $sql = "SELECT * from shop ORDER BY productPrice ASC";
   }

   elseif($sort == "price_desc"){
    $sql = "SELECT * from shop ORDER BY productPrice DESC";
   }

   elseif($sort == "newest"){
    // $sql = "SELECT * from shop ORDER BY STR_TO_DATE(releasedate, '%M %d, %Y') DESC";
    $sql = "SELECT * from shop ORDER BY releasedate DESC";
   }

   elseif($sort == "discount"){
    // $sql = "SELECT * from shop ORDER BY STR_TO_DATE(releasedate, '%M %d, %Y') DESC";
    $sql = "SELECT * from shop ORDER BY discount DESC";
   }


      //productName
      if($gender_input == "all" && $category_input == "all" && $brand == "all" && $productName != ""){
        $sql = "SELECT * from shop WHERE productName = '".$productName."'";
        
    }else{
      // echo "<script>alert('No Seach Result!!');</script>";
    }




      
      
      $result = mysqli_query($conn, $sql);
      
      if(mysqli_num_rows($result)<=0)
        {
        //   die("<script>alert('No topic yet!');</script>");
        }
        

        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
          
        
  
        $counter = 1;
        while($rows = mysqli_fetch_assoc($result)){
          $productID = $rows["productID"];
          // $img_name1 = "../img/shop/";
          // $img_name2 = $rows["productImg"];
          // $img_name3 = ".png";
          // $img_path = $img_name1 . $img_name2 . $img_name3;
          $product_image = $rows["productImg"];
          

          if($GLOBALS['counter']==1){
            echo "<div class=\"product_container_wrapper\">
            <div class=\"product_sub_container\">";
          }
        
          if($rows['discount']!=0){
            $discount = $rows['discount'];
          }else{
            $discount = 0;
          }
          

          echo " <div class=\"product_container\">
           
          <a href ='productdesc.php?productID=".$rows['productID']."'>
          <div class=\"product_card_image\">";
              //  <img src = $img_path alt=\"yeezy\" class=\"product_image\"> </img>
              echo '<br/><img class="product_image" src="data:image/png;base64,'.base64_encode( $product_image ).'" />';
              echo " </div>
               <div class=\"product_card_details\">
               <div class=\"product_category\">".$rows['productCategory']."</div><br>
               <div class=\"product_name\">".$rows['productName']."</div>";
               
               
               $total_amount = (double)$rows['productPrice']*(double)$discount;
               $discounted_price = (double)$rows['productPrice']-$total_amount;

               if($rows['discount']!=0){
                echo "<div class=\"product_price\"><del>RM".$rows['productPrice']."</del><ins style=\"color: red;\">RM".$discounted_price."</ins></div>";
              }else{
                echo "<div class=\"product_price\">RM".$rows['productPrice']."</div>";
              }
               
              
             
              echo"</div> </a></div>";
      
        
                

                 if($GLOBALS['counter']==4){
                    echo "</div></div><br>";
                    $GLOBALS['counter']= 0;
                  }

                 
                  $GLOBALS['counter']++;

       

          }

          
        }

       

          

     ?>



</div>



<?php
    include 'footer.php';
    ?>



<script src="../javascript/sidebar.js"></script>





</body>

</html>