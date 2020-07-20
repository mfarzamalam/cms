<?php include 'connection.php'; 

      if(!isset($_SESSION['club_code'])){
            header('location:ClubLoginForm.php');
        }

        $today = Date("Y-m-d");
        $date=date_create($today);
        date_add($date,date_interval_create_from_date_string("30 days"));
        $next30Days = date_format($date,"Y-m-d");
?>

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

        <style> 
            .card-5 .card-heading {
                background-color: green;
            }
        
        </style>
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
                                <h1>Start New Batch</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->

        <form method="POST" action="batchAdd.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Start New Batch</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="form-row">
                                <div class="name">Batch Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="batchname">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Batch Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="batchdes">
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
                                <div class="name">Registration Start Date</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="date" name="sdate" min="<?php echo $today?>" max="<?php echo $next30Days?>" >
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Registration End Date</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="date" name="edate" min="<?php echo $today?>" max="<?php echo $next30Days?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Member limit</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="mlimit">
                                    </div>
                                </div>
                            </div>                            
                            
                            <div class="form-row">
                                <div class="name">Eligiblity Criteria</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="ecr">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Fees (Rs)</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="fees">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="name">Coach Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="cname1">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Second Coach Name (Optional) </div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="cname2">
                                    </div>
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