<?php include 'connection.php'; ?>

<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>BasketBall || Team</title>
      <link rel="icon" href="img/favicon.png">
      
      <?php include 'headerlink.php'; ?>

        <!-- Main CSS-->
        <link href="css/gAdd.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

   </head>
<body>

   <?php include 'header.php'; ?>

        <!--::breadcrumb part start::-->
            <section class="breadcrumb breadcrumb_bg">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h1>Your Ground</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->

        <form method="POST" action="groundAdd.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Ground Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="form-row">
                                <div class="name">Ground Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="groundname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Ground Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="grounddes">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="hidden" name="clubcode" value="<?php echo $_SESSION['club_code']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Ground Owner</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="groundowner">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Ground Owner Number</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="grondownernumber">
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Ground Availability</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input type="checkbox" id ="chk" name='available[]' value="Day">Day
                                            <br>
                                        <input type="checkbox" id ="chk" name='available[]' value="Night">Night
                                    </div>
                                </div>
                            </div>
                            
                            
                            <!-- <div class="form-row">
                                <div class="name">Subject</div>
                                <div class="value">
                                    <div class="input-group">
                                        <div class="rs-select2 js-select-simple select--no-search">
                                            <select name="subject">
                                                <option disabled="disabled" selected="selected">Choose option</option>
                                                <option>Subject 1</option>
                                                <option>Subject 2</option>
                                                <option>Subject 3</option>
                                            </select>
                                            <div class="select-dropdown"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div class="form-row p-t-20">
                                <label class="label label--block">Your ground is ready for booking?</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">Yes
                                        <input type="radio" checked="checked" name="RadioSelect" value="Yes">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="RadioSelect" value="No">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <?php if(isset($_GET['error'])) { ?>
                                    <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                <?php } ?>
                                <button class="btn btn--radius-2 btn--red" name="register" type="submit">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </form>

  
</body>

</html>