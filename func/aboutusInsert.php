<?php
include "connect.php";

  //data retrieval
  

      $aboutus_text = addslashes($_POST['aboutus_text']);

  $sql = "Insert into aboutus (aboutus_text) VALUES ('$aboutus_text');";

  mysqli_query($conn, $sql);

  // echo $sql;

  if(mysqli_affected_rows($conn) <=0) {
    echo "<script>alert('Unable to insert blog !');";
    die("</script>");
  }
  else {
    echo "<script>alert('About Us uploaded successful!');</script>";
    echo "<script>window.location.href='../interface/admin.php';</script>";
  }









?>