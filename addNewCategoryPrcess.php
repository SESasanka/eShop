<?php

session_start();

include "connection.php";

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST["email"]) && isset($_POST["name"])) {

    if ($_SESSION["au"]["email"] = $_POST["email"]) {

        $cname = $_POST["name"];
        $umail = $_POST["email"];

        $category_rs = Database::search("SELECT * FROM `category` WHERE `cat_name` LIKE '%" . $cname . "%'");
        $category_num = $category_rs->num_rows;

        if ($category_num == 0) {

            $code = uniqid();
            Database::iud("UPDATE `admin` SET `vcode`='" . $code . "' WHERE `email`='" . $umail . "'");

            //email code

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
            $mail->addAddress($umail);
            $mail->isHTML(true);
            $mail->Subject = 'eShop Admin Login Verification Code for Add new category';
            $bodyContent = '<h1 style="color:red;">Your Verification Code is ' . $code . '</h1>';
            $bodyContent .= '******************';
            $mail->Body    = $bodyContent;

            if (!$mail->send()) {
                echo 'Verification Code sending failed';
            } else {
                echo 'Success';
            }
        } else {
            echo ("This category already exists.");
        }
    } else {
        echo ("Invalid user.");
    }
} else {
    echo ("Something is missing.");
}
