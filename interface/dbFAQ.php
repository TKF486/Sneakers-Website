<?php
    include 'header.php'; 
    include "../func/connect.php";
    include 'sidebar.php';
    ?>

    <html>

<head>
  <title>FAQ Database</title>
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
          <p11>FAQ Database<p11>


          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">faqID</th>
            <th scope="col">topic</th>
            <th scope="col">subtitle1</th>
            <th scope="col">subcontent1</th>
       

          </tr>
        </thead>

          <?php
            
            
            $sql = "SELECT * from faq";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['faqID']."</td>";
                echo "<td>".$rows ['topic']."</td>";
                echo "<td>".$rows ['subtitle1']."</td>";
                echo "<td>".$rows ['subcontent1']."</td>";           

 
                //edit buttons
                echo "<td><a href ='editFAQ.php?faqID=".$rows['faqID']."'><button class=\"subtn\">Edit</button></a></td>";
                echo "<td><a href ='../func/faqdelete.php?faqID=".$rows['faqID']."'><button class=\"subtn\">Delete</button></a></td>";
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