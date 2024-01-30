<?php

session_start();
include "connection.php";

if (isset($_SESSION["p"])) {

    $pid = $_SESSION["p"]["id"];

    $title = $_POST["t"];
    $qty = $_POST["q"];
    $dwc = $_POST["dwc"];
    $doc = $_POST["doc"];
    $desc = $_POST["d"];

    Database::iud("UPDATE `product` SET `title`='" . $title . "',`qty`='" . $qty . "',`delivery_fee_colombo`='" . $dwc . "', 
    `delivery_fee_other`='" . $doc . "',`description`='" . $desc . "' WHERE `id`='" . $pid . "'");

    echo ("Product has been Updated.");

    $length = sizeof($_FILES);

    if ($length <= 3 && $length > 0) {

        $allowed_image_extensions = array("image/jpeg", "image/png", "image/svg+xml"); 

        $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='".$pid."'");
        $img_num = $img_rs->num_rows;

        for($y = 0; $y < $img_num;$y++){
            $img_data = $img_rs->fetch_assoc();

            unlink($img_data["img_path"]); //unlink->delete file
            Database::iud("DELETE FROM `product_img` WHERE `product_id`='".$pid."'");
        }

        for ($x = 0; $x < $length; $x++) {
            if (isset($_FILES["i" . $x])) {

                $image_file = $_FILES["i" . $x];
                $file_extension = $image_file["type"];

                if (in_array($file_extension, $allowed_image_extensions)) {

                    $new_img_extension;

                    if ($file_extension == "image/jpeg") {
                        $new_img_extension = ".jpeg";
                    } else if ($file_extension == "image/png") {
                        $new_img_extension = ".png";
                    } else if ($file_extension == "image/svg+xml") {
                        $new_img_extension = ".svg";
                    }

                    $file_name = "resource//mobile_images//" . $title . "_" . $x . "_" . uniqid() . $new_img_extension;
                    move_uploaded_file($image_file["tmp_name"], $file_name);

                    Database::iud("INSERT INTO `product_img`(`img_path`,`product_id`) VALUES 
            ('" . $file_name . "','" . $pid . "')");

            //echo("success");
                } else {
                    echo ("Inavid image type.");
                }
            }
        }

        //echo ("success");
    } else {
        echo ("Invalid Image Count.");
    }
}

?>