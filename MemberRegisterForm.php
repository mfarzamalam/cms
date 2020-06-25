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
                                <label for="membername"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="membername" id="membername" placeholder="Member name"/>
                            </div>

                            <div class="form-group">
                                <label for="memberjoindate"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="date" name="memberjoindate" id="memberjoindate" placeholder="Member joining date"/>
                            </div>

                            <div class="form-group">
                                <label for="membercontact1"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="membercontact1" id="membercontact1" placeholder="Member Contact"/>
                            </div>

                            <div class="form-group">
                                <label for="membercontact2"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="membercontact2" id="membercontact2" placeholder="Additional Number (Optional)"/>
                            </div>

                            <div class="form-group">
                                <label for="membercnic"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="membercnic" id="membercnic" placeholder="Your CNIC number"/>
                            </div>

                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="address" id="address" placeholder="Member Address"/>
                            </div>

                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Enter your username"/>
                            </div>

                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Your Password"/>
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