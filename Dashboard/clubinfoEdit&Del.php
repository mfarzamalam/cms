<?php

    include 'connection.php' ;

    if(isset($_POST['Edit'])){

        $id = $_POST['id'];
         $clubname=$_POST['clubname'];
         $clubdes=$_POST['clubdes'];
         $clubjoin=$_POST['clubjoin'];
         $clubP=$_POST['clubP'];
         $clubPN=$_POST['clubPN'];
         $clubSec=$_POST['clubSec'];
         $clubSecN=$_POST['clubSecN'];
         $status = $_POST['status'];

         if($_POST['relation'] == "Secretary" || $_POST['relation'] == "secretary" || $_POST['relation'] == "President"
                 || $_POST['relation'] == "president" || $_POST['relation'] == "Owner" || $_POST['relation'] == "owner" ){
            
                    $relation = $_POST['relation'];
            }else {
                header('location:index.php?error=Please state correct relation with club');
                exit();
         }
         
         if(empty($clubname) || empty($clubjoin) || empty($clubP) || empty($clubPN) || empty($clubSec) || empty($clubSecN) || empty($relation) || empty($status)) {
            header('location:index.php?error=Please fill all the textboxes');
            exit();
         }

                    
        $query = "UPDATE `register_club` SET `club_name`='$clubname',`club_des`='$clubdes',`joining_date`='$clubjoin',`club_president`='$clubP',
                                            `club_president_num`='$clubPN',`club_secretary`='$clubSec',`club_secretary_num`='$clubSecN',
                                            `relation_with_club`='$relation' WHERE `club_code`='$id'";
    
        $result = mysqli_query($conn,$query);

        $query2 = "UPDATE `signin_club` SET `status`='$status' WHERE `club_code`='$id'";
        $result2 = mysqli_query($conn,$query2);
        
        if($result && $result2){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to Edit Club info');
        }

    }else if (isset($_POST['Delete'])){
        
        $id = $_POST['id'];
        
        $ground = "SELECT * FROM `grounds` WHERE `club_code`='$id'";
        $gr = mysqli_query($conn,$ground);
        $check_ground = mysqli_num_rows($gr);
        
        if($check_ground > 0){  // check wether that club has ground if yes enter in block
            while($row = mysqli_fetch_assoc($gr)){
                
                $ground_book = "SELECT * FROM `ground_booking` WHERE `ground_code`='$row[ground_code]'";    // check how many ground that club has registeration
                $gbr = mysqli_query($conn,$ground_book);
                $ground_register = mysqli_num_rows($gbr);
                
                if($ground_register > 0){
                    $q = "UPDATE `grounds` SET `status`='OFF',`available`='No' WHERE `ground_code`='$row[ground_code]'";
                    $r = mysqli_query($conn,$q);
                } else {
                    $q = "DELETE FROM `grounds` WHERE `ground_code`='$row[ground_code]'";
                    $r = mysqli_query($conn,$q);
                }
            }
        }

        $batch = "SELECT * FROM `training_batch` WHERE `club_code`='$id'";
        $br = mysqli_query($conn,$batch);
        $check_batch = mysqli_num_rows($br);

        if($check_batch > 0){  // check wether that club has batch running, if yes enter in block
            while($row = mysqli_fetch_assoc($br)){
                
                $batch_book = "SELECT * FROM `training_register` WHERE `batch_code`='$row[batch_code]'";    // check how many batch has registeration going on
                $bbr = mysqli_query($conn,$batch_book);
                $batch_register = mysqli_num_rows($bbr);
                
                if($batch_register > 0){
                    $q = "UPDATE `training_batch` SET `status`='EXPIRE' WHERE `batch_code`='$row[batch_code]'";
                    $r = mysqli_query($conn,$q);
                } else {
                    $q = "DELETE FROM `training_batch` WHERE `batch_code`='$row[batch_code]'";
                    $r = mysqli_query($conn,$q);
                }
            }
        }

        if($check_batch == 0 && $check_ground == 0){
            $q = "DELETE FROM `signin_club` WHERE `club_code`='$id'";
            $r = mysqli_query($conn,$q);

            $q = "DELETE FROM `register_club` WHERE `club_code`='$id'";
            $r = mysqli_query($conn,$q);
        }

        $q = "UPDATE `signin_club` SET `status`='OFF' WHERE `club_code`='$id'";
        $r = mysqli_query($conn,$q);

        if($r){
            header('location:index.php?error=All Good');
        }else {
            header('location:index.php?error=Unable to Edit & Delete');
        }
    } else {
        header('location:index.php');
    }

?>