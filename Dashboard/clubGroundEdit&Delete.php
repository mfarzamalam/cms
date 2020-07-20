<?php

    include 'connection.php' ;

    if(isset($_POST['Edit'])){
        
         $groundname=$_POST['groundname'];
         $grounddes=$_POST['grounddes'];
         $groundowner=$_POST['groundowner'];
         $grondownernumber=$_POST['grondownernumber'];
         $rent_day=$_POST['rent_day'];
         $Day=$_POST['Day'];
         $rent_night=$_POST['rent_night'];
         $Night=$_POST['Night'];
         $available=$_POST['available'];
         
         $groundcode=$_POST['groundcode'];
         $club_code=$_POST['club_code'];
         
         if(empty($groundname) || empty($groundowner) || empty($grondownernumber) || empty($rent_day) || empty($Day) || empty($rent_night) || empty($Night) || empty($available)) {
            header('location:clubGround.php?error=Please fill all the textboxes');
            exit();
         }
            

        $query = "UPDATE grounds SET `ground_name`='$groundname', `ground_des`='$grounddes', `club_code`='$club_code',
                                    `ground_owner`='$groundowner', `ground_owner_num`='$grondownernumber', `rent_day`='$rent_day',
                                    `rent_night`='$rent_night', `Day`='$Day', `Night`='$Night', `available`='$available' WHERE `ground_code`='$groundcode'";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:clubGround.php');
        }else {
            header('location:clubGround.php?error=Unable to Edit');
        }

    }else if (isset($_POST['Delete'])){
        
        $groundcode=$_POST['groundcode'];
        
        $ground = "SELECT * FROM `ground_booking` WHERE `ground_code`='$groundcode'";
        $gr = mysqli_query($conn,$ground);
        $check_ground = mysqli_num_rows($gr);

        if($check_ground > 0){
                $q = "UPDATE `grounds` SET `status`='OFF',`available`='No' WHERE `ground_code`='$groundcode'";
                $r = mysqli_query($conn,$q);
        }else {
                $q = "DELETE FROM `grounds` WHERE `ground_code`='$groundcode'";
                $r = mysqli_query($conn,$q);
        }

        if($r){
            header('location:clubGround.php?error=All Good');
        }else {
            header('location:clubGround.php?error=Unable to Delete');
        }

    } else {
        header('location:clubGround.php');
    }

?>