<?php 

    include 'connection.php' ;

    if(isset($_POST['Edit'])){
            $batchname=$_POST['batchname'];
            $batchdes=$_POST['batchdes'];
            $batchcode=$_POST['batchcode'];
            $clubcode=$_POST['clubcode'];
            $sdate=$_POST['sdate'];
            $edate=$_POST['edate'];
            $mlimit=$_POST['mlimit'];
            $ecr=$_POST['ecr'];
            $fees=$_POST['fees'];
            $cname1=$_POST['cname1'];
            $cname2=$_POST['cname2'];
        
        if(empty($batchname) || empty($sdate) || empty($edate) || empty($mlimit) || empty($fees) || empty($cname1)) {
            header('location:batchAddForm.php?error=Please fill all the textboxes');
            exit();
        }

        $query = "UPDATE training_batch SET `batch_name`='$batchname',`batch_des`='$batchdes',
                                            `club_code`='$clubcode',`start_date`='$sdate',
                                            `end_date`='$edate',`member_limit`='$mlimit',`eligible_criteria`='$ecr',
                                            `fees`='$fees',`coach_name`='$cname1',`coach_name2`='$cname2' 
                                        WHERE `batch_code`='$batchcode'";
        
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:clubBatch.php');
        }else {
            header('location:clubBatch.php?error=Unable to submit');
        }

      } else if (isset($_POST['Delete'])){
          
            $batchcode=$_POST['batchcode'];
           
            $batch = "SELECT * FROM `training_register` WHERE `batch_code`='$batchcode'";
            $br = mysqli_query($conn,$batch);
            $check_batch = mysqli_num_rows($br);

            if($check_batch > 0){
                $q = "UPDATE `training_batch` SET `status`='EXPIRE' WHERE `batch_code`='$batchcode'";
                $r = mysqli_query($conn,$q);
            } else {
                $q = "DELETE FROM `training_batch` WHERE `batch_code`='$batchcode'";
                $r = mysqli_query($conn,$q);
            }

            if($r){
                header('location:clubBatch.php');
            }else {
                header('location:clubBatch.php?error=Unable to delete');
            }
    } else {
            header('location:clubBatch.php');
    }

?>