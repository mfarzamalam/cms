<?php include 'connection.php';

  if(isset($_POST['signin'])){
    $user = $_POST['username'];
    $pass = $_POST['pass']; 

    $q = "SELECT * FROM `admin` WHERE `username`='$user' AND `password`='$pass'";
    $r = mysqli_query($conn,$q);
  
    $row = mysqli_num_rows($r);
  
    if($row == 1){

      $row1 = mysqli_fetch_assoc($r);
      $_SESSION['admin'] = $row1['username'];
      $_SESSION['name'] = $row1['name'];

      header('location:index.php');
    }else{
      header('location:login.php?error=Failed to sign in');
    }  
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
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
          <br>
          <input type="password" name="pass" class="form-control" placeholder="Password">
          <br>
          <button class="btn btn-theme btn-block" name="signin" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <div class="login-social-link centered">
            <?php if(isset($_GET['error'])) {?>
              <h5 style="color: red; text-transform:uppercase;"> <?php echo $_GET['error']; ?></h5>
            <?php } ?>
            <!-- <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button> -->
            <!-- <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button> -->
          </div>
          <!-- <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="#">
              Create an account
              </a>
          </div> -->
        </div>
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/login-bg.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
