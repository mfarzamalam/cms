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
                        <h2 class="form-title">Sign up as a Club</h2>
                        <form method="POST" action="ClubRegister.php" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="clubname"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubname" id="clubname" placeholder="Club name"/>
                            </div>

                            <div class="form-group">
                                <label for="clubdes"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubdes" id="clubdes" placeholder="Club Description"/>
                            </div>

                            <div class="form-group">
                                <label for="clubuiltyear"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="date" name="clubuiltyear" id="clubuiltyear" placeholder="Club Built year"/>
                            </div>

                            <div class="form-group">
                                <label for="clubpresident"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubpresident" id="clubpresident" placeholder="Club President"/>
                            </div>

                            <div class="form-group">
                                <label for="clubpresidentnum"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="clubpresidentnum" id="clubpresidentnum" placeholder="Club President Number"/>
                            </div>

                            <div class="form-group">
                                <label for="clubVicePresident"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubVicePresident" id="clubVicePresident" placeholder="Club Vice President"/>
                            </div>

                            <div class="form-group">
                                <label for="clubsecretary"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubsecretary" id="clubsecretary" placeholder="Club Secretary"/>
                            </div>

                            <div class="form-group">
                                <label for="clubsecretarynum"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="number" name="clubsecretarynum" id="clubsecretarynum" placeholder="Club Secretary Number"/>
                            </div>

                            <div class="form-group">
                                <label for="clubtreasurer"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubtreasurer" id="clubtreasurer" placeholder="Club Treasurer"/>
                            </div>

                            <div class="form-group">
                                <label for="clubmanagement"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubmanagement" id="clubmanagement" placeholder="Club Management"/>
                            </div>

                            <div class="form-group">
                                <label for="clubrelation"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="clubrelation" id="clubrelation" placeholder="Your relation with club"/>
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
                                <input type="submit" name="signupclub" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="login/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="ClubLoginForm.php" class="signup-image-link">I am already member</a>
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