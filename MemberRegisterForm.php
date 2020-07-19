<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login/css/mylife.css">

    <?php include 'headerlink.php'; ?>

</head>
<body>

    <?php include 'header.php'; ?>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up as Member</h2>
                        <form method="POST" action="MemberRegister.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="membername"></label>Name :
                                <input type="text" name="membername" id="membername"/>
                            </div>

                            <div class="form-group">
                                <label for="membercontact1"></label>Contact : 
                                <input type="number" name="membercontact1" id="membercontact1"/>
                            </div>

                            <div class="form-group">
                                <label for="membercontact2"></label>Contact (additional) :
                                <input type="number" name="membercontact2" id="membercontact2"/>
                            </div>

                            <div class="form-group">
                                <label for="membercnic"></label>CNIC :
                                <input type="number" name="membercnic" id="membercnic"/>
                            </div>

                            <div class="form-group">
                                <label for="address"></label>Address :
                                <input type="text" name="address" id="address"/>
                            </div>

                            <div class="form-group">
                                <label for="username"></label>Username :
                                <input type="email" name="username" id="username"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"></label>Password :
                                <input type="password" name="pass" id="pass"/>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                                <br>
                                <?php if (!isset($_GET['error']) == "") {?>
                                <label style="color: red; font-size: 25px;" class="label-agree-term"><span><span></span></span><?php echo $_GET['error']?></label>
                                <?php  } ?>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signupmember" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="MemberLoginForm.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <!-- <script src="login/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="login/js/main.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>