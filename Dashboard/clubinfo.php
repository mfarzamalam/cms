<?php include 'connection.php'; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $q = "SELECT * FROM `register_club` WHERE `club_code`='$id'";
        $r = mysqli_query($conn,$q);
        $val = mysqli_fetch_assoc($r);

        $q1 = "SELECT * FROM `signin_club` WHERE `club_code`='$id'";
        $r1 = mysqli_query($conn,$q1);
        $status = mysqli_fetch_assoc($r1);

    }else {
        header('location:index.php?error=Please select a club');
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
        <h3><i class="fa fa-angle-right"></i> Club Details</h3>
        
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <h4 style="text-transform: uppercase; font-size:40px; color:red;"><i class="fa fa-angle-right"> <?php echo $val['club_name'] ?>  </i></h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="clubinfoEdit&Del.php">
                  <div class="form-group ">
                    <label for="clubname" class="control-label col-lg-2">Club Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="clubname" name="clubname" type="text" value="<?php echo $val['club_name'] ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="clubdes" class="control-label col-lg-2">Club Description</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="clubdes" name="clubdes" type="text" value="<?php echo $val['club_des'] ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="clubjoin" class="control-label col-lg-2">Joining Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="clubjoin" name="clubjoin" type="date" value="<?php echo $val['joining_date'] ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="clubP" class="control-label col-lg-2">Club President</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="clubP" name="clubP" type="text" value="<?php echo $val['club_president'] ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="clubPN" class="control-label col-lg-2">Club President Number</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="clubPN" name="clubPN" type="number" value="<?php echo $val['club_president_num'] ?>" />
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="clubSec" class="control-label col-lg-2">Club Secretary</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="clubSec" name="clubSec" type="text" value="<?php echo $val['club_secretary'] ?>" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="clubSecN" class="control-label col-lg-2">Club Secretary Number</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="clubSecN" name="clubSecN" type="number" value="<?php echo $val['club_secretary_num'] ?>" />
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="relation" class="control-label col-lg-2">Relation with Club</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="relation" name="relation" type="text" placeholder="Secretary/President/Owner" value="<?php echo $val['relation_with_club'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="status" class="control-label col-lg-2">Club Status</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="status" name="status" type="text" value="<?php echo $status['status'] ?>" />
                    </div>
                  </div>

                  <input type="hidden" name="id" value="<?php echo $id?>">
                  
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
