<?php

session_start();
include "connection.php";

$receiver_email = $_SESSION["u"]["email"];
$sender_email = $_GET["e"];

$msg_rs = Database::search("SELECT * FROM `chat` WHERE `from`='" . $sender_email . "' OR `to`='" . $sender_email . "'");
$msg_num = $msg_rs->num_rows;

for ($x = 0; $x < $msg_num; $x++) {
    $msg_data = $msg_rs->fetch_assoc();

    if ($msg_data["from"] == $sender_email && $msg_data["to"] == $receiver_email) {

        $user_rs = Database::search("SELECT * FROM `user` INNER JOIN `profile_img` ON
        user.email=profile_img.user_email WHERE `email`='" . $msg_data["from"] . "'");

        

        $user_data = $user_rs->fetch_assoc();

?>
        <!-- sender -->
        <div class="media w-75">
            <?php
            if (isset($user_data["path"])) {
            ?>
                <img src="<?php echo $user_data["path"]; ?>" width="50px" class="rounded-circle" />
            <?php
            } else {
            ?>
                <img src="resource/new_user.svg" width="50px" class="rounded-circle" />
            <?php
            }
            ?>

            <div class="media-body me-4">
                <div class="bg-light rounded py-2 px-3 mb-2">
                    <p class="mb-0 fw-bold text-black-50"><?php echo $msg_data["content"]; ?></p>
                </div>
                <p class="small fw-bold text-black-50 text-end"><?php echo $msg_data["date_time"]; ?></p>
                <p class="invisible" id="rmail"><?php echo $msg_data["from"]; ?></p>
            </div>

        </div>

        <!-- sender -->
    <?php

    } else if ($msg_data["to"] == $sender_email && $msg_data["from"] == $receiver_email) {
    ?>
        <!-- receiver -->
        <div class="offset-3 col-9 media w-75 text-end justify-content-end align-items-end">
            <div class="media-body">
                <div class="bg-primary rounded py-2 px-3 mb-2">
                    <p class="mb-0 text-white"><?php echo $msg_data["content"]; ?></p>
                </div>
                <p class="small fw-bold text-black-50 text-end"><?php echo $msg_data["date_time"]; ?></p>
            </div>
        </div>
        <!-- receiver -->
<?php
    }

    if($msg_data["status"] == 0){
        Database::iud("UPDATE `chat` SET `status`='1' WHERE `chat_id`='".$msg_data["chat_id"]."'");
    }

}

?>