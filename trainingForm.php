<?php include 'connection.php'; 

    $q = "SELECT * FROM training_batch";
    $qr = mysqli_query($conn,$q);
    
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

    <?php while($c = mysqli_fetch_assoc($qr)) {
            $total = ""; 
            $s = "SELECT * FROM `training_register` WHERE `batch_code`=$c[batch_code]";
            $r = mysqli_query($conn,$s);
            $reg = mysqli_num_rows($r);
            $row = mysqli_fetch_assoc($r);

            $total = $c['member_limit'] - $reg;

        if($reg > 0 ) {        
            if($c['batch_code'] == $row['batch_code'] && $row['member_code'] !== $_SESSION['member_code']){

        ?>

        <form method="POST" action="trainingSub.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title"><?php echo $c['batch_name']?></h2>
                    </div>
                    
                    <div class="card-body">                        
                        <input type="hidden" name="batchcode" value="<?php echo $c['batch_code']?>">
                        <input type="hidden" name="membercode" value="<?php echo $_SESSION['member_code']?>">
                        <input type="hidden" name="fees" value="<?php echo $c['fees']?>">
                        <input type="hidden" name="Aseats" value="<?php echo $c['member_limit']?>">
                        <input type="hidden" name="Rseats" value="1">
                    

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

                                        <?php if($total == "") { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $c['member_limit'];?>" disabled>
                                        <?php  } else { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $total ?>" disabled>
                                        <?php  } ?>
                                        
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Your Seat</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="1" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                        <div class="name">Payment mode</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="payment" required>
                                        <option disabled="disabled" value="" selected>Choose option</option>
                                        <option value="Easy Paisa">Easy Paisa</option>
                                        <option value="Jaaz Cash">Jaaz Cash</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
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
                        <?php } else { ?>

        <form method="POST" action="trainingSub.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title"><?php echo $c['batch_name']?></h2>
                    </div>
                    
                    <div class="card-body">                        
                        <input type="hidden" name="batchcode" value="<?php echo $c['batch_code']?>">
                        <input type="hidden" name="membercode" value="<?php echo $_SESSION['member_code']?>">
                        <input type="hidden" name="fees" value="<?php echo $c['fees']?>">
                        <input type="hidden" name="Aseats" value="<?php echo $c['member_limit']?>">
                        <input type="hidden" name="Rseats" value="1">
                    

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

                                        <?php if($total == "") { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $c['member_limit'];?>" disabled>
                                        <?php  } else { ?>
                                            <input class="input--style-5" type="number" value="<?php echo $total ?>" disabled>
                                        <?php  } ?>
                                        
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                                <div class="name">Your Seat</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" value="1" disabled>
                                    </div>
                                </div>
                        </div>

                        <div class="form-row">
                        <div class="name">Payment mode</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="payment" required>
                                        <option disabled="disabled" value="" selected>Choose option</option>
                                        <option value="Easy Paisa">Easy Paisa</option>
                                        <option value="Jaaz Cash">Jaaz Cash</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
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
                            <?php } ?>
  
</body>

</html>