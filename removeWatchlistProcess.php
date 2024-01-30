<?php

include "connection.php";

$list_id = $_GET["id"];

$watchlist_rs = Database::search("SELECT * FROM `watchlist` WHERE `w_id`='".$list_id."'");
$watchlist_num = $watchlist_rs->num_rows;

if($watchlist_num == 0){
    echo ("Something went wrong. Please try again later.");
}else{
    $watchlist_data = $watchlist_rs->fetch_assoc();

    Database::iud("INSERT INTO `recent`(`product_id`,`user_email`) VALUES 
                ('".$watchlist_data["product_id"]."','".$watchlist_data["user_email"]."')");

    Database::iud("DELETE FROM `watchlist` WHERE `w_id`='".$list_id."'");
    echo ("success");
    
}

?>