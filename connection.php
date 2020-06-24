<?php

    $conn = mysqli_connect('localhost','root','','CCMS');

    if(!$conn){
        echo "Failed" . mysqli_error($conn); 
    }

    session_start();

?>