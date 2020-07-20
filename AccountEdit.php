<?php

    include 'connection.php';

    if(isset($_POST['memberEdit'])){

        $name=$_POST['name'];
        $contact1=$_POST['contact1'];
        $contact2=$_POST['contact2'];
        $JD=$_POST['JD'];
        $CNIC=$_POST['CNIC'];
        $add=$_POST['add'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];

        if(empty($name) || empty($contact1) || empty($CNIC) || empty($add) || empty($user) || empty($pass)){
            header('location:memberAccount.php?error=Please must not be empty');
        }

        $q = "UPDATE `register_member` SET `member_name`='$name', `joining_date`='$JD', `member_cont1`='$contact1', 
                                            `member_cont2`='$contact2', `member_cnic`='$CNIC', `member_address`='$add' 
                                        WHERE `member_code`='$_SESSION[member_code]'";
        $r = mysqli_query($conn,$q);
        
        $q1 = "UPDATE `signin_member` SET `username`='$user',`password`='$pass',`status`='ON' WHERE `member_code`='$_SESSION[member_code]'";
        $r1 = mysqli_query($conn,$q1);

        if($r && $r1){
            header('location:memberAccount.php?Success=Edit Successfully');
        } else {
            header('location:memberAccount.php?error=Error to Update');
        }
    }


?>