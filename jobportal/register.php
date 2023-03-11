<?php

include 'config.php';

if (isset($_POST['submit'])) {

    // $name = mysqli_real_escape_string($conn, $_POST['name']);
    // $email = mysqli_real_escape_string($conn, $_POST['email']);
    // $pass = md5($_POST['pass']);
    // $cpass = md5($_POST['c_pass']);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $insert = "INSERT INTO user (username, email, password) VALUES('$name','$email','$pass')";
    $reg = mysqli_query($conn, $insert);

            if($reg==1){
            header("location:login.php");

            }
            else{
                echo "wrong";
            }

    // $select = " SELECT * FROM user WHERE email = '$email's";

    // $result = mysqli_query($conn, $select);

    // if (mysqli_num_rows($result) > 0) {

    //     $error[] = 'user already exist!';

    // } else {

    //     if ($pass != $cpass) {
    //         $error[] = 'password not matched!';
    //     } else {
    //         $insert = "INSERT INTO user (username, email, password) VALUES('$name','$email','$pass')";
    //         mysqli_query($conn, $insert);
    //         header("location:login.php");
    //     }
    // }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- <form action="insert.php" method="post"></form> -->

    <!-- header seaction starts -->

    <header class="header">

        <section class="flex">

            <div id="menu-btn" class="fas fa-bars-staggered"></div>

            <a href="home.html"> <img src="images/logo1.png"
                    class="logo"></a>

            <nav class="navbar">
                <a href="home.html">home</a>
                <a href="about.html">about us</a>
                <a href="jobs.html">all jobs</a>
                <a href="contact.html">contact us</a>
                <a href="login.html">accounts </a>
            </nav>

            <a href="#" class="btn" style="margin-top: 0;">post job</a>



        </section>
    </header>



    <!-- login section starts -->
    <div class="account-form-container">
        <section class="account-form">
            <form method="post">
                <h3>create new account!</h3>

                <?php
                if (isset($error)) {
                    foreach ($error as $error) {
                        echo '<span class="error-msg">' . $error . '</span>';
                    };
                };
                ?>

                <input type="text" required name="name" id="name" maxlength="20" placeholder="enter your name" class="input">
                <input type="email" required name="email" id="email"maxlength="50" placeholder="enter your email" class="input">
                <input type="password" required name="pass" maxlength="20" id="pass" placeholder="enter your password"
                    class="input">
                <input type="confirm password" required name="c_pass" id="c_pass" maxlength="20" placeholder="confirm your password"
                    class="input">
                <p>already have an account? <a href="login.html">login now</a></p> <button type="submit"
                    value="register now" name="submit" class="btn">done</button>
            </form>
        </section>
    </div>


    <!-- footer section starts -->
    <!-- <footer class="footer">
        <section class="grid">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.html"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.html"><i class="fas fa-angle-right"></i> about</a>
                <a href="jobs.html"><i class="fas fa-angle-right"></i> all jobs</a>
                <a href="contact.html"><i class="fas fa-angle-right"></i> contact
                    us</a>
                <a href="#"><i class="fas fa-angle-right"></i> filter search</a>
            </div>

            <div class="box">
                <h3>extra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> account</a>
                <a href="login.html"><i class="fas fa-angle-right"></i> login</a>
                <a href="register.php"><i class="fas fa-angle-right"></i> register</a>
                <a href="#"><i class="fas fa-angle-right"></i> post job</a>
                <a href="#"><i class="fas fa-angle-right"></i> dashboard</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i> facebook</a>
                <a href="#"><i class="fab fa-twitter"></i> twitter</a>
                <a href="#"><i class="fab fa-instagram"></i> instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i> linkedin</a>
                <a href="#"><i class="fab fa-youtube"></i> youtube</a>

            </div>
        </section>
        <div class="credit">&copy; copyright @2023 | All rights reserved </div>
    </footer> -->












    <!-- external js link  -->
    <!-- <script src="js/script.js"></script> -->

</body>

</html>