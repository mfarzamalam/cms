<?php
    include 'connection.php';

    if(isset($_POST['LOGIN'])){
        $username = $_POST['username'];
        $pass     = $_POST['pass'];

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
            $_SESSION['club_name'] = $row2['club_name'];

            header("location:index.php");
        } else {
            header("location:loginForm.php?message=Login Failed");
        }
    }
?>