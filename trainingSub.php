<?php

    include 'connection.php' ;

    if(isset($_POST['register'])){
        $batchcode=$_POST['batchcode'];
        $membercode=$_POST['membercode'];
        $feesWant=$_POST['fees'];
        $feesgiven=$_POST['total'];
        $Aseats=$_POST['Aseats'];
        $Rseats=$_POST['Rseats'];
        $confirm = "We will update you when payment is completed";
    
        $query = "INSERT INTO training_register (`batch_code`, `member_code`, `fees_pp`, `fees_given`, 
                                                `available_seats`, `register_seats`, `confirmation`) 
                                        VALUES ('$batchcode','$membercode','$feesWant','$feesgiven',
                                                '$Aseats','$Rseats','$confirm')";
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:index.php?Success=You have successfully registered');
        } else {
            header('location:trainingForm.php?error=Unable to registerd');
        }
    
    }

?>