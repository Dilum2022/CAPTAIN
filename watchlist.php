<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchlist</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php require_once "./includes/header.php" ?>
    <main>
        <div class="container">
            <h4 class="mt-4 mb-4">My Wishlist</h4>
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <div class="card">
                        <a href="./singleProductView.php">
                            <img src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/200367237--1--1681979167.jpeg" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title">Blue Acid Wash Sleeveless Shirt</h5>
                        </a>
                        <p class="card-text">$19.99</p>
                        <a href="#" class="btn btn-danger"><i class="material-symbols-outlined">
                                delete
                            </i></a>
                    </div>
                </div>

            </div>
            <div class="col-md-3 col-6 mb-4">

                    <div class="card">
                    <a href="./singleProductView.php">
                        <img src="https://th.bing.com/th/id/R.33172a65f3f64a5c59d43b61161e1ecd?rik=vlk5Xy4aFbXQmw&pid=ImgRaw&r=0" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Blue Acid Wash Sleeveless Shirt</h5>
                            </a>
                            <p class="card-text">$19.99</p>
                            <a href="#" class="btn btn-danger"><i class="material-symbols-outlined">
                                    delete
                                </i></a>
                        </div>
                    </div>
             
            </div>
        </div>
        <div class="row d-none">
            <div style="padding-block: 100px;">
                <div class="alert alert-info" role="alert">
                    Your wishlist is currently empty.
                </div>
                <a href="./"><button class="btn-dark btn col-md-4 col-6 offset-3 offset-md-4">Start Shopping</button></a>
            </div>
        </div>
        </div>
    </main>
    <?php require_once "./includes/footer.php" ?>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>