<?php
include "connect.php";
if(isset($_POST['search'])){
    // echo "you press search yay!";
    $search_query = $_POST['search'];
    // $search_query = "JORDAN";
    $search_query = preg_replace("#[^\w+0-9a-zA-Z. \w+]#i","",$search_query);

    $sql = "SELECT * FROM blog WHERE title = '".$search_query."' ";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count <=0) {
    //   echo "<script>alert('No Seach Result!!');</script>";
      $sql = "SELECT * FROM blog WHERE postcategory = '".$search_query."' ";
      $result = mysqli_query($conn, $sql);
      $count = mysqli_num_rows($result);
         if($count <=0) {
            echo "<script>alert('No Seach Result!!');</script>";
            header("location:../interface/blog.php?postcategory=");
         }
         else{
            echo "$count $search_query were found";
            header("location:../interface/blog.php?postcategory=$search_query");
            
         }
    
    
    
    }else{
        echo "$count $search_query were found";
        header("location:../interface/blog.php?title=$search_query");
        
      }

}

?>