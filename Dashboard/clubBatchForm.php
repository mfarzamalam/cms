<?php include 'connection.php'; 

     if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }

    if(isset($_GET['batchcode'])){
        $batchcode = $_GET['batchcode'];
        $q = "SELECT * FROM `training_batch` WHERE `batch_code`='$batchcode'";
        $r = mysqli_query($conn,$q);

        $val = mysqli_fetch_assoc($r);
    }else {
        header('location:clubBatch.php?error=Please select a batch to edit');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->

        <?php include 'header.php'; ?>

   <!--main content start-->
   <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Member Details</h3>
        
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="clubbatchEdit&Delete.php">
                  <div class="form-group ">
                    <label for="batchname" class="control-label col-lg-2">Batch Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="batchname" name="batchname" type="text" value="<?php echo $val['batch_name'] ?>" />
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="batchdes" class="control-label col-lg-2">Batch Description</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="batchdes" name="batchdes" type="text" value="<?php echo $val['batch_des'] ?>" />
                    </div>
                  </div>
                
                  <div class="form-group ">
                    <label for="sdate" class="control-label col-lg-2">Start Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="sdate" name="sdate" type="date" value="<?php echo $val['start_date'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="edate" class="control-label col-lg-2">End Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="edate" name="edate" type="date" value="<?php echo $val['end_date'] ?>" />
                    </div>
                  </div>
              
                  <div class="form-group ">
                    <label for="mlimit" class="control-label col-lg-2">Member Limit</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="mlimit" name="mlimit" type="number" value="<?php echo $val['member_limit'] ?>" />
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="ecr" class="control-label col-lg-2">Eligibility Criteria</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="ecr" name="ecr" type="text" value="<?php echo $val['eligible_criteria'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="fees" class="control-label col-lg-2">Fees</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="fees" name="fees" type="number" value="<?php echo $val['fees'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname1" class="control-label col-lg-2">Coach Name</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cname1" name="cname1" type="text" value="<?php echo $val['coach_name'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="cname2" class="control-label col-lg-2">Second Coach Name</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="cname2" name="cname2" type="text" value="<?php echo $val['coach_name2'] ?>" />
                    </div>
                  </div>


                  <input type="hidden" name="batchcode" value="<?php echo $batchcode?>">
                  <input type="hidden" name="clubcode" value="<?php echo $val['club_code']?>">
                  
                  <!-- <div class="form-group ">
                    <label for="agree" class="control-label col-lg-2 col-sm-3">Agree to Our Policy</label>
                    <div class="col-lg-10 col-sm-9">
                      <input type="checkbox" style="width: 20px" class="checkbox form-control" id="agree" name="agree" />
                    </div>
                  </div> -->
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="Edit">Edit</button>
                      <button class="btn btn-theme04" type="submit" name="Delete">Delete</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->


  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
</body>

</html>
