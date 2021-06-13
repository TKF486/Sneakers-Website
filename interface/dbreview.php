<?php
    include 'header.php'; 
    include "../func/connect.php";
    include 'sidebar.php';
    ?>

    <html>

<head>
  <title>Review Database</title>
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
          <p11>Review Database<p11>


          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">ratingID  </th>
            <th scope="col">rating</th>
            <th scope="col">rate_text</th>
            <th scope="col">productID </th>
            <th scope="col">userID </th>
            <th scope="col">ratingTitle</th>      

          </tr>
        </thead>

          <?php
            
            
            $sql = "SELECT * from rating";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['ratingID']."</td>";
                echo "<td>".$rows ['rating']."</td>";
                echo "<td>".$rows ['rate_text']."</td>";
                echo "<td>".$rows ['productID']."</td>";
                echo "<td>".$rows ['userID']."</td>";
                echo "<td>".$rows ['ratingTitle']."</td>";

 
                //edit buttons
                // echo "<td><a href ='dbproductedit.php?productID=".$rows['productID']."'><button class=\"subtn\">Edit</button></a>";
                echo "<td><a href ='../func/reviewDelete.php?ratingID=".$rows['ratingID']."'><button class=\"subtn\">Delete</button></a></td>";
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