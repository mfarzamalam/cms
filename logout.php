<?php


session_start();
 
session_destroy();
unset($_SESSION['username']);
unset($_SESSION['club_name']);
unset($_SESSION['password']);
header('location:index.php');

?>