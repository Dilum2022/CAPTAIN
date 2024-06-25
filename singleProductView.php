<?php
require_once './connection.php';

// Get the product ID from the URL
$product_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($product_id > 0) {
    // Fetch the product details from the database
    $query = "SELECT p.name, p.description, p.price, i.image_path
              FROM product p
              JOIN image i ON p.image_image_id = i.image_id
              WHERE p.id = $product_id";
    $result = Database::search($query);

    if ($result && $result->num_rows > 0) {
        $product = $result->fetch_assoc();
    } else {
        echo "Product not found!";
        exit;
    }
} else {
    echo "Invalid product ID!";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($product['name']); ?> - Single Product View</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .product-image {
            width: 50%;
            height: 400px; /* Adjust product image height */
            object-fit: cover; /* Ensure the image fits the container */
        }

        @media (max-width: 767.98px) {
            .product-image {
                width: 100%;
                height: auto; /* Adjust product image height for mobile */
            }
        }

        .size-options .btn {
            margin-right: 5px;
            margin-bottom: 5px;
        }

        .size-options {
            margin-top: 15px;
        }

        #quantity {
            width: 100px;
        }

        main {
            border: 1px solid black; /* Add black border */
            margin: 20px; /* Set margin */
            padding: 20px; /* Set padding */
        }
    </style>
</head>

<body>
    <?php require_once "./includes/header.php"; ?>
    <main>
        <div class="container">
            <div aria-label="breadcrumb ">
                <ol class="breadcrumb px-3 mt-2">
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">T-shirts</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($product['name']); ?></li>
                </ol>
            </div>
            <div class="row mt-2 mb-3">
                <div class="col-md-6">
                    <div class="col-12 d-flex justify-content-center">
                        <img id="mainImage" src="<?php echo htmlspecialchars($product['image_path']); ?>" alt="Product Image" class="product-image">
                    </div>
                </div>

                <div class="col-md-6">
                    <h2><b><?php echo htmlspecialchars($product['name']); ?></b></h2>
                    <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                    <p class="lead">$<?php echo htmlspecialchars($product['price']); ?></p>
                    <form>
                        <div class="mb-3">
                            <label for="quantity">Quantity:</label>
                            <input type="number" id="quantity" name="quantity" class="form-control" value="1" min="1">
                        </div>

                        <div class="size-options">
                            <h6 class="text-uppercase">Size</h6>
                            <button type="button" class="btn btn-outline-dark">Small</button>
                            <button type="button" class="btn btn-outline-dark">Medium</button>
                            <button type="button" class="btn btn-outline-dark">Large</button>
                            <button type="button" class="btn btn-outline-dark">Extra Large</button>
                        </div>
                        <div class="d-flex mt-5">
                            <button type="submit" class="btn btn-outline-success">Add to Cart</button>
                            <button type="button" class="btn btn-dark mx-2">Buy Now</button>
                            <button type="button" class="btn btn-danger fs-5 d-flex justify-content-center align-items-center mx-3">
                                <i class="material-symbols-outlined">favorite</i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <div class="row mt-5">
        <?php require_once "./includes/footer.php"; ?>
    </div>

    <script src="./assets/js/bootstrap.min.js"></script>
</body>
</html>
a