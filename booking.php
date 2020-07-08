<?php

    include 'connection.php';

    if(isset($_POST['booking'])){
       $gc=$_POST['gc'];
       $mc=$_POST['mc'];
       $date=$_POST['date'];
      $total=$_POST['total'];
      $payment=$_POST['payment'];
      $Day = "No";
      $Night = "No";

        if(empty($_POST['available1']) && empty($_POST['available2']) ){
            header('location:bookingForm.php?error=Please select atleast one timing');
        }            
        
        if(isset($_POST['available1'])){
            $Day = "Yes";
        }
        if(isset($_POST['available2'])){
            $Night = "Yes";
        }

        $q = "INSERT INTO `ground_booking` (`ground_code`, `member_code`, `booking_date`, `Day`, 
                                            `Night`, `payment_mode`, `payment_status`, `amount_paid`, 
                                            `club_decision`) 
                    VALUES                 ('$gc','$mc','$date','$Day','$Night','$payment','Pending',
                                            '$total','Pending')";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:bookingForm.php?success=Successfully Booked');
        }else{
            header('location:bookingRegister.php?error=Failed to book');
        }
    }

?>