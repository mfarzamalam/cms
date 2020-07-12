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
        
        $q = "DELETE FROM `register_member` WHERE `member_code`='$id'";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to delete');
        }
    }

?>