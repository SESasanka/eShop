<?php 

include "connection.php";

if(isset($_GET["id"])){

    $feedback_id = $_GET["id"];

    Database::iud("DELETE FROM `invoice`");
    echo ("Removed");

}else{
    echo ("Somthing Went Wrong.");
}


?>