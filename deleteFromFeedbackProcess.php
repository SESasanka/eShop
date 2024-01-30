<?php 

include "connection.php";

if(isset($_GET["id"])){

    $feedback_id = $_GET["id"];

    Database::iud("DELETE FROM `invoice` WHERE `product_id`='".$feedback_id."'");
    echo ("Removed");

}else{
    echo ("Somthing Went Wrong.");
}


?>