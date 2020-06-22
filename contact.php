<!DOCTYPE html>
<html lang="en">

<head>
  <title>Soccer &mdash; Website by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php include 'css/headerlink.php'; ?>

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php include 'header.php'; ?>


    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 mx-auto text-center">
            <h1 class="text-white">Contact</h1>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <form action="#">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Write something..."></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
              </div>
            </form>  
          </div>
          <div class="col-lg-4 ml-auto">
            
            <ul class="list-unstyled">
              <li class="mb-2">
                <strong class="text-white d-block">Address</strong>
                273 South Riverview Rd. <br> New York, NY 10011
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">Email</strong>
                <a href="#">info@unslate.co</a>
              </li>
              <li class="mb-2">
                <strong class="text-white d-block">
                  Phone
                </strong>
                <a href="#">+12 345 6789 012</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php 
    include 'footer.php';
    include 'js/footerlink.php';  
  ?>
  
</body>

</html>