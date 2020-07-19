<?php
    include 'connection.php';

    $date = Date("Y-m-d");

    if(isset($_POST['signupclub'])){
        $clubname=$_POST['clubname'];
        $clubdes=$_POST['clubdes'];
        $clubpresident=$_POST['clubpresident'];
        $clubpresidentnum=$_POST['clubpresidentnum'];
        $clubsecretary=$_POST['clubsecretary'];
        $clubsecretarynum=$_POST['clubsecretarynum'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];

            if(empty($clubname) || empty($clubpresident) || empty($clubpresidentnum) || empty($clubsecretary) || empty($clubsecretarynum) || empty($username) || empty($pass)){
                header('location:ClubRegisterForm.php?error=Please fill all the textboxes');
                exit();
            }

            if($_POST['clubrelation'] == "Secretary" || $_POST['clubrelation'] == "secretary" || $_POST['clubrelation'] == "President"
                 || $_POST['clubrelation'] == "president" || $_POST['clubrelation'] == "Owner" || $_POST['clubrelation'] == "owner" ){
                    $clubrelation = $_POST['clubrelation'];
            }else {
                header('location:ClubRegisterForm.php?error=Please state correct relation with club');
                exit();
            }

            $q = "SELECT * FROM `signin_club`"; // first check wether username is already exist or not
            $r = mysqli_query($conn,$q);        

            while($complete = mysqli_fetch_assoc($r) ){
                $clubcheck = $complete['username'];

                if($username == $clubcheck){    // comparing with all the username exist in the table
                    // print_r($clubcheck);
                    header('location:ClubRegisterForm.php?error=username is already exist');
                    exit();     // if yes then registration will exit
                }
            }

            // if username is unique then registration continue
            $query = "INSERT INTO `register_club`(`club_name`, `club_des`, `joining_date`, `club_president`, 
                                                `club_president_num`, `club_secretary`, `club_secretary_num`, `relation_with_club`) 
                            VALUES               ('$clubname','$clubdes','$date','$clubpresident',
                                                  '$clubpresidentnum','$clubsecretary','$clubsecretarynum','$clubrelation')";
            $result = mysqli_query($conn,$query);


            if($result){
                // get the last record in register table using desc order from club code

                $query2 = "SELECT * FROM `register_club` ORDER BY `club_code` DESC";
                $result2 = mysqli_query($conn,$query2);
                $row = mysqli_fetch_assoc($result2);
                    $cc = $row['club_code'];    // put that code in a seprate variable
    
                    // add that club code in signin club table
                    $status = "ON";
                    $query3 = "INSERT INTO signin_club (`club_code`,`username`,`password`,`status`) VALUES ('$cc','$username','$pass','$status')";
                    $result3 = mysqli_query($conn,$query3);
    
                    if($result && $result3){        // check both the queries perform well.
                        header('location:ClubLoginForm.php');
                    }else {         // if not then else block will run                  
                        header('location:ClubRegisterForm.php?error=Failed to register');
                    }    
            } else {
                header('location:ClubRegisterForm.php?error=Failed to register');
            }          
    }
?>