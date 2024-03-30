<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Name - Single Product View</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php require_once "./includes/header.php" ?>

    <div class="container-fluid">
        <div class="row">
            <!-- Filter and Sorting Section -->
             <div class="col-lg-3 ">
                <div class="filter-section">
                    <h2>Filter</h2>
                    <!-- Filter options -->
                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select class="form-control" id="category">
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                            <option>Sport</option>
                        </select>
                    </div>
                    <!-- Sorting options -->
                    <div class="form-group">
                        <label for="sorting">Sort By:</label>
                        <select class="form-control" id="sorting">
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="sorting">Sort By:</label>
                        <select class="form-control" id="sorting">
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="sorting">Sort By:</label>
                        <select class="form-control" id="sorting">
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>



                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                </div>
            </div>

            <!-- Product Display Section -->
            <div class="col-lg-9">


                <div class="container-fluid">
                
                    <img src="image\category\The_Classic_T-Shirt_Styles_for_Men.webp" class="" alt="..." width="100%">
                </div>
                <div class="product-section">
                    <div class="row">
                        <!-- Product Cards -->
                        <div class="container-fluid">
                        <h4 class="mt-4 mb-4 second-font">New Arrival</h4>
                            <div class="row">
                                <div class="col-md-3 col-6 mb-4">
                                    <div class="card">
                                        <a href="#">
                                            <img src="image/t shirt/tshirt3.jpg" class="card-img-top" alt="Product Image">
                                            <div class="card-body">
                                                <h5 class="product-name">Blue Acid Wash Sleeveless</h5>
                                        </a>
                                        <p class="card-text">$19.99</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-6 mb-4">
                                <div class="card">
                                    <a href="#">
                                        <img src="image/t shirt/tshirt4.jpg" class="card-img-top" alt="Product Image">
                                        <div class="card-body">
                                            <h5 class="product-name">Captain T-shirt Men</h5>
                                    </a>
                                    <p class="card-text">$19.99</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-6 mb-4">
                            <div class="card">
                                <a href="#">
                                    <img src="image\t shirt\SLASHER-Website-1_22163099-9b7e-43c8-963a-05176dfbe4b8.webp" class="card-img-top" alt="Product Image">
                                    <div class="card-body">
                                        <h5 class="product-name">Captain T-shirt Men</h5>
                                </a>
                                <p class="card-text">$19.99</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 col-6 mb-4">
                        <div class="card">
                            <a href="#">
                                <img src="image/t shirt/tshirt6.webp" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="product-name">Captain T-shirt Men</h5>
                            </a>
                            <p class="card-text">$19.99</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Repeat product cards for each product -->
    </div>
    </div>
    </div>
    </div>
    </div>

</body>

</html>