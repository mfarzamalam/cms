<?php include 'connection.php'; 
        $q = "SELECT * FROM `grounds` WHERE `club_code`='$_SESSION[club_code]' AND `status`='ON' ORDER BY `ground_code` DESC";
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
                                <h1>View Ground</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->
    <?php while($res = mysqli_fetch_assoc($r)) { ?>

        <form method="POST" action="groundEdit&Delete.php" class="page-wrapper p-t-45 p-b-50">
            <div class="wrapper wrapper--w790">
                <div class="card card-5">
                    <div class="card-heading">
                        <h2 class="title">Your ground</h2>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                        <div class="form-row">
                                <div class="name">Ground Name</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="groundname" value="<?php echo $res['ground_name'] ?>" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Ground Description</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="grounddes" value="<?php echo $res['ground_des'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="hidden" name="groundcode" value="<?php echo $res['ground_code']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="name">Ground Owner</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="groundowner" value="<?php echo $res['ground_owner'] ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Ground Owner Number</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="grondownernumber" value="<?php echo $res['ground_owner_num'] ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="name">Ground Availability</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input type="checkbox" id ="chk" name='available[]' value="Day" <?php if($res['rent_day'] == "Yes"){ echo "Checked"; } ?>>Day
                                            <br>
                                        <input type="checkbox" id ="chk" name='available[]' value="Night" <?php if($res['rent_night'] == "Yes"){ echo "Checked"; } ?>>Night
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="name">Ground Day Rent</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="DayRent" value="<?php echo $res['Day']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="name">Ground Night Rent</div>
                                <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="number" name="NightRent" value="<?php echo $res['Night']; ?>">
                                    </div>
                                </div>
                            </div>

                            <div class="form-row p-t-20">
                                <label class="label label--block">Your ground is ready for booking?</label>
                                <div class="p-t-15">
                                    <label class="radio-container m-r-55">Yes
                                        <input type="radio" name="RadioSelect" value="Yes" <?php if($res['available'] == "Yes"){ echo "Checked"; } ?>>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-container">No
                                        <input type="radio" name="RadioSelect" value="No" <?php if($res['available'] == "No"){ echo "Checked"; } ?>>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div>
                                <?php if(isset($_GET['error'])) { ?>
                                    <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                                <?php } ?>
                                <button class="btn btn--radius-2 btn--red" name="Edit" type="submit">Edit</button>
                                <button class="btn btn--radius-2 btn--red" name="Delete" type="submit" onclick=' return checkdel()'>Delete</button>
                            </div>
                        </form>
                        
                    </div>
                    
                </div>
            </div>
        </form>

                                <?php } ?>

  
    <script>
        function checkdel(){
            return confirm('Are you sure you want to delete ?');
        }
    
    </script>
</body>

</html>