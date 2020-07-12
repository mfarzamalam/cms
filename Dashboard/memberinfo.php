<?php include 'connection.php'; 

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $q = "SELECT * FROM `register_member` WHERE `member_code`='$id'";
        $r = mysqli_query($conn,$q);

        $val = mysqli_fetch_assoc($r);
    }else {
        header('location:index.php?error=Please select a member');
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
            <h4 style="text-transform: uppercase; font-size:40px; color:red;"><i class="fa fa-angle-right"> <?php echo $val['member_name'] ?>  </i></h4>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="memberinfoEdit&Del.php">
                  <div class="form-group ">
                    <label for="member_name" class="control-label col-lg-2">Name</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="member_name" name="member_name" type="text" value="<?php echo $val['member_name'] ?>" />
                    </div>
                  </div>
                
                  <div class="form-group ">
                    <label for="joining_date" class="control-label col-lg-2">Joining Date</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="joining_date" name="joining_date" type="date" value="<?php echo $val['joining_date'] ?>" />
                    </div>
                  </div>
              
                  <div class="form-group ">
                    <label for="member_cont1" class="control-label col-lg-2">Contact</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="member_cont1" name="member_cont1" type="number" value="<?php echo $val['member_cont1'] ?>" />
                    </div>
                  </div>
                 
                  <div class="form-group ">
                    <label for="member_cont2" class="control-label col-lg-2">Additional Contact (Optional)</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="member_cont2" name="member_cont2" type="number" value="<?php echo $val['member_cont2'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="member_cnic" class="control-label col-lg-2">CNIC Number</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="member_cnic" name="member_cnic" type="number" value="<?php echo $val['member_cnic'] ?>" />
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="member_address" class="control-label col-lg-2">Address</label>
                    <div class="col-lg-10">
                      <input class="form-control " id="member_address" name="member_address" type="text" value="<?php echo $val['member_address'] ?>" />
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
