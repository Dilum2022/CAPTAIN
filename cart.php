<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <?php require_once "./includes/header.php" ?>
    <main class="container">
        <h4 class="mt-4 mb-4">Shopping Cart</h4>
        <div class="card">
            <div class="card-body">
                <div class="cart-item">
                    <img src="https://via.placeholder.com/150" alt="Product Image">
                    <div class="cart-item-details">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Price: $19.99</p>
                        <p class="card-text">Quantity: 1</p>
                    </div>
                    <div class="cart-item-actions">
                        <button class="btn btn-danger">Remove</button>
                    </div>
                </div>
                <!-- Repeat the cart item structure for each item in the cart -->
            </div>
        </div>
        <!-- Cart total -->
        <div class="cart-total mt-4">
            Total: $19.99
        </div>
    </main>
    <?php require_once "./includes/footer.php" ?>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>