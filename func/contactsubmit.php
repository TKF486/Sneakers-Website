<?php

  include "connect.php";

  //data retrieval
  
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $phone_no = mysqli_real_escape_string($conn, $_POST['phone']);
  $message = mysqli_real_escape_string($conn, $_POST['message']);

    // $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = mysqli_real_escape_string($conn, $_POST['password']);
  

 
//   if($password !== $confirmpassword) {
//     echo "<script>alert('Password and confirmed password not same!');";
//     die ("window.history.go(-1);</script>");
//   }

  $sql = "Insert into contactus (fname, lname, email, phone_no, message) VALUES ('$fname','$lname','$email','$phone_no','$message');";
  mysqli_query($conn, $sql);

  if(mysqli_affected_rows($conn) <=0) {
    echo "<script>alert('Unable to register ! \\nTry again with different Email.');";
    die("</script>");
  }
  else {
    echo "<script>alert('Thanks for contacting us, we will get back to you in 1 working day!');</script>";
    echo "<script>window.location.href='../interface/contactus.php';</script>";
  }

// echo $sql;

?>
