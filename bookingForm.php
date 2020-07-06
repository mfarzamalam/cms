<?php include 'connection.php'; ?>

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


    <link href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link href="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
      

    <!-- Main CSS-->
    <link href="css/gAdd.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">

    <link href="css/booking.css?c=<?php echo time(); ?>" rel="stylesheet" media="all">

</head>

<body>

    <?php include 'header.php'; 


//     if(isset($_GET['search'])){
//         echo "<h1>$_GET[date]</h1>";
//         echo "<h1>$_GET[range]</h1>";

//     if($_GET['Day'] == "Day" && $_GET['Night'] == "Night"){
        
//         echo "<h1>Day and night</h1>";

//     } 
//     else if ($_GET['Day'] == "Day" && $_GET['Night'] == ""){
                
//         echo "<h1>Day</h1>";

//     }
//     else if ($_GET['Night'] == "Night" && $_GET['Day'] == ""){
//         echo "<h1>Night</h1>";
//     }
// }

    // while ($loop = mysqli_fetch_assoc($r)){
    
    
    ?>
<!-- 
    <table border="1">
        <tr>
            <th>ground name </th>
            <th>ground description </th>
            <th>ground owner </th>
            <th>ground owner number </th>
            <th>ground rent day </th>
            <th>ground rent night </th>
            <th>ground day </th>
            <th>ground night </th>
            <th>ground available </th>
        </tr>
        <tr>
            <td><?php echo $loop['ground_name']; ?></td>
            <td><?php echo $loop['ground_des']; ?></td>
            <td><?php echo $loop['ground_owner']; ?></td>
            <td><?php echo $loop['ground_owner_num']; ?></td>
            <td><?php echo $loop['rent_day']; ?></td>
            <td><?php echo $loop['rent_night']; ?></td>
            <td><?php echo $loop['Day']; ?></td>
            <td><?php echo $loop['Night']; ?></td>
            <td><?php echo $loop['available']; ?></td>
        </tr>
    </table> -->

 <!-- while loop tag close here -->

    <div class="styling">
        <div class="page-wrapper bg-img-1 p-t-165 p-b-100">
            <div class="wrapper wrapper--w720">
                <div class="card card-3">
                    <div class="card-body">
                        <ul class="tab-list">
                            <li class="tab-list__item active">
                                <a class="tab-list__link" href="#tab1" data-toggle="tab">hotels</a>
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