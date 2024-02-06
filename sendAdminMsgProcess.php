<?php

session_start();
include "connection.php";

$msg_txt = $_POST["t"];
$receiver;
if(isset($_POST["e"])){
$receiver = $_POST["e"];
}


$sender;
if (isset($_SESSION["u"])) {
    $sender = $_SESSION["u"]["email"];
} else if (isset($_SESSION["au"])) {
    $sender = $_SESSION["au"]["email"];
}

$d = new DateTime();
$tz = new DateTimeZone("Asia/Colombo");
$d->setTimezone($tz);
$date = $d->format("Y-m-d H:i:s");

if (!empty($receiver)) {
    Database::iud("INSERT INTO `chat`(`content`,`date_time`,`status`,`from`,`to`) VALUES 
    ('" . $msg_txt . "','" . $date . "','0','" . $sender . "','" . $receiver . "')");

    echo ("success1");
} else {
    Database::iud("INSERT INTO `chat`(`content`,`date_time`,`status`,`from`,`to`) VALUES 
    ('" . $msg_txt . "','" . $date . "','0','" . $sender . "','sasankaakash89@gmail.com')");

    echo ("success2");
}

?>