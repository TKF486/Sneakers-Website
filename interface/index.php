<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/product_grid.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/background.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
   
    
</head>



<body>



    <?php
   
    include "../func/connect.php";
    include 'header.php';
    include 'sidebar.php';
    ?>


    

    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

        <div class="home_banner"></div>

        <div class="popular_category">
            <h1 class="popular_header">POPULAR RIGHT NOW</h1>
            <div class="keyword_holder">
                <a href="productfilter?gender=all&category=jordan&brand=all&sort=all&releasedate=">Air Jordan</a>
                <a href="productfilter?gender=all&category=yeezy&brand=all&sort=all&releasedate=">YEEZY</a>
                <a href="productfilter?gender=all&category=dunk&brand=all&sort=all&releasedate=">Dunk</a>
            </div>
        </div>


        <div class="choose_gender_category_wrapper">
            <h1 class="category_header">WHO ARE YOU SHOPPING FOR?</h1>

            <div class="gender_sub_wrapper">
                <div class="gender_choose man ">
                    <a href="productfilter.php?gender=man&category=all&brand=all&sort=all&releasedate="> <img src="../img/main/men.jpg" alt="man" class="gender_img">
                        <div class="gender_name">Man</div>
                    </a>
                </div>


                <div class="gender_choose woman">
                    <a href="productfilter.php?gender=woman&category=all&brand=all&sort=all&releasedate="><img src="../img/main/woman2.jpg" alt="woman" class="gender_img">
                        <div class="gender_name">Woman</div>
                    </a>
                </div>


                <div class="gender_choose kids">
                    <a href="productfilter.php?gender=kid&category=all&brand=all&sort=all&releasedate="> <img src="../img/main/child.jpg" alt="kids" class="gender_img">
                        <div class="gender_name">Kids</div>
                    </a>

                </div>
            </div>


        </div>

        <br>



        <h1 class="product_header">NEW ITEMS</h1>



        <?php
      $sql = "SELECT * from shop";
      $result = mysqli_query($conn, $sql);
    //   echo $_SESSION['fname'];
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
          $product_image = $rows["productImg"];
          // $img_name3 = ".png";
          // $img_path = $img_name1 . $img_name2 . $img_name3;
          

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
                 <span class=\"product_name\">".$rows['productName']."</span>";
                 
                 
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













<!-- <script src="../javascript/genderColor.js"></script> -->
<script src="../javascript/sidebar.js"></script>





















































</body>

</html>

