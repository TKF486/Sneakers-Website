<?php
include "../func/connect.php";

include 'header.php';
include 'sidebar.php';

$userID = intval($_GET['userID']);
$sql = "SELECT * from customerdetails where userID = $userID";
$result = mysqli_query($conn, $sql);
if($rows = mysqli_fetch_array($result))
  {
    $userid = $rows['userID'];
    $fname = $rows['fname'];
    $lname = $rows['lname'];
    $dob = $rows['dob'];
 
    $gender = $rows['gender'];
    $phone_no = $rows['phone'];
    $email = $rows['email'];
    $password = $rows['password'];

  }
  else
  {
      echo "<script>alert('Error 404');</script>";
    //   die("<script>window.location.href='dbuser.php';</script>");
  }
 ?>

<head>
  <title>Edit User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/Edit.css">

    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>

</head>

<body>
<div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button> 
  <div class="contain-fluid">
    <div class="wrapper">
      <div class="row r1">
    
        <div class="back_btn"><a href="dbuser.php"><button class="subtn1">back</button></a></div>
      </div>

      <div class="row">
      <br><br><br><br><br><br><br>
          <p11>Edit User<p11>

            <form method="POST" action="../func/dbuserupdate.php">
            <div class="name">
            <br>
                            <label for="">ID</label>
                            <br>
                            <input type="text" placeholder="ID" name="userID" id="userID" class="input-field" readonly value="<?php echo $userid;?>">
                    
                            <br><br>
                                               
                    
                    
                            <label for="">First Name</label>
                            <br>
                                                <input type="text" placeholder="First Name" name="fname" id="fname" class="input-field"
                                                    onkeyup="validate()" value="<?php echo $fname;?>">
                                                <span></span>
                                                <br>
                                               
                                                <br>
                    
                                                <label for="">Last Name</label>
                                                <br>
                                                
                                                <input type="text" placeholder="Last Name" name="lname" class="input-field"
                                                    onkeyup="validate()" value="<?php echo $lname;?>">
                                                <span></span>
                                                <br>
                                                
                    
                                            </div>
                    
                                            <div class="dob_wrapper">
                            <H5 class="singup_header">DATE OF BIRTH</H5>
                            <label for="Date of Birth"></label>
                            <input name ="dob" class="dob" type="date" required="required" value="<?php echo $dob;?>">

                        </div>
                                            <div class="gender_wrapper">
                                                <H5 class="singup_header">GENDER</H5>
                    
                                                <div class="radio_gender_wrapper">
                                                    <span class="radio_choose">
                                                        <input type="radio" id="male" name="gender" value="m" <?php if($gender=='m'){ echo "checked=checked";}  ?>>
                                                        <label for="male" class="radio_label">Male</label>
                                                    </span>
                    
                                                    <span class="radio_choose">
                                                        <input type="radio" id="female" name="gender" value="f" <?php if($gender=='f'){ echo "checked=checked";}?>>
                                                        <label for="female" class="radio_label">Female</label>
                                                    </span>
                    
                                                    <span class="radio_choose">
                                                        <input type="radio" id="other" name="gender" value="o" <?php if($gender=='o'){ echo "checked=checked";}?>>
                                                        <label for="other" class="radio_label">Other</label>
                                                    </span>
                    
                                                </div>
                    
                                                <br>
                                              
                    
                    
                    
                                            </div>
                    
                                            <div class="phone">
                                                <h5 class="singup_header">Phone No</h5>
                                                <input type="text" placeholder="Phone No" name="phone" id="phone" class="input-field"
                                                    onkeyup="validate()" value="<?php echo $phone_no;?>">
                                                <span></span>
                                                <br>
                                               
                    
                                            </div>
                    
                    
                    
                                            <div class="login_details_wrapper">
                                                <H5 class="singup_header">LOGIN DETAILS</H5>
                                                <input type="email" placeholder="Email" name="email" class="input-field"
                                                    onkeyup="validate()" value="<?php echo $email;?>">
                                                <span></span>
                                                <br>
                                               
                    
                                                <br><br>
                                                <div class="show_password_wrapper">
                    
                                                    <div>
                                                        <i class="far fa-eye"></i>
                                                        <button class="show_password_ticker" type="button"
                                                            onclick="password_show()">SHOW</button>
                                                    </div>
                    
                    
                                                </div>
                                                <br>
                                                <input type="password" placeholder="Password" name="password" id="sign_up_password"
                                                    class="input-field" onkeyup="validate()" value="<?php echo $password;?>">
                                                    <span></span>
                                                <br>
                                               
                    
                                            </div>
<br>
             
      

              <button type="submit" class="subtn" name="update">Update</button>
            </form>

        </div>
     
      </div>

    </div>
  </div>
</div>

  <script src="../javascript/sidebar.js"></script>


</body>
