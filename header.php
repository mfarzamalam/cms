    <!--::header part start::-->
    <header class="header_area">
        <div class="sub_header">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-md-4 col-xl-6">
                      <div id="logo">
                          <a href="index.php"><img src="img/Logo.png" alt="" title="" /></a>
                      </div>
                  </div>
                  <div class="col-md-8 col-xl-6">
                      <div class="sub_header_social_icon float-right">
                        <?php if(!isset($_SESSION['username'])) { ?>
                        <a href="SignUpSelector.php" class="register_icon"><i class="ti-arrow-right"></i>REGISTER</a>
                        <a href="LoginSelector.php" class="register_icon"><i class="ti-arrow-right"></i>LOGIN</a>
                        <?php } else {?>
                        <a href="logout.php" class="register_icon"><i class="ti-arrow-right"></i>LOGOUT</a>
                        <a href="memberAccount.php" class="register_icon"><i class="ti-arrow-right"></i>MY ACCOUNT</a>
                        <?php }?>
                        <br/>
                        <br/>
                        <a href="#"><i class="flaticon-phone"></i>+02 213 - 256 (365)</a>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a href="index.php" class="nav-link">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">About us</a>
                                    </li>
        
                    <?php if(isset($_SESSION['club_name'])) { ?>

                                    <li class="nav-item">
                                        <a href="team.php" class="nav-link">team</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Ground
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="groundAddForm.php">Add ground</a>
                                            <a class="dropdown-item" href="groundViewForm.php">View ground</a>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Training Batches
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="batchAddForm.php">Add New batch</a>
                                            <a class="dropdown-item" href="batchViewForm.php">View Batches</a>
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a href="gallery.php" class="nav-link">gallery</a>
                                    </li>

                        <?php } else if (isset($_SESSION['member_name'])) { ?>

                                <li class="nav-item">
                                        <a href="trainingForm.php" class="nav-link">Training Register</a>
                                </li>

                                <li class="nav-item">
                                        <a href="bookingForm.php" class="nav-link">Ground booking</a>
                                </li>

                        <?php } ?>
                                    <!-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Pages
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="elements.php">Elements</a>
                                            <a class="dropdown-item" href="single-blog.php">Single blog</a>
                                        </div>
                                    </li> -->
                                    
                                    <li class="nav-item">
                                        <a href="blog.php" class="nav-link">blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php" class="nav-link">Contact</a>
                                    </li>
                                </ul>
                                <div class="header_social_icon d-none d-lg-block">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li>
                                            <a href="#"> <i class="ti-twitter"></i></a>
                                        </li>
                                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                                        <li><a href="#"><i class="ti-skype"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="header_social_icon d-block d-lg-none">
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li>
                                    <a href="#"> <i class="ti-twitter"></i></a>
                                </li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                                <li><a href="#"><i class="ti-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
