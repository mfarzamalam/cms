<?php include 'connection.php'; 

    if(!isset($_SESSION['member_code'])){
        header('location:index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colrolib Templates">
    <meta name="author" content="Colrolib">
    <meta name="keywords" content="Colrolib Templates">

    <!-- Title Page-->
    <title>Au Form Wizard</title>

    <?php include 'headerlink.php'; ?>

    <!-- Main CSS-->
    <link href="css/gAdd.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="css/booking.css?c=<?php echo time(); ?>" rel="stylesheet" media="all">

</head>

<body>

    <?php include 'header.php'; ?>
    

    <div class="styling">
        <div class="page-wrapper bg-img-1 p-t-165 p-b-100">
            <?php if(isset($_GET['error'])){?>
                <div style="text-align: center; font-size:20px; text-transform:uppercase; color:red"><?php echo $_GET['error']?></div>
            <?php } ?>
            <div class="wrapper wrapper--w720">
                <div class="card card-3">
                    <div class="card-body">
                        <ul class="tab-list">
                            <li class="tab-list__item active">
                                <a class="tab-list__link" data-toggle="tab">Search Grounds</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                <form method="POST" action="bookingSearch.php">
                                    <div class="input-group">
                                        <label class="label">Select date</label>
                                        <input class="is1" type="date" name="date" required>
                                        <i class="zmdi zmdi-pin input-group-symbol"></i>
                                    </div>
                                    <div class="input-group">
                                        <label class="label">Range Maximum</label>
                                        <input class="is1" name="range" type="range" min="1000" max="10000" value="1000" id="myRange">
                                        <i class="zmdi zmdi-pin input-group-symbol"></i>
                                        <p>Value (rs): <span id="demo"></span></p>
                                    </div>

                                    <div class="checkbox-row">
                                        <label class="checkbox-container m-r-45">Day
                                            <input type="checkbox" name='Day' value="Day">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="checkbox-container">Night
                                            <input type="checkbox" name='Night' value="Night">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button class="btn-submit" type="submit" name="search">search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    </div>

<script>
    var slider = document.getElementById("myRange");
    var output = document.getElementById("demo");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        output.innerHTML = this.value;
    }
</script>

 
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->