<?php include 'connection.php'; 

   if(!isset($_SESSION['admin'])){
        header('location:login.php');
    }

  $q = "SELECT * FROM `register_club`";
  $r = mysqli_query($conn,$q);
  $num = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>ADMIN DASHBOARD</title>

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
        <div class="row">
          <!-- /col-md-12 -->
          <div class="col-md-12 mt">
            <div class="content-panel">
              <table class="table table-hover">
                <h4><i class="fa fa-angle-right"></i> Club details</h4>
                <hr>
                <thead>
                  <tr>
                    <th>#</th>
                    <th> Club name</th>
                    <th>Date registered</th>
                    <th>Grounds</th>
                    <th>Batches</th>
                    <th>Club president</th>
                    <th>Club secretary</th>
                  </tr>
                </thead>
                <tbody>

                <?php while ($list = mysqli_fetch_assoc($r)) { ?>
                  <tr>
                    <td><?php echo $num += 1;?></td>
                    <td><a href="clubinfo.php?id=<?php echo $list['club_code']?>"><?php echo $list['club_name']?></a></td>
                    <td><?php echo $list['club_built_year']?></td>
                   
                      <?php  // CLUB GROUNDS

                        $q1 = "SELECT * FROM `grounds` WHERE `club_code`='$list[club_code]'";
                        $r1 = mysqli_query($conn,$q1);
                        $count = mysqli_num_rows($r1);
                      ?>

                    <td><?php echo $count; ?></td>

                      <?php   // CLUB BATCHES

                        $q1 = "SELECT * FROM `training_batch` WHERE `club_code`='$list[club_code]'";
                        $r1 = mysqli_query($conn,$q1);
                        $count = mysqli_num_rows($r1);
                      ?>

                    <td><?php echo $count; ?></td>
                    
                    <td><?php echo $list['club_president']?></td>
                    <td><?php echo $list['club_secretary']?></td>
                  </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- row -->
        <div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Members Details</h4>
                <hr>
                <thead>
                  <tr>

                  <?php 

                      $q = "SELECT * FROM `register_member`";
                      $r = mysqli_query($conn,$q);
                      $num = 0;
                  ?>
                    <th>#</th>
                    <th> Member Name</th>
                    <th> Joining Date</th>
                    <th> Contact</th>
                    <th> Additional Contact</th>
                    <th> CNIC </th>
                    <th> Address</th>
                    <th> Ground Booking</th>
                    <th> Batch Registration</th>
                  </tr>
                </thead>
                <tbody>

                  <?php while ($row = mysqli_fetch_assoc($r)){ ?>
                    <tr>
                      <td><?php echo $num += 1;?></td>
                      <td> <a href="memberinfo.php?id=<?php echo $row['member_code']; ?>"> <?php echo $row['member_name']; ?></a></td>
                      <td><?php echo $row['joining_date']; ?></td>
                      <td><?php echo $row['member_cont1']; ?></td>
                      <td><?php echo $row['member_cont2']; ?></td>
                      <td><?php echo $row['member_cnic']; ?></td>
                      <td><?php echo $row['member_address']; ?></td>

                      <?php   // MEMBER GROUND BOOKING 

                        $q1 = "SELECT * FROM `ground_booking` WHERE `member_code`='$row[member_code]'";
                        $r1 = mysqli_query($conn,$q1);
                        $count = mysqli_num_rows($r1);
                      ?>

                      <td> <?php echo $count; ?> </a></td>
                      
                      
                      <?php // MEMBER TRAINING REGISTRATION

                        $q2 = "SELECT * FROM `training_register` WHERE `member_code`='$row[member_code]'";
                        $r2 = mysqli_query($conn,$q2);
                        $count = mysqli_num_rows($r2);
                      ?>

                      <td><?php echo $count; ?></td>

                    </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
        <!-- /row -->
      </section>
    </section>
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
