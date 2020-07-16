<?php include 'connection.php'; 

    $q = "SELECT * FROM `training_register` WHERE `member_code`='$_SESSION[member_code]'";
    $r = mysqli_query($conn,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="login/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="login/css/mylife.css">

    <?php include 'headerlink.php'; ?>

</head>
<body>

       <!-- MEMBER TRAINING INFO -->

    <?php include 'header.php'; ?>

    <div class="main">

        <div style="text-align: center;">
            <?php while ($row = mysqli_fetch_assoc($r)) {?>
                <h3>
                    Your Registration for <h2 style="text-transform: uppercase;"><?php 
                        $q1 = "SELECT * FROM `training_batch` WHERE `batch_code`='$row[batch_code]'";
                        $r1 = mysqli_query($conn,$q1);
                        $row2 = mysqli_fetch_assoc($r1);

                    echo $row2['batch_name']; ?></h2> OF <b><?php echo $row['fees_paid']?>rs</b> Through <b><?php echo $row['payment_mode']?></b> is
                    
                    <?php if($row['confirmation'] == "Confirmed") {?>
                        <h1 class="text-success">CONFIRMED</h1> 
                    <?php } if($row['confirmation'] == "Wait") {?>
                        <h1 class="text-danger">PENDING FOR REVIEW</h1> 
                    <?php } ?>
                
                </h3>
                    <br>
                <hr>
                    <br>
                <?php } ?>

        </div>
       

    </div>

    <!-- JS -->
    <!-- <script src="login/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="login/js/main.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>