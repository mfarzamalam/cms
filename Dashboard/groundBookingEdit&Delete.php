<?php

include 'connection.php';

if($_GET['stat']=="Paid"){
     $id=$_GET['id'];

     $q = "UPDATE `ground_booking` SET `decision`='Confirmed' WHERE `id`='$id'";
     $r = mysqli_query($conn,$q);

     header('location:groundBooking.php');

} else if ($_GET['stat']=="Pending"){
    $id=$_GET['id'];

    $q = "UPDATE `ground_booking` SET `decision`='Wait' WHERE `id`='$id'";
    $r = mysqli_query($conn,$q);

    header('location:groundBooking.php');

} else if ($_GET['stat']=="Delete"){
    $id=$_GET['id'];

    $q = "DELETE FROM `ground_booking` WHERE `id`='$id'";
    $r = mysqli_query($conn,$q);

    header('location:groundBooking.php');
} else {
    header('location:groundBooking.php');
}

?>