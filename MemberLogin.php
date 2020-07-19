<?php
    include 'connection.php';

    if(isset($_POST['LOGIN'])){
        $username = $_POST['username'];
        $pass     = $_POST['pass'];

        if(!empty($username) && !empty($pass)){
            $query = "SELECT * FROM `signin_member` WHERE `username`='$username' && `password`='$pass'";
            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
    
            if($num == 1){
                $row = mysqli_fetch_array($result);
                $cc = $row['member_code'];
    
                $query2 = "SELECT * FROM `register_member` WHERE `member_code`='$cc'";
                $result2 = mysqli_query($conn,$query2);
                $row2 = mysqli_fetch_assoc($result2);
    
                $_SESSION['username'] = $username;
                $_SESSION['member_code'] = $row2['member_code'];
                $_SESSION['member_name'] = $row2['member_name'];
                
                $q = "UPDATE `signin_member` SET `status`='ON' WHERE `member_code`='$row[member_code]'";
                $r = mysqli_query($conn,$q);

                header("location:index.php");
            } else {
                header("location:MemberLoginForm.php?error=Login Failed");
            }    
        }else {
            header("location:MemberLoginForm.php?error=Please fill all the textboxes");
        }
    }
?>