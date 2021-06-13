<?php
require_once '../func/connect.php';

//repeated email check
if(isset($_GET["email"])){
    $testemail=$_GET["email"];
    $testUniqueEmailSql = "SELECT * FROM customerdetails WHERE email='$testemail'";
    $result = mysqli_query($conn, $testUniqueEmailSql);
    if (mysqli_num_rows($result)) {
        echo('1');
        exit;
    }else{
        echo('0');
        exit;
    }
}

?>













<?php

  include "../func/connect.php";

  //data retrieval
  if(isset($_POST['register'])){
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  
    $sql = "Insert into customerdetails (fname, lname, dob, gender, phone, email, password) VALUES ('$fname','$lname','$dob','$gender','$phone_no','$email', '".md5($password)."');";
    mysqli_query($conn, $sql);
  
    if(mysqli_affected_rows($conn) <=0) {
      echo "<script>alert('User already register ! \\nTry again with different Email.');</script>";
      echo "<script>window.location.href='../interface/form.php';</script>";
    }
    else {
      echo "<script>alert('Register Succesfully!Please login now!');</script>";
      echo "<script>window.location.href='../interface/login.php';</script>";
    }
  }


// echo $sql;

?>


<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/signup.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/99f2cfdce3.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    include 'header.php';
    include 'sidebar.php';
    ?>


    <div id="main">
        <button class="open_button" onclick="openNav()">☰ open</button>

        <div class="signup_main_wrapper">


            <div class="signup_wrapper">

                <div class="signup_sub_wrapper">

                    <h2 class="register_header">REGISTER</h2>

                    <form method="POST" action="form.php" class="signup_form" id="signup-form">


                        <div class="name">
                            <h5 class="singup_header">YOUR NAME</h5>
                            <input type="text" placeholder="First Name" name="fname" id="fname" class="input-field"
                                onkeyup="validate()" required pattern="(?=.*[a-zA-Z]).{1,}" title = "First Name must have alphabet and cannot be empty!">
                            <span></span>
                            <br>
                            



                            <br><br><br>
                            <input type="text" placeholder="Last Name" name="lname" class="input-field"
                                onkeyup="validate()" required pattern="(?=.*[a-zA-Z]).{1,}" title = "Last Name must have alphabet and cannot be empty!">
                            <span></span>
                            <br>
                        

                        </div>

                        <div class="dob_wrapper">
                            <H5 class="singup_header">DATE OF BIRTH</H5>
                            <input name ="dob" class="dob" type="date" required="required">

                        </div>

 

                        <div class="gender_wrapper">
                            <H5 class="singup_header">GENDER</H5>

                            <div class="radio_gender_wrapper">
                                <span class="radio_choose">
                                    <input type="radio" id="male" name="gender" value="m" required>
                                    <label for="male" class="radio_label">Male</label>
                                </span>

                                <span class="radio_choose">
                                    <input type="radio" id="female" name="gender" value="f">
                                    <label for="female" class="radio_label">Female</label>
                                </span>

                                <span class="radio_choose">
                                    <input type="radio" id="other" name="gender" value="o">
                                    <label for="other" class="radio_label">Other</label>
                                </span>

                            </div>

                            <br>
                          



                        </div>

                        <div class="phone">
                            <h5 class="singup_header">Phone No</h5>
                            <input type="text" placeholder="Phone No" name="phone" id="phone" class="input-field"
                                onkeyup="validate()" required pattern="^(\+?6?01)[0-46-9][0-9]{7,8}$" title = "Phone Number format is wrong (+60xxxxxxxxx)!">
                            <span></span>
                            <br>
                           

                        </div>



                        <div class="login_details_wrapper">
                            <H5 class="singup_header">LOGIN DETAILS</H5>
                            <input type="email" placeholder="Email" name="email" id="email" class="input-field"
                                onkeyup="validate()" required onblur="emailCheck()">
                            <span></span>
                            <br>
                            <span id="emailError" class="error">
                            Email already existed, please try another one.
                            </span>

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
                                class="input-field" onkeyup="validate()" required pattern="^(?=.*[A-Za-z])(?=.*[A-Za-z])(?=.*\d)[a-zA-Z\d.]{8,}$" title = "Password format must have captial, small letter and number and at least 8 characters long!">
                            <span></span>
                            <br>
                         

                        </div>


                        <br>
                        <div class="agree_signup">
                            <input type="checkbox" id="agree" name="agree" value="Agree" required>
                            <span class="agree_text">I have read and accepted Terms & Conditions <br>and the
                                adidas Privacy Policy (as
                                may be updated from time <br>to time)</span>
                        </div>


                        <br>
                        <!-- <button class="button_register btn">
                            <span>REGISTER</span>
                        </button> -->

                        <input type="submit" id="button_register" value="REGISTER" class="button_register btn" name="register">




                    </form>
                </div>
            </div>

            <div class="signup_benefits">
                <h2 class="register_header">CREATE AN ACCOUNT</h2>
                <br>
                <p>Your Global Login will give you access to:</p>
                <br>
                <ul>
                    <li>
                        <span class="signup_li_text">A single global login to interact with adidas products and
                            services</span>
                    </li>
                    <li>
                        <span class="signup_li_text"> Checkout faster </span>
                    </li>
                    <li>
                        <span class="signup_li_text">View your personal order history</span>
                    </li>
                </ul>
                <br><br>
                <a href="Login.php"><button class="button_register btn">Login</button></a>


            </div>


        </div>


        <?php include 'footer.php';?>
        <script src="../javascript/showPassword.js"></script>
        <script src="../javascript/formValidate.js"></script>
        <script src="../javascript/sidebar.js"></script>


        
</body>

</html>