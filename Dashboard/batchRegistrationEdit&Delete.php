<?php

include 'connection.php';

if($_GET['stat']=="Confirmed"){
     $id=$_GET['id'];

     $q = "UPDATE `training_register` SET `confirmation`='Confirmed' WHERE `id`='$id'";
     $r = mysqli_query($conn,$q);

     header('location:batchRegistration.php');

} else if ($_GET['stat']=="Wait"){
    $id=$_GET['id'];

    $q = "UPDATE `training_register` SET `confirmation`='Wait' WHERE `id`='$id'";
    $r = mysqli_query($conn,$q);

    header('location:batchRegistration.php');

} else if ($_GET['stat']=="Delete"){
    $id=$_GET['id'];

    $q = "DELETE FROM `training_register` WHERE `id`='$id'";
    $r = mysqli_query($conn,$q);

    header('location:batchRegistration.php');
} else {
    header('location:batchRegistration.php');
}

?>