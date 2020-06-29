<?php include 'connection.php'; 
        $q = "SELECT * FROM `training_batch`";
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
                                <h1>View Batch</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->

    <?php while($res = mysqli_fetch_assoc($r)) { ?>

        <form method="POST" action="batchEdit&Delete.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                    <div class="card card-5">
                        <div class="card-heading">
                            <h2 class="title">View Your Batches</h2>
                        </div>
                        <div class="card-body">
                            <form method="POST">
                            <div class="form-row">
                                    <div class="name">Batch Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchname" value="<?php echo $res['batch_name']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="name">Batch Description</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="batchdes" value="<?php echo $res['batch_des']?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="hidden" name="batchcode" value="<?php echo $res['batch_code']?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Registration Start Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="sdate" value="<?php echo $res['start_date']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Registration End Date</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="date" name="edate" value="<?php echo $res['end_date']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Member limit</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="mlimit" value="<?php echo $res['member_limit']?>">
                                        </div>
                                    </div>
                                </div>                            
                                
                                <div class="form-row">
                                    <div class="name">Eligiblity Criteria</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="ecr" value="<?php echo $res['eligible_criteria']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Fees (Rs)</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="number" name="fees" value="<?php echo $res['fees']?>">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    <div class="name">Coach Name</div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname1" value="<?php echo $res['coach_name']?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="name">Second Coach Name (Optional) </div>
                                    <div class="value">
                                        <div class="input-group">
                                            <input class="input--style-5" type="text" name="cname2" value="<?php echo $res['coach_name2']?>">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <?php if(isset($_GET['error'])) { ?>
                                        <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                    <?php } ?>
                                    <button class="btn btn--radius-2 btn--red" name="Edit" type="submit">Edit</button>
                                    <button class="btn btn--radius-2 btn--red" name="Delete" type="submit">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </form>

                                <?php } ?>

  
</body>

</html>