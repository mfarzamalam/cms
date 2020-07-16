<?php

    include 'connection.php' ;

    if(isset($_POST['register'])){
        $batchcode=$_POST['batchcode'];
        $membercode=$_POST['membercode'];
        $RegisterFees=$_POST['fees'];
        $payment=$_POST['payment'];
        $Aseats=$_POST['Aseats'];
        $Rseats=$_POST['Rseats'];
        $confirm = "Wait";
    
        $query = "INSERT INTO `training_register`(`batch_code`, `member_code`, `fees_paid`, `payment_mode`, 
                                                `available_seats`, `register_seats`, `confirmation`)
                                        VALUES ('$batchcode','$membercode','$RegisterFees','$payment',
                                                '$Aseats','$Rseats','$confirm')";
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:index.php?Success=You have successfully registered');
        } else {
            header('location:trainingForm.php?error=Unable to registerd');
        }
    
    } else {
        header('location:index.php');
    }

?>