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
        
        if(empty($batchname) || empty($sdate) || empty($edate) || empty($mlimit) || empty($fees) || empty($cname1)) {
            header('location:batchAddForm.php?error=Please fill all the textboxes');
            exit();
        }

        $query = "UPDATE training_batch SET `batch_name`='$batchname',`batch_des`='$batchdes',
                                            `club_code`='$_SESSION[club_code]',`start_date`='$sdate',
                                            `end_date`='$edate',`member_limit`='$mlimit',`eligible_criteria`='$ecr',
                                            `fees`='$fees',`coach_name`='$cname1',`coach_name2`='$cname2' 
                                        WHERE `batch_code`='$batchcode'";
        
        $result = mysqli_query($conn,$query);

        if($result){
            header('location:batchAddForm.php');
        }else {
            header('location:batchViewForm.php?error=Unable to submit');
        }

      } else if (isset($_POST['Delete'])){
            $groundcode=$_POST['groundcode'];
            $q = "DELETE FROM `grounds` WHERE `ground_code`='$groundcode'";
            $r = mysqli_query($conn,$q);

            if($r){
                header('location:batchAddForm.php');
            }else {
                header('location:batchViewForm.php?error=Unable to delete');
            }
    }

?>