<?php
    include 'connection.php';

    $date = Date("Y-m-d");

    if(isset($_POST['signupmember'])){
        $membername=$_POST['membername'];
        $membercontact1=$_POST['membercontact1'];
        $membercontact2=$_POST['membercontact2'];
        $membercnic=$_POST['membercnic'];
        $address=$_POST['address'];
        $username=$_POST['username'];
        $pass=$_POST['pass'];

            if(empty($membername) || empty($membercontact1) || empty($membercnic) || empty($address) || empty($pass) || empty($username)){
                header('location:MemberRegisterForm.php?error=Please fill all the textboxes');
                exit();
            }

            $q = "SELECT * FROM `signin_member`"; // first check wether username is already exist or not
            $r = mysqli_query($conn,$q);        

            while($complete = mysqli_fetch_assoc($r) ){
                $membercheck = $complete['username'];

                if($username == $membercheck){    // comparing with all the username exist in the table
                    // print_r($membercheck);
                    header('location:MemberRegisterForm.php?error=username is already exist');
                    exit();     // if yes then registration will exit
                }
            }

            // if username is unique then registration continue
            
            $query = "INSERT INTO register_member (`member_name`,`joining_date`,`member_cont1`,
                                                    `member_cont2`,`member_cnic`,`member_address`)
                                            VALUES ('$membername','$date','$membercontact1',
                                                    '$membercontact2','$membercnic','$address')";
            $result = mysqli_query($conn,$query);

            // get the last record in register table using desc order from club code

            $query2 = "SELECT * FROM `register_member` ORDER BY `member_code` DESC";
            $result2 = mysqli_query($conn,$query2);
            $row = mysqli_fetch_assoc($result2);
                $cc = $row['member_code'];    // put that code in a seprate variable

            if ($result){
                // add that club code in signin club table
                $status = "ON";
                $query3 = "INSERT INTO signin_member (`member_code`,`username`,`password`,`status`) VALUES ('$cc','$username','$pass','$status')";
                $result3 = mysqli_query($conn,$query3);

                if($result && $result3){        // check both the queries perform well.
                    header('location:MemberLoginForm.php?success=Successfully Registered');
                }else {         // if not then else block will run                  
                    header('location:MemberRegisterForm.php?error=Failed to register');
                }
            } else {
                header('location:MemberRegisterForm.php?error=Failed to register');
            }
    }
?>