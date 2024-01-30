<?php

include "connection.php";

if (isset($_GET["qty"]) & isset($_GET["id"])) {

    $qty = $_GET["qty"];
    $cid = $_GET["id"];



    if (($qty) > 1) {
        Database::iud("UPDATE `cart` SET `qty`='".$qty."' WHERE `cart_id`='" . $cid . "'");
        echo ("Updated");
    } else {

        echo ("Minimum Quantity has Achieved.");
    }
} else {
    echo ("Something went wrong.");
}
