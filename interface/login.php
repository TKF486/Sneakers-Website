<?php
    include "../func/formValidation.php";
?>

<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="../style/header.css">
    <link rel="stylesheet" href="../style/footer.css">
    <link rel="stylesheet" href="../style/signup.css">
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

                    <h2 class="register_header">LOGIN</h2>




                    <form method="POST" action="../func/toLogin.php" id="login_form">



                        <div class="login_details_wrapper">
                            <H5 class="singup_header">LOGIN DETAILS</H5>
                            <input type="email" name="email" required placeholder="Email" class="input-field"
                                onkeyup="validate()">
                            <span></span>
                            <br>
                            <span class="error">
                                <?php echo $email_error;?>
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
                                class="input-field" onkeyup="validate()" required>
                            <span></span>
                            <br>
                            <span class="error">
                                <?php echo $password_error;?>
                            </span>

                        </div>
                        <br>

                        <br><br>
                        <button>Login</button>
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
                <a href="form.php"><button class="button_register btn">REGISTER</button></a>


            </div>

        </div>

    </div>


    <?php
    include 'footer.php';
    ?>
<script src="../javascript/showPassword.js"></script>
<script src="../javascript/loginValidate.js"></script>
<script src="../javascript/sidebar.js"></script>
</body>

</html>