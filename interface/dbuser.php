

<head>
  <title>User Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Database.css">

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
       


     
        <div class="back_btn"><a href="admin.php"><button class="subtn1">back</button></a></div>
          <br><br><br><br><br><br><br>
          <p11>User Database<p11>

          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">userID</th>
            <th scope="col">fname</th>
            <th scope="col">lname</th>
            <th scope="col">dob</th>

            <th scope="col">Gender</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
          </tr>
        </thead>

          <?php
    
            include "../func/connect.php";
            $sql = "SELECT * from customerdetails";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['userID']."</td>";
                echo "<td>".$rows ['fname']."</td>";
                echo "<td>".$rows ['lname']."</td>";
                echo "<td>".$rows ['dob']."</td>";
              
                echo "<td>".$rows ['gender']."</td>";
                echo "<td>".$rows ['phone']."</td>";
                echo "<td>".$rows ['email']."</td>";
                echo "<td>".$rows ['password']."</td>";
 
                //edit buttons
                echo "<td><a href ='dbuseredit.php?userID=".$rows['userID']."'><button class=\"subtn\">Edit</button></a>";
                echo "<a href ='../func/toDeleteuser.php?userID=".$rows['userID']."'><button class=\"subtn\">Delete</button></a></td>";
                echo "</tr>";
              }
          ?>
          </table>




 

<script src="../javascript/sidebar.js"></script>
</body>
