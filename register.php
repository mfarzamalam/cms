<?php
    include 'connection.php';

    if(isset($_POST['signupclub'])){
        $clubname=$_POST['clubname'];
        $clubdes=$_POST['clubdes'];
        $clubuiltyear=$_POST['clubuiltyear'];
        $clubpresident=$_POST['clubpresident'];
        $clubpresidentnum=$_POST['clubpresidentnum'];
        $clubVicePresident=$_POST['clubVicePresident'];
        $clubsecretary=$_POST['clubsecretary'];
        $clubsecretarynum=$_POST['clubsecretarynum'];
        $clubtreasurer=$_POST['clubtreasurer'];
        $clubmanagement=$_POST['clubmanagement'];
        $clubrelation=$_POST['clubrelation'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];

            $q = "SELECT * FROM `signin_club`"; // first check wether username is already exist or not
            $r = mysqli_query($conn,$q);        

            while($complete = mysqli_fetch_assoc($r) ){
                $clubcheck = $complete['username'];

                if($username == $clubcheck){    // comparing with all the username exist in the table
                    // print_r($clubcheck);
                    header('location:registerForm.php?error=username is already exist');
                    exit();     // if yes then registration will exit
                }
            }

            // if username is unique then registration continue
            $query = "INSERT INTO register_club (`club_name`,`club_des`,`club_built_year`,
                                                    `club_president`,`club_president_num`,`club_vice_president`,
                                                    `club_secretary`,`club_secretary_num`,`club_treasurer`,
                                                    `club_management`,`relation_with_club`)
                                            VALUES ('$clubname','$clubdes','$clubuiltyear',
                                                    '$clubpresident','$clubpresidentnum','$clubVicePresident',
                                                    '$clubsecretary','$clubsecretarynum','$clubtreasurer',
                                                    '$clubmanagement','$clubrelation')";
            $result = mysqli_query($conn,$query);

            // get the last record in register table using desc order from club code

            $query2 = "SELECT * FROM `register_club` ORDER BY `club_code` DESC";
            $result2 = mysqli_query($conn,$query2);
            $row = mysqli_fetch_assoc($result2);
                $cc = $row['club_code'];    // put that code in a seprate variable

                // add that club code in signin club table

                $query3 = "INSERT INTO signin_club (`club_code`,`username`,`password`) VALUES ('$cc','$username','$pass')";
                $result3 = mysqli_query($conn,$query3);

                if($result && $result3){        // check both the queries perform well.
                    header('location:loginForm.php?success=Successfully registered');
                }else {         // if not then else block will run                  
                    header('location:registerForm.php?error=Failed to register');
                }
        
    }
?>