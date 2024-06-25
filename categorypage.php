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
            <div class="col-lg-3 filter-section d-none d-lg-block">
                <div>
                    <label class="font-size-medium mt-2">Filter</label>
                    <!-- Filter options -->
                    <div class="form-group mt-2">
                        <label for="category" class="font-size-small">Category:</label>
                        <select class="form-control" id="category">
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                            <option>Sport</option>
                        </select>
                    </div>
                    <!-- Sorting options -->
                    <div class="form-group mt-2">
                        <label for="size" class="font-size-small">Size</label>
                        <select class="form-control" id="size">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="color" class="font-size-small">Color</label>
                        <select class="form-control" id="color">
                            <option>Black</option>
                            <option>White</option>
                            <option>Red</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="price" class="font-size-small">Price</label>
                        <select class="form-control filter-input" id="price">
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                    <label for="customRange1" class="form-label mt-2">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                    <button class="btn btn-dark mt-2">Filter</button>
                </div>
            </div>

            <!-- Filter Button for Mobile View -->
            <div class="col-12 d-lg-none text-right mb-2">
                <button type="button" class="btn " data-toggle="modal" data-target="#exampleModal">
                    <img src="image\icon\filter.png" alt="" class="filter_icon">
                    <b>Filter</b>
                </button>
            </div>

            <!-- Product Display Section -->
            <div class="col-lg-9">
                <div class="container-fluid mt-1">
                    <label class="font-size-medium mt-0">Mens</label>
                    <img src="image/category/The_Classic_T-Shirt_Styles_for_Men.webp" class="img-fluid" alt="..." width="100%">
                </div>
                <div class="product-section">
                    <div class="row">
                        <!-- Product Cards -->
                        <div class="container">
                            <h4 class="mt-4 mb-4 font-size-medium">New Arrival</h4>
                            <div class="row">
                                <div class="col-md-3 col-6 mb-4">
                                    <div class="card">
                                        <a href="singleProductView.php">
                                            <img src="image/t shirt/tshirt3.jpg" class="card-img-top" alt="Product Image">
                                            <div class="card-body">
                                                <h5 class="product-name font-size-small">Blue Acid Wash Sleeveless</h5>
                                        </a>
                                        <p class="card-text">$19.99</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-6 mb-4">
                                <div class="card">
                                    <a href="singleProductView.php">
                                        <img src="image/t shirt/tshirt4.jpg" class="card-img-top" alt="Product Image">
                                        <div class="card-body">
                                            <h5 class="product-name font-size-small">Captain T-shirt Men</h5>
                                    </a>
                                    <p class="card-text">$19.99</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-4">
                            <div class="card">
                                <a href="singleProductView.php">
                                    <img src="image/t shirt/SLASHER-Website-1_22163099-9b7e-43c8-963a-05176dfbe4b8.webp" class="card-img-top" alt="Product Image">
                                    <div class="card-body">
                                        <h5 class="product-name font-size-small">Captain T-shirt Men</h5>
                                </a>
                                <p class="card-text">$19.99</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="card">
                            <a href="singleProductView.php">
                                <img src="image/t shirt/tshirt6.webp" class="card-img-top" alt="Product Image">
                                <div class="card-body">
                                    <h5 class="product-name font-size-small">Captain T-shirt Men</h5>
                            </a>
                            <p class="card-text">$19.99</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Filter</b></h5>

                </div>
                <div class="modal-body">

                    <div class="form-group mt-1">
                        <label for="category" class="font-size-small">Category:</label>
                        <select class="form-control" id="category">
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                            <option>Sport</option>
                        </select>
                    </div>
                    <!-- Sorting options -->
                    <div class="form-group mt-1">
                        <label for="size" class="font-size-small">Size</label>
                        <select class="form-control" id="size">
                            <option>Small</option>
                            <option>Medium</option>
                            <option>Large</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <label for="color" class="font-size-small">Color</label>
                        <select class="form-control" id="color">
                            <option>Black</option>
                            <option>White</option>
                            <option>Red</option>
                        </select>
                    </div>
                    <div class="form-group mt-1">
                        <label for="price" class="font-size-small">Price</label>
                        <select class="form-control filter-input" id="price">
                            <option>Newest</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select>
                    </div>
                    <label for="customRange1" class="form-label mt-1">Example range</label>
                    <input type="range" class="form-range" id="customRange1">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button class="btn btn-dark mt-2">Filter</button>
                </div>
            </div>





        </div>
    </div>
    </div>



    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>