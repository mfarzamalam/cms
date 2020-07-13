<?php include 'connection.php'; 

    if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }
    
    if(isset($_GET['ground_code'])){
        $ground_code = $_GET['ground_code'];
        $q = "SELECT * FROM `grounds` WHERE `ground_code`='$ground_code'";
        $r = mysqli_query($conn,$q);

        $val = mysqli_fetch_assoc($r);
    }else {
        header('location:clubGround.php?error=Please select a Ground to edit');
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
        <h3><i class="fa fa-angle-right"></i> Ground Details</h3>
        
        <!-- /row -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="clubGroundEdit&Delete.php">
                  <div class="form-group ">
                    <label for="groundname" class="control-label col-lg-2">Ground Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="groundname" name="groundname" type="text" value="<?php echo $val['ground_name'] ?>" />
                    </div>
                  </div>


                  <div class="form-group ">
                    <label for="grounddes" class="control-label col-lg-2">Ground Description</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="grounddes" name="grounddes" type="text" value="<?php echo $val['ground_des'] ?>" />
                    </div>
                  </div>
                
                  <div class="form-group ">
                    <label for="groundowner" class="control-label col-lg-2">Ground Owner</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="groundowner" name="groundowner" type="text" value="<?php echo $val['ground_owner'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="grondownernumber" class="control-label col-lg-2">Ground Owner Number</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="grondownernumber" name="grondownernumber" type="number" value="<?php echo $val['ground_owner_num'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="rent_day" class="control-label col-lg-2">Day</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="rent_day" name="rent_day" type="text" value="<?php echo $val['rent_day'] ?>" />
                    </div>
                  </div>
              
                  <div class="form-group ">
                    <label for="Day" class="control-label col-lg-2">Rent Day</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Day" name="Day" type="number" value="<?php echo $val['Day'] ?>" />
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="rent_night" class="control-label col-lg-2">Night</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="rent_night" name="rent_night" type="text" value="<?php echo $val['rent_night'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="Night" class="control-label col-lg-2">Rent Night</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="Night" name="Night" type="number" value="<?php echo $val['Night'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="available" class="control-label col-lg-2">Availibility</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="available" name="available" type="text" value="<?php echo $val['available'] ?>" />
                    </div>
                  </div>

                  <input type="hidden" name="groundcode" value="<?php echo $ground_code?>">
                  <input type="hidden" name="club_code" value="<?php echo $val['club_code']?>">
                  
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
