<?php 

    include 'connection.php' ;

    if(isset($_POST['Edit'])){
            $batchname=$_POST['batchname'];
            $batchdes=$_POST['batchdes'];
            $batchcode=$_POST['batchcode'];
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

        $query = "UPDATE training_batch SET `batch_name`='$batchname',`batch_des`='$batchdes',
                                            `club_code`='$_SESSION[club_code]',`start_date`='$sdate',
                                            `end_date`='$edate',`member_limit`='$mlimit',`eligible_criteria`='$ecr',
                                            `fees`='$fees',`coach_name`='$cname1',`coach_name2`='$cname2',`status`='$status',
                                        WHERE `batch_code`='$batchcode'";
        
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:batchViewForm.php');
        }else {
            header('location:batchAddForm.php?error=Unable to submit');
        }

      } else if (isset($_POST['Delete'])){
          
            $batchcode=$_POST['batchcode'];
            $q = "SELECT * FROM `training_register` WHERE `batch_code`='$batchcode'";
            $r = mysqli_query($conn,$q);
            $row = mysqli_num_rows($r);

            if($row > 0){
                $q2 = "SELECT * FROM `training_batch` WHERE `batch_code`='$batchcode'";
                $r2 = mysqli_query($conn,$q2);
                $val = mysqli_fetch_assoc($r2);
                $today = Date("Y-m-d");
                $endDate = $val['end_date'];

                if($today <= $endDate){
                    header('location:batchViewForm.php?error=Registration has began. You cannot delete it now. Contact Admin');
                }else {
                    $q1 = "UPDATE `training_batch` SET `status`='EXPIRE' WHERE `batch_code`='$batchcode'";
                    $r1 = mysqli_query($conn,$q1);
            
                    if($r1){
                        header('location:batchViewForm.php');
                    }else {
                        header('location:batchViewForm.php?error=Unable to delete the batch');
                    }
                }
            }else {
                    $q1 = "DELETE FROM `training_batch` WHERE `batch_code`='$batchcode'";
                    $r1 = mysqli_query($conn,$q);

                    if($r1){
                        header('location:batchViewForm.php');
                    }else {
                        header('location:batchViewForm.php?error=Unable to delete');
                    }
            }
    }

?>