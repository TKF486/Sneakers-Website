<?php
    include "../func/connect.php";
    include 'header.php'; 
    include 'sidebar.php';
    ?>

    <html>

<head>
  <title>Blog Database</title>
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
          <p11>Blog Database</p11>

          <table class="table" style="text-align: center; vertical-align: center;">
            <thead>
            <tr>
            <th scope="col">BlogID</th>
            <th scope="col">date</th>
            <th scope="col">author</th>
            <th scope="col">title</th>
            <th scope="col">introduction</th>
            <th scope="col">imageID</th>
            <th scope="col">postcategory</th>
            <th scope="col">maincontent</th>
            <th scope="col">mediaCode</th>
            <th scope="col">subcontent</th>
            <th scope="col">subcontent1</th>
            <th scope="col">subcontent2</th>
            <th scope="col">subcontent3</th>
            <th scope="col">conclusion</th>

          </tr>
        </thead>

          <?php
            
            
            $sql = "SELECT * from blog";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)<=0)
              {
                die("<script>alert('No data from database!');</script>");
              }

              while ($rows = mysqli_fetch_array($result))
              {
                echo "<tr>";
                echo "<td>".$rows ['blogID']."</td>";
                echo "<td>".$rows ['date']."</td>";
                echo "<td>".$rows ['author']."</td>";
                echo "<td>".$rows ['introduction']."</td>";
                echo "<td>".$rows ['title']."</td>";
                // echo "<td>".$rows ['imageID']."</td>";
                echo "<td>".'<br/><img src="data:image/png;base64,'.base64_encode( $rows['imageID'] ).'" />'."</td>";
                echo "<td>".$rows ['postcategory']."</td>";
                echo "<td>".$rows ['maincontent']."</td>";
                echo "<td>".$rows ['mediaCode']."</td>";
                echo "<td>".$rows ['subcontent']."</td>";
                echo "<td>".$rows ['subcontent1']."</td>";
                echo "<td>".$rows ['subcontent2']."</td>";
                echo "<td>".$rows ['subcontent3']."</td>";
                echo "<td>".$rows ['conclusion']."</td>";
                
                
              
                

 
                //edit buttons
                echo "<td><a href ='dbblogedit.php?blogID=".$rows['blogID']."'><button class=\"subtn\">Edit</button></a></td>";
                echo "<td><a href ='../func/blogdelete.php?blogID=".$rows['blogID']."'><button class=\"subtn\">Delete</button></a></td>";
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