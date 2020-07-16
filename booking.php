<?php

    include 'connection.php';

    if(isset($_POST['booking'])){
      $gc=$_POST['gc'];
     echo  $mc=$_POST['mc'];
     echo  $date=$_POST['date'];
     echo $total=$_POST['total'];
     echo $payment=$_POST['payment'];
     echo $Day = "No";
     echo      $Night = "No";
     echo  $dec = "Wait";

        if(empty($_POST['available1']) && empty($_POST['available2']) ){
            header('location:bookingForm.php?error=Please select atleast one timing');
        }            
        
        if(isset($_POST['available1'])){
            echo       $Day = "Yes";
        }
        if(isset($_POST['available2'])){
            echo    $Night = "Yes";
        }


        $q = "INSERT INTO `ground_booking`(`ground_code`, `member_code`, `booking_date`, `Day`, `Night`, `payment_mode`, `amount_paid`, `decision`) 
                    VALUES                 ('$gc','$mc','$date','$Day','$Night','$payment',
                                            '$total','$dec')";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:bookingForm.php?success=Successfully Booked');
        }else{
            header('location:bookingSearch.php?error=Failed to book');
        }
    } else {
        header('location:index.php');
    }

?>