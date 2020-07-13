<?php

    include 'connection.php' ;

    if(isset($_POST['Edit'])){

        $id = $_POST['id'];
         $clubname=$_POST['clubname'];
         $clubdes=$_POST['clubdes'];
         $clubby=$_POST['clubby'];
         $clubP=$_POST['clubP'];
         $clubPN=$_POST['clubPN'];
         $clubVP=$_POST['clubVP'];
         $clubSec=$_POST['clubSec'];
         $clubSecN=$_POST['clubSecN'];
         $CT=$_POST['CT'];
         $CM=$_POST['CM'];
         $relation=$_POST['relation'];
         
         if(empty($clubname) || empty($clubby) || empty($clubP) || empty($clubPN) || empty($clubSec) || empty($clubSecN) || empty($relation)) {
            header('location:clubinfo.php?error=Please fill all the textboxes');
            exit();
         }
                    
        $query = "UPDATE register_club SET `club_name`='$clubname', `club_des`='$clubdes', `club_built_year`='$clubby',
                                    `club_president`='$clubP', `club_president_num`='$clubPN', `club_vice_president`='$clubVP',
                                    `club_secretary`='$clubSec', `club_secretary_num`='$clubSecN', `club_management`='$CT', 
                                    `relation_with_club`='$relation' WHERE `club_code`='$id'";
    
        $result = mysqli_query($conn,$query);
        
        if($result){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to Edit Club info');
        }

    }else if (isset($_POST['Delete'])){
        
        $id = $_POST['id'];
        
        $q = "DELETE FROM `register_club` WHERE `club_code`='$id'";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:index.php');
        }else {
            header('location:index.php?error=Unable to delete');
        }
    } else {
        header('location:index.php');
    }

?>