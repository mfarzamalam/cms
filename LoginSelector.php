<?php include 'connection.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <?php include 'headerlink.php'; ?>

    <style> 
        .cont{
            width: 90%;
            padding-left: 10%;
            margin: 100px auto;
        }

        .box{
            width: 40%;
            height: 300px;
            background: orange;
            float: left;
            margin: 0px 10px;
        }

        .cont a{
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
        }
    </style>
</head>
<body>

    <?php include 'header.php'; ?>

        <div class="cont">
            <a class="box" href="ClubLoginForm.php"><h1>Login as club</h1></a>
            <a class="box" href="MemberLoginForm.php"><h1>Login as member</h1></a>
        </div>

    <!-- JS -->
    <!-- <script src="login/vendor/jquery/jquery.min.js"></script> -->
    <!-- <script src="login/js/main.js"></script> -->
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>