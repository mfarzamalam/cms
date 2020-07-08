<?php


session_start();
 
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['club_name']);
unset($_SESSION['password']);
unset($_SESSION['member_code']);
unset($_SESSION['member_name']);
header('location:index.php');

?>