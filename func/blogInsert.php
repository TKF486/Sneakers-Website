<?php
include "connect.php";

  //data retrieval
  

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
      $date = $_POST['publish_date'];
      // $imageID = $_POST['image'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));



  $sql = "Insert into blog (date, author, introduction, title, imageID, postcategory, maincontent, mediaCode, subcontent, subcontent1, subcontent2, subcontent3, conclusion) VALUES ('$date','$author','$introduction','$title','$file','$postcategory','$maincontent','$mediaCode','$subcontent','$subcontent1','$subcontent2','$subcontent3','$conclusion');";

  mysqli_query($conn, $sql);
  // echo $date;
  // echo $sql;

  if(mysqli_affected_rows($conn) <=0) {
    echo "<script>alert('Unable to insert blog !');</script>";
    // die("</script>");
  }
  else {
    echo "<script>alert('Blog uploaded successful!');</script>";
    echo "<script>window.location.href='../interface/dbblog.php';</script>";
  }









?>