<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Elixar - Products</title>

    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="resouces/images/logo.png" />
</head>

<body class="body">

    <div class="container-fluid">
        <div class="row"></div>
        <?php include "header.php" ?>

        <div class="container txt">
            <h2 class="text-decoration-underline fw-bold title mb-3 mt-3">Our Products</h2>
            <p>In our store, we offer a wide range of organic and ethically sourced coconut products from Sri Lanka. Whether you
                are looking for coconut water, coconut oil, coconut milk, coconut milk powder, coconut butter or more, we have it all.
                Browse our products below and order online today.
            </p>
            <!-- Search bar -->
            <div class="col-12 col-lg-7 justify-content-center ">
                <div class="row">
                    <div class="input-group mb-3 mt-2 offset-4">
                        <input type="text" class="form-control" placeholder="Search..." aria-label="Text input with dropdown button" />
                        <button class="btn btn-outline-success" type="button" id="button-addon2">Search</button>
                    </div>
                </div>
            </div>

            <!-- Product cards -->
            <div class="row justify-content-center gap-3 mb-3">
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/water2.webp" class="card-img-top mt-5 mb-5" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Water (1l)</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 1500.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/water3.png" class="card-img-top mt-5 mb-5" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Water (500ml)</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 800.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/water4.png" class="card-img-top mt-5 mb-5" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Water (350ml)</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 600.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gap-3 mb-3">
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/oil2.png" class="card-img-top" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Oil (500ml)</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 600.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/butter2.png" class="card-img-top mt-5 mb-5 mx-4" style="width: 190px;" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Butter</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 1200.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/milkp2.webp" class="card-img-top mt-5 mb-5" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Milk (400ml)</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 800.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gap-3 mb-3">
                <div class="card col-6 col-lg-2 mt-2 mb-2 border-2 border-success" style="width: 18rem; background-color: rgb(169, 224, 173);">
                    <img src="resouces/images/milkp3.png" class="card-img-top" style="width: 200px;" />
                    <hr />
                    <div class="card-body ms-0 m-0">
                        <label class="card-title fs-5 text-center">Coconut Milk Powder</label>
                        <p class="card-text text-success fw-bold fs-6">Rs. 1000.00</p>
                        <a href="#" class="btn btn-secondary">View Details</a>
                    </div>
                </div>
            </div>

        </div>

        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
</body>

</html>