<?php

include "connection.php";

if(isset($_GET["email"])){

    $user_email = $_GET["email"];

    $user_rs = Database::search("SELECT * FROM `user` WHERE `email`='".$user_email."'");
    $user_num = $user_rs->num_rows;

    if($user_num == 1){

        $user_data = $user_rs->fetch_assoc();

        if($user_data["status_status_id"] == 1){
            Database::iud("UPDATE `user` SET `status_status_id`='2' WHERE `email`='".$user_email."'");
            echo ($user_data["fname"]." ".$user_data["lname"]." blocked.");
        }else if($user_data["status_status_id"] == 2){
            Database::iud("UPDATE `user` SET `status_status_id`='1' WHERE `email`='".$user_email."'");
            echo ($user_data["fname"]." ".$user_data["lname"]." unblocked.");
        }

    }else{
        echo ("Cannot find the user. Please try again later.");
    }

}else{
    echo ("Something went wrong");
}

?>