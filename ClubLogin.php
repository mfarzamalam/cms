<?php
    include 'connection.php';

    if(isset($_POST['LOGIN'])){
        $username = $_POST['username'];
        $pass     = $_POST['pass'];

        if(!empty($username) && !empty($pass)){
            $query = "SELECT * FROM `signin_club` WHERE `username`='$username' && `password`='$pass'";
            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
    
            if($num == 1){
                $row = mysqli_fetch_array($result);
                $cc = $row['club_code'];
    
                $query2 = "SELECT * FROM `register_club` WHERE `club_code`='$cc'";
                $result2 = mysqli_query($conn,$query2);
                $row2 = mysqli_fetch_assoc($result2);
    
                $_SESSION['username'] = $username;
                $_SESSION['club_code'] = $row2['club_code'];
                $_SESSION['club_name'] = $row2['club_name'];

                $q = "UPDATE `signin_club` SET `status`='ON' WHERE `club_code`='$row2[club_code]'";
                $r = mysqli_query($conn,$q);

                header("location:index.php");
            } else {
                header("location:ClubLoginForm.php?error=Login Failed");
            }    
        }else {
            header("location:ClubLoginForm.php?error=Please fill all the textboxes");
        }
    }
?>