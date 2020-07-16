<?php include 'connection.php'; 

    if(!isset($_SESSION['member_code'])){
        header('location:index.php');
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $date = $_GET['date'];
        $mc = $_SESSION['member_code'];
    }

    $q = "SELECT * FROM `grounds` WHERE `ground_code` = $id";
    $r = mysqli_query($conn,$q);

    $row = mysqli_fetch_assoc($r);
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
                                <h1>Ground Booking</h1>
                                <p>Home<span>/</span>Players</p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
        <!--::breadcrumb part end::-->


<form method="POST" action="booking.php" class="page-wrapper p-t-45 p-b-50">
    <div class="wrapper wrapper--w790">
        <div class="card card-5">
            <div class="card-heading">
                <h2 class="title">Please fill all the relevent details for booking</h2>
            </div>
            <input type="hidden" name="gc" value="<?php echo $id ;?>">
            <input type="hidden" name="date" value="<?php echo $date ;?>">
            <input type="hidden" name="mc" value="<?php echo $mc ;?>">
            <input type="hidden" name="total" id="total" value="0">

            <div class="card-body">
                <form method="POST">
                <div class="form-row">
                        <div class="name">Date of Booking </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" value="<?php echo $date ?>" disabled>
                            </div>
                        </div>
                    </div>
                <div class="form-row">
                        <div class="name">Ground Name </div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" value="<?php echo $row['ground_name']; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Ground Description</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" value="<?php echo $row['ground_des'] ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="name">Ground Owner</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" value="<?php echo $row['ground_owner'] ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Ground Owner Number</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" value="<?php echo $row['ground_owner_num'] ?>" disabled>
                            </div>
                        </div>
                    </div>


                    <div class="form-row">
                        <div class="name">Please select the timing</div>
                        <div class="value">
                            <div class="input-group">
                                <input type="checkbox" id ="chk" class="sum" name='available1' value="<?php echo $row['Day'];?> ">Day (<?php echo $row['Day']."rs"?>)
                                    <br>
                                <input type="checkbox" id ="chk" class="sum" name='available2' value="<?php echo $row['Night']?> ">Night (<?php echo $row['Night']."rs"?>)
                            </div>
                        </div>
                    </div>
                    

                    <div class="form-row">
                        <div class="name">Total</div>
                        <div class="value">
                            <div class="input-group">
                                <span class="input--style-5" type="number" id="payment-total" disabled> 0 </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="name">Payment mode</div>
                        <div class="value">
                            <div class="input-group">
                                <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="payment" required>
                                        <option disabled="disabled" value="" selected>Choose option</option>
                                        <option value="Easy Paisa">Easy Paisa</option>
                                        <option value="Jaaz Cash">Jaaz Cash</option>
                                    </select>
                                    <div class="select-dropdown"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <?php if(isset($_GET['error'])) { ?>
                            <label style="color: red;" class="label label--block"> <?php echo $_GET['error'] ?></label>
                        <?php } ?>
                        <button class="btn btn--radius-2 btn--red" name="booking" type="submit">Book Now</button>
                    </div>
                </form>
                
            </div>
            
        </div>
    </div>
</form>

<script>
        window.onload=function(){
        var inputs = document.getElementsByClassName('sum'),
        total  = document.getElementById('payment-total');

        for (var i=0; i < inputs.length; i++) {
            inputs[i].onchange = function() {
                var add = this.value * (this.checked ? 1 : -1);
                total.innerHTML = parseFloat(total.innerHTML) + add
                var new_total = parseFloat(document.getElementById('total').value);
            console.log(new_total);
                document.getElementById('total').value=new_total + add
                }
            }
        }
</script>

</body>
</html>