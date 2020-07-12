   <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>DASH<span>BOARD</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <!-- <h5 class="centered" style="text-transform: capitalize;"><?php echo $_SESSION['name']; ?></h5> -->
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <!-- For clubs  -->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>CLUB</span>
              </a>
            <ul class="sub">
              <li><a href="clubinfo.php">Club info</a></li>
              <li><a href="clubGround.php">Ground</a></li>
              <li><a href="clubBatch.php">Batches</a></li>
            </ul>
          </li>

          <!-- For members -->
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Members</span>
              </a>
            <ul class="sub">
              <li><a href="memberinfo.php">Member info</a></li>
              <li><a href="groundBooking.php">Ground Booking</a></li>
              <li><a href="batchRegistration.php">Batch Registration</a></li>
            </ul>
          </li>

          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>UI Elemets</span>
              </a>
            <ul class="sub">
              <li><a href="general.php">General</a></li>
              <li><a href="buttons.php">Buttons</a></li>
              <li><a href="panels.php">Panels</a></li>
              <li><a href="font_awesome.php">Font Awesome</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Components</span>
              </a>
            <ul class="sub">
              <li><a href="grids.php">Grids</a></li>
              <li><a href="calendar.php">Calendar</a></li>
              <li><a href="gallery.php">Gallery</a></li>
              <li><a href="todo_list.php">Todo List</a></li>
              <li><a href="dropzone.php">Dropzone File Upload</a></li>
              <li><a href="inline_editor.php">Inline Editor</a></li>
              <li><a href="file_upload.php">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
              </a>
            <ul class="sub">
              <li><a href="blank.php">Blank Page</a></li>
              <li><a href="login.php">Login</a></li>
              <li><a href="lock_screen.php">Lock Screen</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a href="invoice.php">Invoice</a></li>
              <li><a href="pricing_table.php">Pricing Table</a></li>
              <li><a href="faq.php">FAQ</a></li>
              <li><a href="404.php">404 Error</a></li>
              <li><a href="500.php">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Forms</span>
              </a>
            <ul class="sub">
              <li><a href="form_component.php">Form Components</a></li>
              <li><a href="advanced_form_components.php">Advanced Components</a></li>
              <li><a href="form_validation.php">Form Validation</a></li>
              <li><a href="contactform.php">Contact Form</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>Data Tables</span>
              </a>
            <ul class="sub">
              <li><a href="basic_table.php">Basic Table</a></li>
              <li><a href="responsive_table.php">Responsive Table</a></li>
              <li><a href="advanced_table.php">Advanced Table</a></li>
            </ul>
          </li>
          <li>
            <a href="inbox.php">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Charts</span>
              </a>
            <ul class="sub">
              <li><a href="morris.php">Morris</a></li>
              <li><a href="chartjs.php">Chartjs</a></li>
              <li><a href="flot_chart.php">Flot Charts</a></li>
              <li><a href="xchart.php">xChart</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.php">Lobby</a></li>
              <li><a href="chat_room.php"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.php">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->