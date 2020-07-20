<?php

    include 'connection.php' ;

    if(isset($_POST['register'])){
        $batchname=$_POST['batchname'];
        $batchdes=$_POST['batchdes'];
        $clubcode=$_POST['clubcode'];
        $sdate=$_POST['sdate'];
        $edate=$_POST['edate'];
        $mlimit=$_POST['mlimit'];
        $ecr=$_POST['ecr'];
        $fees=$_POST['fees'];
        $cname1=$_POST['cname1'];
        $cname2=$_POST['cname2'];
        $status="ACTIVE";
        if(empty($batchname) || empty($sdate) || empty($edate) || empty($mlimit) || empty($fees) || empty($cname1)) {
            header('location:batchAddForm.php?error=Please fill all the textboxes');
            exit();
         }

         $query = "INSERT INTO training_batch (`batch_name`, `batch_des`, `club_code`, 
                                                `start_date`, `end_date`, `member_limit`, `eligible_criteria`, 
                                                `fees`, `coach_name`, `coach_name2`, `status`) 
                                        VALUES ('$batchname','$batchdes','$clubcode',
                                                '$sdate','$edate','$mlimit','$ecr',
                                                '$fees','$cname1','$cname2','$status')";
        
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:batchViewForm.php');
        }else {
            header('location:batchAddForm.php?error=Unable to ADD new batch');
        }
    }
?>