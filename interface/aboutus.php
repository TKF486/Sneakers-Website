<?php

include "../func/connect.php";
include 'header.php';
include 'sidebar.php';



 ?>

<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/AboutUs.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/background.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>

    
    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

        <div class="about_us_wrapper">

            <div class="background">
                <h1 class="about_us_header">About Us</h1>

                
                    <?php
                    $sql = "SELECT * from aboutus";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result)<=0)
                        {
                
                        }
                

                        $resultcheck = mysqli_num_rows($result);
                        if($resultcheck > 0){
                
                
        
                        $counter = 1;
                        while($rows = mysqli_fetch_assoc($result)){
                        $aboutus_text= stripslashes($rows["aboutus_text"]);

                        echo "<div class=\"about_us_content\">$aboutus_text</div>";
                        }

                    }
                
                    ?>
            </div>

        </div>


    


 
    <?php
    include 'footer.php';
    ?>

<script src="../javascript/sidebar.js"></script>
<script src="../javascript/genderColor.js"></script>

        </div>
</body>

</html>