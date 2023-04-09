

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- custom CSS file link -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- header seaction starts -->

    <header class="header">

        <section class="flex">

            <div id="menu-btn" class="fas fa-bars-staggered"></div>

            <!-- <a href="home.html" class="logo"><i class="fas fa-briefcase"></i>JobHunt.</a> -->
            <a href="home.html"> <img src="images/logo1.png" class="logo"></a>


            <nav class="navbar">
                <a href="home.html">home</a>
                <a href="about.html">about us</a>
                <a href="jobs.html">all jobs</a>
                <a href="contact.html">contact us</a>
                <a href="login.php">accounts </a>
            </nav>

            <a href="#" class="btn" style="margin-top: 0;">post job</a>



        </section>
    </header>

    <!-- Contact section starts -->
    <div class="section-title">Post job</div>

    <section class="contact">

        <form action="insertPostData.php" method="post">
            <h3>drop your message</h3>
            <div class="flex">
                <div class="box">
                    <p>name <span>*</span></p>
                    <input type="text" required name="name" id="name" maxlength="20" placeholder="enter your name"
                        class="input">
                </div>
                <div class="box">
                    <p>email <span>*</span></p>
                    <input type="email" required name="email" id="email" maxlength="50" placeholder="enter your email"
                        class="input">
                </div>
                <div class="box">
                    <p>number <span>*</span></p>
                    <input type="number" required name="number" id="number" min="0" max="9999999999" maxlength="20"
                        placeholder="enter your number" class="input">
                </div>
                <div class="box">
                    <p>company <span>*</span></p>
                    <input type="text" required name="company" id="company" maxlength="20"
                        placeholder="enter your company" class="input">
                </div>
                <div class="box">
                    <p>job title <span>*</span></p>
                    <input type="text" required name="jobtitle" id="jobtitle" maxlength="20"
                        placeholder="enter your Job title" class="input">
                </div>
                <div class="box">
                    <p>role <span>*</span></p> <select required name="role" class="input">
                        <option value="employee">job seeker (employee)</option>
                        <option value="employeer">job provider (employeer)</option>
                    </select>
                </div>
                <div class="box">
                    <p>address <span>*</span></p>
                    <input type="text" required name="address" id="address" maxlength="50"
                        placeholder="enter your Address" cols="30" rows="2" class="input">
                </div>
            </div>
            <p>job description <span>*</span></p>
            <textarea name="jobdescription" id="jobdescription" required class="input" maxlength="1000"
                placeholder="Enter your job description" cols="30" rows="10"></textarea>
            <button type="submit" value="submit" name="jay" class="btn">submit</button>
        </form>
    </section>





    <!-- footer section starts -->
    <footer class="footer">
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
                <a href="login.php"><i class="fas fa-angle-right"></i> login</a>
                <a href="register.html"><i class="fas fa-angle-right"></i> register</a>
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
    </footer>












    <!-- external js link  -->
    <script src="js/script.js"></script>

</body>

</html>