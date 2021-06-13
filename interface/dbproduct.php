<?php
    include 'header.php'; 
    include "../func/connect.php";
    include 'sidebar.php';
    ?>

    <html>

<head>
  <title>Product Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Database.css">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
  
</head>

<body>

<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

<div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
          <br><br><br><br><br><br><br>         
          <p11>Product Database<p11>


          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">productID </th>
            <th scope="col">productCategory</th>
            <th scope="col">productName</th>
            <th scope="col">productPrice</th>
            <th scope="col">productImg</th>
            <!-- <th scope="col">productImg2</th>
            <th scope="col">productImg3</th> -->
            <!-- <th scope="col">productImg4</th>
            <th scope="col">productImg5</th> -->
            <th scope="col">sku</th>
            <th scope="col">gender</th>
            <th scope="col">releasedate</th>
            <th scope="col">discount</th>
            <th scope="col">brand</th>
            <th scope="col">productDesc</th>
       

          </tr>
        </thead>

          <?php
            
            
            $sql = "SELECT * from shop";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['productID']."</td>";
                echo "<td>".$rows ['productCategory']."</td>";
                echo "<td>".$rows ['productName']."</td>";
                echo "<td>".$rows ['productPrice']."</td>";

                // echo "<td>".$rows ['productImg']."</td>";
                // echo "<td>".$rows ['productImg2']."</td>";
                // echo "<td>".$rows ['productImg3']."</td>";
                // echo "<td>".$rows ['productImg4']."</td>";
                // echo "<td>".$rows ['productImg5']."</td>";
                
                echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg'] ).'" />'."</td>";
                // echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg2'] ).'" />'."</td>";
                // echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg3'] ).'" />'."</td>";
                // echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg4'] ).'" />'."</td>";
                // echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['productImg5'] ).'" />'."</td>";

                echo "<td>".$rows ['sku']."</td>";
                echo "<td>".$rows ['gender']."</td>";
                echo "<td>".$rows ['releasedate']."</td>";
                echo "<td>".$rows ['discount']."</td>";
                echo "<td>".$rows ['brand']."</td>";
                echo "<td>".$rows ['productDesc']."</td>";
            
                
              
                

 
                //edit buttons
                echo "<td><a href ='dbproductedit.php?productID=".$rows['productID']."'><button class=\"subtn\">Edit</button></a></td>";
                echo "<td><a href ='../func/productdelete.php?productID=".$rows['productID']."'><button class=\"subtn\">Delete</button></a></td>";
                echo "</tr>";
              }
          ?>
          </table>

  

    </div>
  </div>
            </div>


<script src="../javascript/sidebar.js"></script>
</body>
</html>