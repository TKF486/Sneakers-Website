<?php
session_start();
?>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>


        
            <div class="header" id="header">
                <div class="logo_wrapper" id="logo_wrapper">
                    <a href="index.php"> <img src="../img/main/logo.png" alt="logo" class="logo" id="logo"></a>
                </div>



       



             <div class="all_nav_wrapper">
                <div class="nav_gender_wrapper">


                    <ul>
                        <li><a href="productfilter.php?gender=man&category=all&brand=all&sort=all&releasedate=">Man</a></li>
                        <li><a href="productfilter.php?gender=woman&category=all&brand=all&sort=all&releasedate=">Woman</a></li>
                        <li><a href="productfilter.php?gender=kid&category=all&brand=all&sort=all&releasedate=">Kid</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                    </ul>




                </div>

                <div class="list_wrapper">
                    <ul>
                        <li>


                            <form action="../func/productSearch.php" class="search_form" method="POST">
                                <input type="text" placeholder="Search." name="search" class="search_box">
                                <button type="submit" class="search_button"><i class="fa fa-search"></i></button>
                            </form>
                        </li>
                        <li><a href="<?php if (isset($_SESSION['fname'])) {
                                            echo "profile.php";
                                        } else {
                                            echo "login.php";
                                        } ?>"><i class="fas fa-user"></i></a></li>
                        <li><a href="cart.php"><i class="fas fa-shopping-cart"></i>
                                <?php
                                if (isset($_SESSION['cart'])) {
                                    $count = count($_SESSION['cart']);
                                    echo "<span id=\"cart_count\">$count</span>";
                                } else {
                                    echo "<span id=\"cart_count\">0</span>";
                                }
                                ?>

                            </a></li>





                    </ul>
                </div>

 




      
   
    <?php
    if (isset($_SESSION['gender'])) {
        if ($_SESSION['gender'] == 'm') {
            echo "<input id=\"gender\" value='m' type='hidden'></input>";
        } elseif ($_SESSION['gender'] == 'f') {
            echo "<input id=\"gender\" value='f' type='hidden'></input>";
        }
    } else {
    }


    ?>
    <script src="../javascript/genderColor.js"></script>
    
   


</html>
