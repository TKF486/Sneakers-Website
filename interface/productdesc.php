<?php
include "../func/connect.php";
include 'header.php';
include 'sidebar.php';


$productID = intval($_GET['productID']);


//shop
$sql = "SELECT * from shop where productID = $productID";
$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {

    $productCategory = $rows['productCategory'];
    $productName = $rows['productName'];
    $productPrice = $rows['productPrice'];
    $discount = $rows['discount'];

    $releasedate = $rows['releasedate'];
    $gender = $rows['gender'];
    $sku = $rows['sku'];
    $brand = $rows['brand'];
    
    $productImg = $rows['productImg'];
    // $productImg2 = $rows['productImg2'];
    // $productImg3 = $rows['productImg3'];
    // $productImg4 = $rows['productImg4'];
    // $productImg5 = $rows['productImg5'];

    // $path = "../img/shop/";
    // $type = ".png";

    // $productImg = $path . $productImg_name . $type;
    // $productImg2 = $path . $productImg2_name . $type;
    // $productImg3 = $path . $productImg3_name . $type;
    // $productImg4 = $path . $productImg4_name . $type;
    // $productImg5 = $path . $productImg5_name . $type;

    $productDesc = $rows['productDesc'];
   

  }
  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href = 'dbblog.php';</script>");
  }
 

 
 
 
  if(isset($_POST['add'])){
    $temp_productID = $_POST['productID'];
    echo "<script>window.location='productdesc.php?productID= $temp_productID'</script>";
    
  
    if(isset($_SESSION['cart'])){
      $item_array_id = array_column($_SESSION['cart'], "productID");
      // print_r($item_array_id);
    //   echo "<script>alert('Product add to cart!')</script>";
  
      if(in_array($_POST['productID'], $item_array_id)){
        echo "<script>alert('Product already add to cart')</script>";
        // $temp_productID = $_POST['productID'];
        // echo "<script>window.location='productdesc.php?productID= $temp_productID'</script>";
      
      }else{
          $count = count($_SESSION['cart']);
          $item_array = array('productID' => $_POST['productID'], 'size' => $_POST['size'], 'quantity' => $_POST['quantity']);
          $_SESSION['cart'][$count] = $item_array;
        //   print_r($_SESSION['cart']);
  
      }
  
    }else{
      $item_array = array('productID' => $_POST['productID'], 'size' => $_POST['size'], 'quantity' => $_POST['quantity']);
      $_SESSION['cart'][0] = $item_array;
    //   print_r($_SESSION['cart']);
  
    }
  }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>











<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/AboutUs.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/productdesc.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>

   

   

    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

        <div class="product_desc_wrapper">

            <div class="product_left_wrapper">

                <div class="main_image_wrapper" id="gallery">
                    <?php
        // echo "<img src = $productImg alt=\"main_img\" class=\"img_main\" id=\"featured\">";
        echo '<br/><img class="img_main" id="featured" src="data:image/png;base64,'.base64_encode( $productImg ).'" />';
                    ?>

                </div>

                <div class="slide_wrapper">


                    <i class="fas fa-arrow-left" id="buttonLeft"></i>


                    <div id="slider">
                        <?php
        

           
        // echo "<img src = $productImg alt=\"product_img\" class=\"thumbnail active\"></img>";
        echo '<br/><img class="thumbnail active" src="data:image/png;base64,'.base64_encode( $productImg ).'" />';

        // echo "<img src = $productImg2 alt=\"product_img\" class=\"thumbnail\"></img>";
        // echo '<br/><img class="thumbnail" src="data:image/png;base64,'.base64_encode( $productImg2 ).'" />';


        // echo "<img src = $productImg3 alt=\"product_img\" class=\"thumbnail\"></img>";
        // echo '<br/><img class="thumbnail" src="data:image/png;base64,'.base64_encode( $productImg3 ).'" />';


        // echo "<img src = $productImg4 alt=\"product_img\" class=\"thumbnail\"></img>";
        // echo '<br/><img class="thumbnail" src="data:image/png;base64,'.base64_encode( $productImg4 ).'" />';


        // echo "<img src = $productImg5 alt=\"product_img\" class=\"thumbnail\"></img>";
        // echo '<br/><img class="thumbnail" src="data:image/png;base64,'.base64_encode( $productImg5 ).'" />';

 

        
       
        
        
                    ?>

                    </div>


                    <i class="fas fa-arrow-right" id="buttonRight"></i>
                </div>



                <div class="product_detail_navigator">
                    <ul>
                        <li><a href="#gallery">GALLERY</a></li>
                        <li><a href="#highlight">DESCRIPTION</a></li>
                        <li><a href="#description">RETURN POLICY AND DELIVERY INFORMATION</a></li>
                        <li><a href="#details">DETAILS</a></li>
                        <li><a href="#reviews">REVIEWS</a></li>

                    </ul>
                </div>

                <div class="product_all_details_wrapper">

                    <div class="product_all_details">



                        <div class="desc_wrapper detail_div" id="description">

                            <div class="desc_text_wrapper">
                                <h5 class="product_detail_header">DESCRIPTION</h5>
                                <br>
                                <p class="desc_text"><?php echo $productDesc; ?></p>
                            </div>


                            <div class="desc_image_wrapper">
                                <div class="desc_pic">
                                    <div class="img_grid desc_img_grid">
                                        <?php
            // echo "<img src = $productImg alt=\"main_img\" class=\"img_highlight img_desc\">";
            echo '<br/><img class="img_highlight img_desc" src="data:image/png;base64,'.base64_encode( $productImg ).'" />';
                ?>




                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="product_highlights" id="policies">
                            <h5 class="product_detail_header">RETURN POLICY AND DELIVERY INFORMATION</h5>

                            <div class="hightlight_grid detail_div">

                                <div class="img_grid">

                                    <div class="high_desv">
                                        <br>
                                        <h5 class="highlight_title">RETURNS</h5>

                                        <span class="highlight_text">Our policy lasts 14 days. If 14 days have gone by
                                            since your purchase, unfortunately we can’t offer you a refund or exchange.

                                            To be eligible for a return, your item must be unused and in the same
                                            condition that you received it. It must also be in the original packaging.

                                            Customized products and gift cards are exempt from being returned.</span>
                                    </div>
                                </div>

                                <div class="img_grid">

                                    <div class="high_desv">
                                        <br>
                                        <h5 class="highlight_title">DELIVERY</h5>

                                        <span class="highlight_text">For over 50 years, the adidas Superstar sneaker has
                                            been the go-to of
                                            sport
                                            and
                                            street legends, connecting creators across cultures.</span>
                                    </div>
                                </div>

                                <div class="img_grid">

                                    <div class="high_desv">
                                        <br>
                                        <h5 class="highlight_title">REFUNDS</h5>

                                        <span class="highlight_text">Once your return is received and inspected, we will
                                            send you an email to notify you that we have received your returned item. We
                                            will also notify you of the approval or rejection of your refund.

                                            If you are approved, then your refund will be processed, and a credit will
                                            automatically be applied to your credit card or original method of payment,
                                            within 30 days.</span>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="details_wrapper detail_div" id="details">
                            <h5 class="product_detail_header">DETAILS</h5>
                            <br>
                            <table class="details_table">
                                <tr>
                                    <th>Release Date</th>
                                    <td>
                                        <?php echo $releasedate; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>MANUFACTURED SKU</th>
                                    <td>
                                        <?php echo $sku; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>GENDER</th>
                                    <td>
                                        <?php echo $gender; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>BRAND</th>
                                    <td>
                                        <?php echo $brand; ?>
                                    </td>
                                </tr>



                            </table>
                        </div>



                        <div class="ratings_wrapper detail_div" id="reviews">
                            <h5 class="product_detail_header">RATINGS & REVIEWS</h5>
                            <div class="rating_all_container">


                             



                                <div class="customer_review_wrapper">

                                    <div class="filter_review">
                                       
                                    </div>


                    
                                    <form action="../func/reviewInsert.php" method="POST">

<table class="contact_table">
    <tr>
        
        <input type="hidden" name="productID" value="<?php echo $_GET['productID']?>">
        <input type="hidden" name="userID" value="<?php if(isset($_SESSION['userID'])){echo $_SESSION['userID'];}?>">
        <td class="ratingTitle"><label for="ratingTitle">Rating Title</label><br>
            <input type="text" class="ratingTitle" name="ratingTitle" required placeholder="Give us your opinion"><br>
        </td>
        
    </tr>

    <tr>
        <td class="email_input" colspan="2">
            <label for="email">Rating</label><br>
            <select name="rating" id="" required>
                    <option value="2.0">2.0</option>
                    <option value="2.5">2.5</option>
                    <option value="3.0">3.0</option>
                    <option value="3.5">3.5</option>
                    <option value="4.0">4.0</option>
                    <option value="4.5">4.5</option>
                    <option value="5.0">5.0</option>
                </select>
        </td>
    </tr>

    <tr>
        <td class="message" colspan="2">
            <label for="message">Rating Text</label><br>
            <textarea name="rate_text" id="rate_text" cols="84" rows="10" required></textarea>
        </td>
    </tr>

    <tr>

        <td class="submit_button" colspan="2">
            <br>
            <input type="submit" class="cart_button btn">
        </td>
    </tr>




</table>
</form>
<br>






                                   

                        <div class="customer_review_container">
                            <hr><br>
                                        
                                    <?php 
                                    //rating
$sql = "SELECT * from rating where productID = $productID";
$result = mysqli_query($conn, $sql);
while($rows = mysqli_fetch_assoc($result)){
    $rating = $rows['rating'];
    $rate_text = $rows['rate_text'];
    $userID  = $rows['userID'];
    $ratingTitle  = $rows['ratingTitle'];

$sql2 = "SELECT * from customerdetails where userID = $userID";
$result2 = mysqli_query($conn, $sql2);
if($rows = mysqli_fetch_array($result2))
  {

    $lname = $rows['lname'];
    $fname = $rows['fname']; 

  }
          

          
  					echo "<div class=\"star_no_date_div\">
                                        <span>$rating</span><span class=\"fa fa-star checked\"></span>
                                        </div><br>
                                        <h2 class=\"rating_title\">$ratingTitle</h2>
                                        <p class=\"ratings_text\">$rate_text</p>
                                        <br>
                                        <ul>
                                            <li>
                                                <span class=\"recommend_text\">I recommend this product</span>
                                            </li>
                                        </ul>
                                        <br>
                                        <span class=\"customer_name\">$lname $fname</span>
                                        <span class=\"verify_purchaser\">- Verified Purchaser</span>
                                        <br><br><hr><br>
                                        ";
              

       

          }

          
       
                                        ?>
                                      
                        
                                        
                                      
                                        

                                    </div>





                                </div>


                            </div>






                        </div>






                    </div>





                </div>
            </div>




            <div class="product_right_wrapper">

                <div class="product_size_wrapper">
                    <span class="prodcut_brand_category">
                        <?php echo $productCategory; ?>
                    </span>
                    <br><br>
                    <div class="product_name">
                        <?php echo $productName; ?>
                      
                    </div>

                    <br><br>

                
                     <span class="productPrice">
                        <?php echo "RM". $productPrice;?>
                    </span>

                   
                    <br><br>

                    <span class="select_size_heading">Select size</span>
                    <br><br>
            
            
                    <form action="productdesc.php?productID=<?php echo $productID;?>" method="POST">

                   <input type="hidden" name="productID" value="<?php echo $productID; ?>">

                    <select name="size" id="size" required>
                        <option value="3">3UK</option>
                        <option value="3.5">3.5UK</option>
                        <option value="4">4UK</option>
                        <option value="4.5">4.5UK</option>
                        <option value="5">5UK</option>
                        <option value="5.5">5.5UK</option>
                        <option value="6">6UK</option>
                        <option value="6.5">6.5UK</option>
                        <option value="7">7UK</option>
                        <option value="7.5">7.5UK</option>
                        <option value="8">8UK</option>
                        <option value="8.5">8.5UK</option>
                        <option value="9">9UK</option>
                        <option value="9.5">9.5UK</option>
                        <option value="10">10UK</option>
                        <option value="10.5">10.5UK</option>
                        <option value="11">11UK</option>
                        <option value="11.5">11.5UK</option>
                        <option value="12">12UK</option>
                        <option value="12.5">12.5UK</option>
                        <option value="13">13UK</option>
                        <option value="13.5">13.5UK</option>
                    </select>

                    <br><br>
                    <label for="">Quantity</label>
                    <br>
                    <input type="number" name="quantity" value="1" required>

                    <br><br>

                    <span>Size Guide</span>

                    <br><br>

                    <button class="cart_button btn" name="add">
                        <span>ADD TO BAG</span>
                    </button>

                    <!-- <button class="buy_button btn">
                        <span>BUY NOW</span>
                    </button> -->
                    </form>


                </div>


            </div>

        </div>







    <?php
    include 'footer.php';
    ?>


<script src="../javascript/sidebar.js"></script>


    <!-- product_slider script JS -->

    <script type="text/javascript">
        let thumbnails = document.getElementsByClassName('thumbnail')
        let activeImgs = document.getElementsByClassName('active')
        // let testing = document.getElementById('featured').src
        //         console.log(testing)
        
        for (var i = 0; i < thumbnails.length; i++) {
            thumbnails[i].addEventListener('mouseover', function () {

                if (activeImgs.length > 0) {
                    activeImgs[0].classList.remove('active')
                }



                this.classList.add('active')
                document.getElementById('featured').src = this.src
               
            })
        }



    </script>


    <script>


        let buttonRight = document.getElementById('buttonRight');
        let buttonLeft = document.getElementById('buttonLeft');


        buttonLeft.onclick = function () {
            document.getElementById('slider').scrollLeft -= 300;
        };

        buttonRight.onclick = function () {
            document.getElementById('slider').scrollLeft += 300;
        };


    </script>






</body>

</html>