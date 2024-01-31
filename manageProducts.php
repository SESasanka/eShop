<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Manage Products | Admins | eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />

</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 bg-light text-center">
                <label class="form-label text-primary fw-bold fs-1">Manage All Products</label>
            </div>

            <div class="col-12 mt-3">
                <div class="row">
                    <div class="offset-0 offset-lg-3 col-12 col-lg-6 mb-3">
                        <div class="row">
                            <div class="col-9">
                                <input type="text" class="form-control" />
                            </div>
                            <div class="col-3 d-grid">
                                <button class="btn btn-warning">Search Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-3 mb-3">
                <div class="row">
                    <div class="col-2 col-lg-1 bg-primary py-2 text-end">
                        <span class="fs-4 fw-bold text-white">#</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-light py-2">
                        <span class="fs-4 fw-bold">Product Image</span>
                    </div>
                    <div class="col-4 col-lg-2 bg-primary py-2">
                        <span class="fs-4 fw-bold text-white">Title</span>
                    </div>
                    <div class="col-4 col-lg-2 d-lg-block bg-light py-2">
                        <span class="fs-4 fw-bold">Price</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-primary py-2">
                        <span class="fs-4 fw-bold text-white">Quantity</span>
                    </div>
                    <div class="col-2 d-none d-lg-block bg-light py-2">
                        <span class="fs-4 fw-bold">Registered Date</span>
                    </div>
                    <div class="col-2 col-lg-1 bg-white"></div>
                </div>
            </div>

                <div class="col-12 mt-3 mb-3">
                    <div class="row">
                        <div class="col-2 col-lg-1 bg-primary py-2 text-end">
                            <span class="fs-4 fw-bold text-white">01</span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2">
                                <img src="resource/mobile_images/iphone12.jpg" style="height: 40px;margin-left: 80px;" />
                        </div>
                        <div class="col-4 col-lg-2 bg-primary py-2">
                            <span class="fs-5 fw-bold text-white">Apple iPhone 12</span>
                        </div>
                        <div class="col-4 col-lg-2 d-lg-block bg-light py-2">
                            <span class="fs-4 fw-bold">Rs. 100000 .00</span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-primary py-2">
                            <span class="fs-4 fw-bold text-white">20</span>
                        </div>
                        <div class="col-2 d-none d-lg-block bg-light py-2">
                            <span class="fs-5 fw-bold">2023-12-15 08:15:20</span>
                        </div>
                        <div class="col-2 col-lg-1 bg-white py-2 d-grid">
                            
                                <button id="pb<?php echo $selected_data['id']; ?>" class="btn btn-danger">Block</button>
                            

                            ?>
                        </div>
                    </div>
                </div>

                <!-- modal 01 -->
                <div class="modal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title fw-bold text-success">Apple iPhone 12</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="offset-4 col-4">
                                    <img src="resource/mobile_images/iphone12.jpg" class="img-fluid" style="height: 150px;" />
                                </div>
                                <div class="col-12">
                                    <span class="fs-5 fw-bold">Price :</span>&nbsp;
                                    <span class="fs-5">Rs. 100000 .00</span><br />
                                    <span class="fs-5 fw-bold">Quantity :</span>&nbsp;
                                    <span class="fs-5">10 Products left</span><br />
                                    <span class="fs-5 fw-bold">Seller :</span>&nbsp;
                                    <span class="fs-5">Lahiru</span><br />
                                    <span class="fs-5 fw-bold">Description :</span>&nbsp;
                                    <span class="fs-5">Good Product.</span><br />
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal 01 -->

            <!--  -->
            <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-lg justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        
                                <li class="page-item active">
                                    <a class="page-link" href="#">01</a>
                                </li>
                            
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!--  -->

            <hr />

            <div class="col-12 text-center">
                <h3 class="text-black-50 fw-bold">Manage Categories</h3>
            </div>

            <div class="col-12 mb-3">
                <div class="row gap-1 justify-content-center">

                        <div class="col-12 col-lg-3 border border-danger rounded" style="height: 50px;">
                            <div class="row">
                                <div class="col-8 mt-2 mb-2">
                                    <label class="form-label fw-bold fs-5">Mobile</label>
                                </div>
                                <div class="col-4 border-start border-secondary text-center mt-2 mb-2">
                                    <label class="form-label fs-4"><i class="bi bi-trash3-fill text-danger"></i></label>
                                </div>
                            </div>
                        </div>
                    
                    <div class="col-12 col-lg-3 border border-success rounded" style="height: 50px;">
                        <div class="row">
                            <div class="col-8 mt-2 mb-2">
                                <label class="form-label fw-bold fs-5">Add new Category</label>
                            </div>
                            <div class="col-4 border-start border-secondary text-center mt-2 mb-2">
                                <label class="form-label fs-4"><i class="bi bi-plus-square-fill text-success"></i></label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- modal 2 -->
            <div class="modal" tabindex="-1" id="addCategoryModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add New Category</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12">
                                <label class="form-label">New Category Name : </label>
                                <input type="text" class="form-control" id="n"/>
                            </div>
                            <div class="col-12 mt-2">
                                <label class="form-label">Enter Your Email : </label>
                                <input type="text" class="form-control" id="e"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save New Category</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 2 -->
            <!-- modal 3 -->
            <div class="modal" tabindex="-1" id="addCategoryVerificationModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Verification</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-12 mt-3 mb-3">
                                <label class="form-label">Enter Your Verification Code : </label>
                                <input type="text" class="form-control" id="txt"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Verify & Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal 3 -->

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>