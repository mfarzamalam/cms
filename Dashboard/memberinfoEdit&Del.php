<?php

    include 'connection.php' ;

    if(isset($_POST['Edit'])){

        $id = $_POST['id'];
         $member_name=$_POST['member_name'];
         $joining_date=$_POST['joining_date'];
         $member_cont1=$_POST['member_cont1'];
         $member_cont2=$_POST['member_cont2'];
         $member_cnic=$_POST['member_cnic'];
         $member_address=$_POST['member_address'];
         
         if(empty($member_name) || empty($joining_date) || empty($member_cont1) || empty($member_cnic)) {
            header('location:memberinfo.php?error=Please fill all the textboxes');
            exit();
         }
                    
        $query = "UPDATE `register_member` SET `member_name`='$member_name', `joining_date`='$joining_date', `member_cont1`='$member_cont1', 
                                                `member_cont2`='$member_cont2', `member_cnic`='$member_cnic', `member_address`='$member_address' 
                                            WHERE `member_code`='$id'";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to Edit Member info');
        }

    }else if (isset($_POST['Delete'])){
        
        $id = $_POST['id'];
        
        $ground = "SELECT * FROM `ground_booking` WHERE `member_code`='$id'";
        $gr = mysqli_query($conn,$ground);
        $check_ground = mysqli_num_rows($gr);

        $batch = "SELECT * FROM `training_register` WHERE `member_code`='$id'";
        $br = mysqli_query($conn,$batch);
        $check_batch = mysqli_num_rows($br);

        if($check_ground > 0 || $check_batch > 0){
            $q = "UPDATE `signin_member` SET `status`='OFF' WHERE `member_code`='$id'";
            $r = mysqli_query($conn,$q);
        } else {
            $q = "DELETE FROM `signin_member` WHERE `member_code`='$id'";
            $r = mysqli_query($conn,$q);

            $q = "DELETE FROM `register_member` WHERE `member_code`='$id'";
            $r = mysqli_query($conn,$q);
        }

        if($r){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to delete');
        }
    } else {
        header('location:index.php');
    }

?>