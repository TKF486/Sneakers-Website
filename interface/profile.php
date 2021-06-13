<?php


include "../func/connect.php";
include 'sidebar.php';
include 'header.php';

if(isset($_SESSION['email'])) {
  $UID = $_SESSION['userID'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
  $dob =   $_SESSION['dob'];
  $gender = $_SESSION['gender'];
  $phone = $_SESSION['phone'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];

}
else {
  $UID = "";
  $fname = "";
  $lname = "";
  $dob = "";
  $gender = "";
  $phone = "";
  $email = "";
  $password = "";

}
 ?>




<html>

<head>
<link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/signup.css">
    <link rel="stylesheet" href="../style/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>
<?php
   
    
    ?>
   
   
   <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>
  


   
   <div class="register_form">
   <h1>PROFILE</h1>
   <br>
        
        <form method="POST" action="../func/toDelete_Edit.php" id="signup-form">
            
        <div class="name">
                            
        <label for="">ID</label>
        <br>
        <input type="text" placeholder="ID" name="id" id="id" class="input-field" readonly value="<?php echo $UID;?>">

        <br><br>
                           


        <div class="name">
                            <h5 class="singup_header">YOUR NAME</h5>
                            <input type="text" placeholder="First Name" name="fname" id="fname" class="input-field"
                                onkeyup="validate()" required value="<?php echo $fname;?>"> 
                            <span></span>
                            <br>
                       


                            <br><br><br>
                            <input type="text" placeholder="Last Name" name="lname" class="input-field"
                                onkeyup="validate()" required value="<?php echo $lname;?>">
                            <span></span>
                            <br>
                      
                        </div>

                        <div class="dob_wrapper">
                            <H5 class="singup_header">DATE OF BIRTH</H5>
                            <input name ="dob" class="dob" type="date" required="required" value="<?php echo $dob;?>">

                        </div>

 

                        <div class="gender_wrapper">
                            <H5 class="singup_header">GENDER</H5>

                            <div class="radio_gender_wrapper">
                                <span class="radio_choose">
                                    <input type="radio" id="male" name="gender" value="m" <?php if($gender=='m'){ echo "checked=checked";}else{echo "disabled = disabled";}  ?>>
                                    <label for="man" class="radio_label">Man</label>
                                </span>

                                <span class="radio_choose">
                                    <input type="radio" id="female" name="gender" value="f"  <?php if($gender=='f'){ echo "checked=checked";}else{echo "disabled = disabled";}?>>
                                    <label for="woman" class="radio_label">Woman</label>
                                </span>

                                <span class="radio_choose">
                                    <input type="radio" id="other" name="gender" value="o"  <?php if($gender=='o'){ echo "checked=checked";}else{echo "disabled = disabled";}?>>
                                    <label for="other" class="radio_label">Other</label>
                                </span>

                            </div>

                            <br>
                      



                        </div>

                        <div class="phone">
                            <h5 class="singup_header">Phone No</h5>
                            <input type="text" placeholder="Phone No" name="phone" id="phone" class="input-field"
                                onkeyup="validate()" required value="<?php echo $phone;?>">
                            <span></span>
                            <br>
                       
                        </div>



                        <div class="login_details_wrapper">
                            <H5 class="singup_header">LOGIN DETAILS</H5>
                            <input type="email" placeholder="Email" name="email" class="input-field"
                                onkeyup="validate()" required value="<?php echo $email;?>">
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
                            <input type="password" placeholder="Password" name="password" id="input_password"
                                class="input-field" onkeyup="validate()">
                            <span></span>
                            <br>
                    

                        </div>


                        <br>
                        <div class="agree_signup">
                            <input type="checkbox" id="agree" name="agree" value="Agree">
                            <span class="agree_text">I have read and accepted Terms & Conditions <br>and the
                                adidas Privacy Policy (as
                                may be updated from time <br>to time)</span>
                        </div>


                        <br>
                        <!-- <button class="button_register btn">
                            <span>REGISTER</span>
                        </button> -->

                       

                      

      
<div><button  name="editbtn" class="btn_style">EDIT DETAILS</button></div>
<div><button  name="deletebtn" class="btn_style">TERMINATE ACCOUNT</button></div>

        
     


        </form>
        <form action="../func/toLogout.php" method="POST">
    <button  class="btn_style" name="logoutbutton">LOGOUT</button>

   </form>
    
    </div>

    </div>

    <?php
    include 'footer.php';
    ?>



<script src="../javascript/genderColor.js"></script>
<script src="../javascript/formValidate.js"></script>
<script src="../javascript/showPassword.js"></script>
<script src="../javascript/sidebar.js"></script>


</body>

</html>