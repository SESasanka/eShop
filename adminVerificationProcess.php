<?php

include "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST["e"])){

    $email = $_POST["e"];

    $admin_rs = Database::search("SELECT * FROM `admin` WHERE `email`='".$email."'");
    $admin_num = $admin_rs->num_rows;

    if($admin_num > 0){

        $code = uniqid();

        Database::iud("UPDATE `admin` SET `vcode`='".$code."'");

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sasankaakash22@gmail.com';
        $mail->Password = 'ekefppnphpkcrqem';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('sasankaakash22@gmail.com', 'Admin Verification');
        $mail->addReplyTo('sasankaakash22@gmail.com', 'Admin Verification');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = 'eshop Admin Login Verification Code';
        $bodyContent = '<h1 style="color:blue;">Your Verification Code is '.$code.'</h1>';
        $bodyContent .= '******************';
        $mail->Body    = $bodyContent;

        if(!$mail->send()){
            echo 'Verification Code sending failed';
        }else{
            echo 'Success';
        }

    }else{
        echo("You are not a valid user.");
    }

}else{
    echo ("Email field should not be empty.");
}



?>