<?php
      include "connect.php";
      $blogID = $_POST['blogID'];
      $title = $_POST['title'];
      $introduction = $_POST['introduction'];
      $maincontent = $_POST['maincontent'];
      $postcategory = $_POST['postcategory'];
      $subcontent = $_POST['subcontent'];
      $subcontent1 = $_POST['subcontent1'];
      $subcontent2 = $_POST['subcontent2'];
      $subcontent3 = $_POST['subcontent3'];
      $conclusion = $_POST['conclusion'];
      $author = $_POST['author'];   
      $mediaCode = $_POST["mediaCode"];
      $date = $_POST['date'];
      // $imageID = $_POST['imageID'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

      $sql = "UPDATE blog SET title = '$title', introduction = '$introduction', maincontent = '$maincontent',postcategory = '$postcategory',
      subcontent = '$subcontent',subcontent1 = '$subcontent1',subcontent2 = '$subcontent2', subcontent3 = '$subcontent3',
      conclusion = '$conclusion', author = '$author', mediaCode = '$mediaCode', date = '$date',imageID = '$file' WHERE blogID = $blogID";
      mysqli_query($conn, $sql);


      // echo $sql;
      if(mysqli_affected_rows($conn)<=0)
      {
        echo "<script>alert('No data is edited!');";
        die("window.history.go(-1);</script>");
      }
      echo "<script>alert('Blog updated successful!');</script>";
      echo "<script>window.location.href='../interface/dbblog.php';</script>";
?>
