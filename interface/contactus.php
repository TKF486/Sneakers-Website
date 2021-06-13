<html>

<head>
    <link rel="stylesheet" href="../style/index.css">
    <link rel="stylesheet" href="../style/ContactUs.css">
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
        <div class="contact_us_wrapper">



            <div class="contact_us_wrapper_parent">
                <div class="contact_wrapper">
                    <h1>Contact Us</h1>
                    <p class="form_header">Let’s get this conversation started. Tell us a bit about yourself, and we’ll
                        get<br>in touch as soon
                        as
                        we can.</p>


                    <div class="contact_form">


                        <!-- <form action="../func/contactsubmit.php" method="POST"> -->
                        <form action="mailto:sneakers@gmail.com" method="get" >

                            <table class="contact_table">
                                <tr>
                                    <td class="fname_input"><label for="fname">First name</label><br>
                                        <input type="text" class="fname" name="fname" required><br>
                                    </td>
                                    <td class="lname_input"><label for="lname">Last name</label><br>
                                        <input type="text" class="lname" name="lname" required><br>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="email_input" colspan="2">
                                        <label for="email">Email</label><br>
                                        <input type="email" class="email" name="email" required>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="message" colspan="2">
                                        <label for="message">Message</label><br>
                                        <textarea name="message" id="message" cols="84" rows="10" required></textarea>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="phone_input" colspan="2">
                                        <label for="phone_no">Phone No</label><br>
                                        <input type="text" class="phone" name="phone" required>
                                    </td>
                                </tr>

                                <tr>

                                    <td class="submit_button" colspan="2">
                                        <br>
                                        <input type="submit" class="submit">
                                    </td>
                                </tr>




                            </table>
                        </form>
                    </div>


                    <div class="contact_details">
                        <div class="contact_details_wrapper">
                            <h2 class="contact_header">Contact Details</h2>
                            <div class="contact_info">
                                <ul>
                                    <li>Email: sneakers@gmail.com</li>
                                    <li>Phone No: 60102160486</li>
                                    <li>Address: No.3, Lorong Galing 44, 25300 Kuantan, Pahang</li>
                                </ul>


                            </div>


                        </div>
                </div>


            </div>

        </div>



    </div>
    







    <?php
    include 'footer.php';
    ?>















<script src="../javascript/sidebar.js"></script>




















































</body>

</html>