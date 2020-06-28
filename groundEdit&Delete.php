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

        $query = "UPDATE grounds SET `ground_name`='$groundname', `ground_des`='$grounddes', `club_code`='$_SESSION[club_code]',
                                    `ground_owner`='$groundowner', `ground_owner_num`='$grondownernumber', `rent_day`='$Day',
                                    `rent_night`='$Night', `available`='$available' WHERE `ground_code`='$groundcode')";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:groundViewForm.php');
        }else {
            header('location:groundViewForm.php?error=Unable to submit');
        }

    }else if (isset($_POST['Delete'])){
        
        $groundcode=$_POST['groundcode'];
        
        $q = "DELETE FROM `grounds` WHERE `ground_code`='$groundcode'";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:groundAddForm.php');
        }else {
            header('location:groundAddForm.php');
        }
    }

?>