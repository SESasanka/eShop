<?php

session_start();
include "connection.php";

if(isset($_SESSION["u"])){
    if(isset($_GET["id"])){

        $pid = $_GET["id"];
        $umail = $_SESSION["u"]["email"];

        $cart_rs = Database::search("SELECT * FROM `cart` WHERE `product_id`='".$pid."' AND `user_email`='".$umail."'");
        $cart_num = $cart_rs->num_rows;

        $product_rs = Database::search("SELECT * FROM `product` WHERE `id`='".$pid."'");
        $product_data = $product_rs->fetch_assoc();

        $product_qty = $product_data["qty"];

        if($cart_num == 1){

            $cart_data = $cart_rs->fetch_assoc();
            $current_qty = $cart_data["qty"];
            $new_qty = (int)$current_qty + 1 ;

            if($product_qty >= $new_qty){
                Database::iud("UPDATE `cart` SET `qty`='".$new_qty."' WHERE `cart_id`='".$cart_data["cart_id"]."'");
                echo ("Cart Updated");
            }else{
                echo ("Invalid Quantity");
            }
        
        }else{
            Database::iud("INSERT INTO `cart`(`qty`,`user_email`,`product_id`)VALUES('1','".$umail."','".$pid."')");
            echo ("New Product Add To the Cart");
        }

    }else{
        echo ("Somthing Went Wrong.");
    }

}else{
    echo ("Please Login or Signup First.");
}

?>