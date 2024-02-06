<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Selling History | Admins | eShop</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resource/logo.svg" />
</head>

<body style="background-color: #74EBD5;background-image: linear-gradient(90deg,#74EBD5 0%,#9FACE6 100%);">

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 bg-light text-center">
                <label class="form-label text-primary fw-bold fs-1">Selling History</label>
            </div>

            <div class="col-12 bg-light mt-3 mb-3">
                <div class="row">
                    <div class="col-12 col-lg-3 mt-3 mb-3">
                        <label class="form-label fs-5">Search by Invoice ID : </label>
                        <input type="text" class="form-control fs-5"/>
                    </div>
                    <div class="col-12 col-lg-2 mt-3 mb-3"></div>
                    <div class="col-12 col-lg-3 mt-3 mb-3">
                        <label class="form-label fs-5">From Date : </label>
                        <input type="date" class="form-control fs-5"/>
                    </div>
                    <div class="col-12 col-lg-3 mt-3 mb-3">
                        <label class="form-label fs-5">To Date : </label>
                        <input type="date" class="form-control fs-5"/>
                    </div>
                    <div class="col-12 col-lg-1 mt-3 mb-3 d-grid">
                        <button class="btn btn-primary fs-5 fw-bold">Find</button>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="row">

                    <div class="col-1 bg-secondary text-end">
                        <label class="form-label fs-5 fw-bold text-white">Invoice ID</label>
                    </div>
                    <div class="col-3 bg-body text-end">
                        <label class="form-label fs-5 fw-bold text-black">Product</label>
                    </div>
                    <div class="col-3 bg-secondary text-end">
                        <label class="form-label fs-5 fw-bold text-white">Buyer</label>
                    </div>
                    <div class="col-2 bg-body text-end">
                        <label class="form-label fs-5 fw-bold text-black">Amount</label>
                    </div>
                    <div class="col-1 bg-secondary text-end">
                        <label class="form-label fs-5 fw-bold text-white">Quantity</label>
                    </div>
                    <div class="col-2 bg-white"></div>

                </div>
            </div>

            <div class="col-12 mt-2">
                
                    <div class="row">

                        <div class="col-1 bg-secondary text-end">
                            <label class="form-label fs-5 fw-bold text-white mt-1 mb-1">01</label>
                        </div>
                        <div class="col-3 bg-body text-end">
                            <label class="form-label fs-5 fw-bold text-black mt-1 mb-1">Apple iPhone 12</label>
                        </div>
                        <div class="col-3 bg-secondary text-end">
                            <label class="form-label fs-5 fw-bold text-white mt-1 mb-1">Sahan Perera</label>
                        </div>
                        <div class="col-2 bg-body text-end">
                            <label class="form-label fs-5 fw-bold text-black mt-1 mb-1">Rs. 100000 .00</label>
                        </div>
                        <div class="col-1 bg-secondary text-end">
                            <label class="form-label fs-5 fw-bold text-white mt-1 mb-1">1</label>
                        </div>
                        <div class="col-2 bg-white d-grid">
                                <button class="btn btn-success fw-bold mt-1 mb-1">Confirm Order</button>
                        </div>

                    </div>
                
                <!--  -->
                <div class="offset-2 offset-lg-3 col-8 col-lg-6 text-center mb-3 mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-lg justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
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
            </div>

        </div>
    </div>

    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>

</html>