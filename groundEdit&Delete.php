<?php

    include 'connection.php' ;

    if(isset($_POST['Edit'])){
        
         $groundname=$_POST['groundname'];
         $grounddes=$_POST['grounddes'];
         $groundcode=$_POST['groundcode'];
         $groundowner=$_POST['groundowner'];
         $grondownernumber=$_POST['grondownernumber'];
         
         if(empty($groundname) || empty($groundowner) || empty($grondownernumber)) {
            header('location:groundAddForm.php?error=Please fill all the textboxes');
            exit();
         }
        
             $Day = "No";
             $Night = "No";
            
             if(isset($_POST['available'])){
                foreach($_POST['available'] as $val){
                    if($val == "Day"){
                        $Day = "Yes";
                    }
                    if($val == "Night"){
                        $Night = "Yes";    
                    }
                }
            }
            
        $available=$_POST['RadioSelect'];

        $DayRent=$_POST['DayRent'];
        $NightRent=$_POST['NightRent'];

        $query = "UPDATE grounds SET `ground_name`='$groundname', `ground_des`='$grounddes', `club_code`='$_SESSION[club_code]',
                                    `ground_owner`='$groundowner', `ground_owner_num`='$grondownernumber', `rent_day`='$Day',
                                    `rent_night`='$Night', `Day`='$DayRent', `Night`='$NightRent', `available`='$available' WHERE `ground_code`='$groundcode' AND `club_code`='$_SESSION[club_code]'";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:groundViewForm.php');
        }else {
            header('location:groundViewForm.php?error=Unable to submit');
        }

    }else if (isset($_POST['Delete'])){
        
        $groundcode=$_POST['groundcode'];

        $q1 = "SELECT * FROM `ground_booking` WHERE `ground_code`='$groundcode'";
        $r1 = mysqli_query($conn,$q1);
        $num = mysqli_num_rows($r1);
        
        if($num > 0){
            $row = mysqli_fetch_assoc($r1);
            $book_date = $row['booking_date'];
            $current_date = Date("Y-m-d");

            if($current_date <= $book_date){
                header('location:groundViewForm.php?error=You cannot delete it. some has already booked your ground for coming days');
            }else {
                $q = "UPDATE `grounds` SET `available`='No', `status`='OFF' WHERE `ground_code`='$groundcode'";
                $r = mysqli_query($conn,$q);
        
                if($r){
                    header('location:groundViewForm.php');
                }else {
                    header('location:groundViewForm.php?error=Cannot turn it OFF');
                }
            }
        }else {
            $q = "DELETE FROM `grounds` WHERE `ground_code`='$groundcode'";
            $r = mysqli_query($conn,$q);
    
            if($r){
                header('location:groundViewForm.php');
            }else {
                header('location:groundViewForm.php?error=Unable to Delete');
            }    
        }
    }

?>