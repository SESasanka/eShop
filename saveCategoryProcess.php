<?php

include "connection.php";

if(isset($_POST["t"]) && isset($_POST["e"]) && isset($_POST["n"])){

    $vcode = $_POST["t"];
    $umail = $_POST["e"];
    $cname = $_POST["n"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$umail."'");
    $admin_num = $admin_rs->num_rows;

    if($admin_num == 1){
        $admin_data = $admin_rs->fetch_assoc();
        if($admin_data["vcode"] == $vcode){

            Database::iud("INSERT INTO `category`(`cat_name`) VALUES ('".$cname."')");
            echo ("success");

        }else{
            echo ("Invalid Verification code.");
        }
    }else{
        echo ("Invalid user.");
    }

}else{
    echo ("Something is missing.");
}

?>