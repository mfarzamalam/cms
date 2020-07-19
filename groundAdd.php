<?php

    include 'connection.php' ;

    if(isset($_POST['register'])){
         $groundname=$_POST['groundname'];
         $grounddes=$_POST['grounddes'];
         $clubcode=$_POST['clubcode'];
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
        $status = "ON";
        
        $query = "INSERT INTO grounds (`ground_name`,`ground_des`,`club_code`,`ground_owner`,`ground_owner_num`,`rent_day`,`rent_night`,`Day`,`Night`,`available`,`status`)
                         VALUES      ('$groundname','$grounddes','$clubcode','$groundowner','$grondownernumber','$Day','$Night','$DayRent','$NightRent','$available','$status')";

        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:groundViewForm.php');
        }else {
            header('location:groundAddForm.php?error=Unable to submit');
        }
    }

?>