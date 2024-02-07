<?php 

include "connection.php";

if(isset($_GET["id"])){

    $invoice_id = $_GET["id"];

    $invoice_rs = Database::search("SELECT * FROM `invoice` WHERE `invoice_id`='".$invoice_id."'");
    $invoice_data = $invoice_rs->fetch_assoc();

    $status_id = $invoice_data["status"];

    if($status_id == 0){
        Database::iud("UPDATE `invoice` SET `status`='1' WHERE `invoice_id`='".$invoice_id."'");
    }else if($status_id == 1){
        Database::iud("UPDATE `invoice` SET `status`='2' WHERE `invoice_id`='".$invoice_id."'");
    }else if($status_id == 2){
        Database::iud("UPDATE `invoice` SET `status`='3' WHERE `invoice_id`='".$invoice_id."'");
    }else if($status_id == 3){
        Database::iud("UPDATE `invoice` SET `status`='4' WHERE `invoice_id`='".$invoice_id."'");
    }

    echo ("success");

}

?>