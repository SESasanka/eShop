<?php 

include "connection.php";

if(isset($_GET["id"])){

    $cid = $_GET["id"];

    Database::iud("DELETE FROM `cart` WHERE `cart_id`='".$cid."'");
    echo ("Removed");

}else{
    echo ("Somthing Went Wrong.");
}


?>