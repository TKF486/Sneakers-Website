<?php
      include "connect.php";
      $aboutus_text = addslashes($_POST['aboutus_text']);
     

      $sql = "UPDATE aboutus SET aboutus_text = '$aboutus_text'";
      mysqli_query($conn, $sql);

      echo $sql;

      // echo $sql;
      if(mysqli_affected_rows($conn)<=0)
      {
        echo "<script>alert('No data is edited!');";
        echo "</script>";
      }else{
        echo "<script>alert('About Us updated successful!');</script>";
        echo "<script>window.location.href='../interface/editAboutUs.php';</script>";
      }
      
?>
