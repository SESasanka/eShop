<?php

include "connection.php";

$txt = $_POST["t"];
$select = $_POST["s"];

$query = "SELECT * FROM `product` ";

if (!empty($txt) && $select == 0) {
    $query .= "WHERE `title` LIKE '%" . $txt . "%'";
} else if (empty($txt) && $select != 0) {
    $query .= "WHERE `category_cat_id`='" . $select . "'";
} else if (!empty($txt) && $select != 0) {
    $query .= "WHERE `title` LIKE '%" . $txt . "%' AND `category_cat_id`='" . $select . "'";
}

?>

<div class="row">
    <div class="offset-lg-1 col-12 col-lg-10 text-center">
        <div class="row">

            <?php

            $pageno;

            if ("0" != ($_POST["page"])) {
                $pageno = $_POST["page"];
            } else {
                $pageno = 1;
            }

            $product_rs = Database::search($query);
            $product_num = $product_rs->num_rows; //num_rows -> rows count 

            $result_per_page = 6;
            $number_of_pages = ceil($product_num / $result_per_page); // dashama sankaya thiyed kiyl balala purn sankay vt harwim 

            $page_results = ($pageno - 1) * $result_per_page; //inna page eka anuva kothan idan kothatad result pennane
            $selected_rs = Database::search($query . " LIMIT " . $result_per_page . " OFFSET " . $page_results . ""); //view karan product tika view kirim

            $selected_num = $selected_rs->num_rows;
            for ($x = 0; $x < $selected_num; $x++) {
                $selected_data = $selected_rs->fetch_assoc();

            ?>



                <div class="offset-lg-1 col-6 col-12 col-lg-3">
                    <div class="row justify-content-center">


                        <div class="card col-6 col-lg-2 mt-2 mb-2" style="width: 18rem;">

                            <?php
                            $img_rs = Database::search("SELECT * FROM `product_img` WHERE `product_id`='" . $selected_data["id"] . "'");
                            $img_data = $img_rs->fetch_assoc();
                            ?>

                            <img src="<?php echo $img_data["img_path"]; ?>" class="card-img-top img-thumbnail mt-2" style="height: 180px;" />
                            <div class="card-body ms-0 m-0 text-center">
                                <h5 class="card-title fw-bold fs-6"><?php echo $selected_data["title"]; ?></h5>
                                <span class="badge rounded-pill text-bg-info">New</span><br />
                                <span class="card-text text-primary"><?php echo $selected_data["price"]; ?> .00</span><br />

                                <?php

                                if ($selected_data["qty"] > 0) {
                                ?>
                                    <span class="card-text text-warning fw-bold">In Stock</span><br />
                                    <span class="card-text text-success fw-bold"><?php echo $selected_data["qty"]; ?> Items Available</span><br /><br />
                                    <a href='#' class="col-12 btn btn-success">Buy Now</a>

                                    <button class="col-12 btn btn-dark mt-2">
                                        <i class="bi bi-cart-plus-fill text-white fs-5"></i>
                                    </button>
                                <?php
                                } else {
                                ?>
                                    <span class="card-text text-danger fw-bold">Out Stock</span><br />
                                    <span class="card-text text-danger fw-bold">00 Items Available</span><br /><br />
                                    <a href='#' class="col-12 btn btn-success disabled">Buy Now</a>

                                    <button class="col-12 btn btn-dark mt-2 disabled">
                                        <i class="bi bi-cart-plus-fill text-white fs-5"></i>
                                    </button>

                                <?php
                                }

                                ?>


                                <button class="col-12 btn btn-outline-light mt-2 border border-primary">
                                    <i class="bi bi-heart-fill text-danger fs-5"></i>
                                </button>

                            </div>
                        </div>

                    </div>
                </div>

            <?php

            }

            ?>

            <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item">
                            <a class="page-link" <?php if ($pageno <= 1) {
                                                        echo ("#");
                                                    } else {
                                                    ?> onclick="basicSearch(<?php echo ($pageno - 1); ?>);" ; <?php
                                                                                                            } ?> aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php
                        for ($x = 1; $x <= $number_of_pages; $x++) {
                            if ($x == $pageno) {
                        ?>
                                <li class="page-item active">
                                    <a class="page-link" onclick="basicSearch(<?php echo ($x); ?>);"><?php echo $x; ?></a>
                                </li>
                            <?php
                            } else {
                            ?>
                                <li class="page-item ">
                                    <a class="page-link" onclick="basicSearch(<?php echo ($x); ?>);"><?php echo $x; ?></a>
                                </li>
                        <?php
                            }
                        }
                        ?>

                        <li class="page-item">
                            <a class="page-link" <?php if ($pageno >= $number_of_pages) {
                                                        echo ("#");
                                                    } else {
                                                    ?> onclick="basicSearch(<?php echo ($pageno + 1); ?>);" ; <?php
                                                                                                            } ?> aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>


    <?php



    ?>

</div>