<?php include 'connection.php'; 

    $q = "SELECT * FROM training_batch";
    $r = mysqli_query($conn,$q);

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
                                <h1>NEW BATCHES ABOUT TO START</h1>
                                <p style="color: red; font-size:30px;">REGISTER NOW</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->

    <?php while($c = mysqli_fetch_assoc($r)) { ?>
        <form method="POST" action="trainingSub.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Training Registration Form</h2>
                    </div>
                    <div class="card-body">                        
                        <input type="hidden" name="batchcode" value="<?php echo $c['batch_code']?>">
                        <input type="hidden" name="membercode" value="<?php echo $_SESSION['member_code']?>">
                        <input type="hidden" name="Aseats" value="<?php echo $c['member_limit']?>">
                        <input type="hidden" name="fees" value="<?php echo $c['fees']?>">

                        <div class="form-row">
                                <div class="name">Fees (per person)</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="<?php echo $c['fees']; ?>" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Available Seats</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="<?php echo $c['member_limit']; ?>" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Register Your Seats (upto 10)</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="Rseats" min="1" max="10" required>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Total</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="total">
                                    </div>
                                </div>
                        </div>

                                <?php if(isset($_GET['error'])) { ?>
                                    <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                <?php } ?>
                                <button class="btn btn--radius-2 btn--red" name="register" type="submit">Register</button>
                    </div>
                </div>
            </div>
        </form>
                                <?php } ?>
  
</body>

</html>