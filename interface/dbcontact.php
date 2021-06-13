<?php
    include "../func/connect.php";
    include 'header.php'; 
    include 'sidebar.php';
    ?>

    <html>

<head>
  <title>Customer Contact</title>
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
          <p11>Customer Contact<p11>

          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">contactid </th>
            <th scope="col">fname</th>
            <th scope="col">lname</th>
            <th scope="col">email</th>
            <th scope="col">phone_no</th>
            <th scope="col">message</th>
   

          </tr>
        </thead>

          <?php
      
    
            $sql = "SELECT * from contactus";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['contactid']."</td>";
                echo "<td>".$rows ['fname']."</td>";
                echo "<td>".$rows ['lname']."</td>";
                echo "<td>".$rows ['email']."</td>";
                echo "<td>".$rows ['phone_no']."</td>";
                echo "<td>".$rows ['message']."</td>";

                echo "<td>";
                echo "<a href ='../func/contactdone.php?contactid=".$rows['contactid']."'><button class=\"subtn\">Delete</button></a></td>";
                echo "</tr>";


              }
           
             
          ?>
          </table>

        </div>
      
      </div>

    </div>
  </div>
            </div>

  



<script src="../javascript/sidebar.js"></script>
</body>
</html>