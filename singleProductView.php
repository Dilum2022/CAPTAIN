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
    <main>
        <div class="container">
            <div aria-label="breadcrumb ">
                <ol class="breadcrumb px-3 mt-2">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">T-shirts</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blue Acid Wash Sleeveless Shirt</li>
                </ol>
            </div>
            <div class="row mt-2 mb-3">
                <div class="col-md-6">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="mainImage" src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/200367237--1--1681979167.jpeg" alt="Product Image" class="product-image">
                    </div>
                    <div class="col-12">
                        <div class="row mt-4">
                            <div class="col">
                                <div class="thumbnail-images">
                                    <img src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/200367237--1--1681979167.jpeg" alt="Thumbnail Image" class="thumbnail-image" onclick="changeImage(this)">
                                    <img src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/200367237--2--1681979170.jpeg" alt="Thumbnail Image" class="thumbnail-image" onclick="changeImage(this)">
                                    <img src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/200367237--3--1681979172.jpeg" alt="Thumbnail Image" class="thumbnail-image" onclick="changeImage(this)">
                                    <img src="https://objectstorage.ap-mumbai-1.oraclecloud.com/n/softlogicbicloud/b/cdn/o/products/400-600/199919611--2--1682051343.jpeg" alt="Thumbnail Image" class="thumbnail-image" onclick="changeImage(this)">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-6">
                    <h2>Blue Acid Wash Sleeveless Shirt</h2>
                    <p class="lead">$19.99</p>
                    <p class="product-description">Machine wash cold, color may transfer
                        Wash separately
                        Do not bleach
                        Low iron
                        Tumble dry or flat dry in shade</p>
                    <form>
                        <div class="mb-3">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                        </div>
                        <div class="d-flex">
                        <button type="submit" class="btn btn-dark">Add to Cart</button>
                        <button onclick="">buy now</button>
                        <button type="submit" class="btn btn-dark fs-5 d-flex justify-content-center align-items-center mx-3"><i class="material-symbols-outlined">
                                favorite
                            </i></button>
                        </div>
                    
                    </form>
                </div>
            </div>

        </div>
    </main>
    <?php require_once "./includes/footer.php" ?>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script>
        function changeImage(element) {
            var mainImage = document.getElementById('mainImage');
            mainImage.src = element.src;
        }
    </script>
</body>

</html>