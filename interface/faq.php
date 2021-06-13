<?php

include "../func/connect.php";


 ?>




<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/FAQ.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>

<?php
    include 'header.php';
    include 'sidebar.php';
    ?>




    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
        <div class="FAQ_wrapper">
            <div class="FAQ_header">
                <h1>FAQ</h1>
                <p class="FAQ_caption">No matter how much information you put out there, some questions <br> will always
                    remain. We are
                    looking
                    forward to helping you out. <br> However, before reaching out to us please check the below list of
                    most
                    frequently asked questions. <br> This will give us more time to answer specifics and it saves you
                    time
                    waiting for our reply.</p>
            </div>

            <div class="faq_navigator">
                <ul>
                    <li><a href="#general">GENERAL MATTER</a></li>
                    <li><a href="#shipping">SHIPPING</a></li>
                    <li><a href="#refunds">REFUNDS</a></li>

                </ul>
            </div>


            <div class="FAQ_start FAQ_content">

           <div id="general">
            <?php
           
      $sql = "SELECT * from faq WHERE topic = 'general'";
    //   echo $sql;
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)<=0)
        {
          // echo "<script> alert('No topic yet!');</script>";
        }
        

        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
        
        
        $counter = 1;
        while($rows = mysqli_fetch_assoc($result)){
        $topic= $rows["topic"];
        $subtitle1 = $rows["subtitle1"];
        $subcontent1 = $rows["subcontent1"];
        // $subtitle2 = $rows["subtitle2"];
        // $subcontent2 = $rows["subcontent2"];
        // $subtitle3 = $rows["subtitle3"];
        // $subcontent3 = $rows["subcontent3"];
        // $subtitle4 = $rows["subtitle4"];
        // $subcontent4 = $rows["subcontent4"];
        // $subtitle5 = $rows["subtitle5"];
        // $subcontent5 = $rows["subcontent5"];
        
          if($counter == 1){
            echo "<div class=\"FAQ_heading\">
            <h1> $topic</h1>
            </div>";
            $counter++;
          }      
          

            echo " <div class=\"FAQ_block\">	
	<button class=\"accordion acc_first\">$subtitle1</button>
 			<div class=\"panel\">
               <p class=\"panel_text\">$subcontent1</p>
                    	</div>";
	

          }
   
        }
   
       ?>
       </div>


       <div id="shipping">
<?php
      $sql = "SELECT * from faq WHERE topic = 'shipping'";
    //   echo $sql;
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)<=0)
        {
          
        }
        

        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
        
        
        $counter = 1;
        while($rows = mysqli_fetch_assoc($result)){
        $topic= $rows["topic"];
        $subtitle1 = $rows["subtitle1"];
        $subcontent1 = $rows["subcontent1"];
        // $subtitle2 = $rows["subtitle2"];
        // $subcontent2 = $rows["subcontent2"];
        // $subtitle3 = $rows["subtitle3"];
        // $subcontent3 = $rows["subcontent3"];
        // $subtitle4 = $rows["subtitle4"];
        // $subcontent4 = $rows["subcontent4"];
        // $subtitle5 = $rows["subtitle5"];
        // $subcontent5 = $rows["subcontent5"];
        
          if($counter == 1){
            echo "<div class=\"FAQ_heading\">
            <h1> $topic</h1>
            </div>";
            $counter++;
          }      
          

            echo " <div class=\"FAQ_block\">	
	<button class=\"accordion acc_first\">$subtitle1</button>
 			<div class=\"panel\">
               <p class=\"panel_text\">$subcontent1</p>
                    	</div>";
	

          }
   
        }
        
       ?>
     </div>


     <div id="refunds">
<?php
      $sql = "SELECT * from faq WHERE topic = 'refunds'";
    //   echo $sql;
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)<=0)
        {
          
        }
        

        $resultcheck = mysqli_num_rows($result);
        if($resultcheck > 0){
        
        
        $counter = 1;
        while($rows = mysqli_fetch_assoc($result)){
        $topic= $rows["topic"];
        $subtitle1 = $rows["subtitle1"];
        $subcontent1 = $rows["subcontent1"];
        // $subtitle2 = $rows["subtitle2"];
        // $subcontent2 = $rows["subcontent2"];
        // $subtitle3 = $rows["subtitle3"];
        // $subcontent3 = $rows["subcontent3"];
        // $subtitle4 = $rows["subtitle4"];
        // $subcontent4 = $rows["subcontent4"];
        // $subtitle5 = $rows["subtitle5"];
        // $subcontent5 = $rows["subcontent5"];
        
          if($counter == 1){
            echo "<div class=\"FAQ_heading\">
            <h1> $topic</h1>
            </div>";
            $counter++;
          }      
          

            echo " <div class=\"FAQ_block\">	
	<button class=\"accordion acc_first\">$subtitle1</button>
 			<div class=\"panel\">
               <p class=\"panel_text\">$subcontent1</p>
                    	</div>";
	

          }
   
        }
        
       ?>
</div>
	
  

</div>


    <?php
    include 'footer.php';
    ?>


     




    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        // var icon = document.getElementsByClassName("fas fa-arrow-down");

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";

                }
            });
        }


    </script>














<script src="../javascript/sidebar.js"></script>



















































</body>

</html>