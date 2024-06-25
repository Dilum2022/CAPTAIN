<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .product-details {
            max-height: 60vh; /* Adjust as needed */
            overflow-y: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .cart-item {
            border-bottom: 1px solid #ddd;
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

      
    </style>
</head>

<body>
    <?php require_once "./includes/header.php" ?>
    <main class="container">
        <h4 class="mt-4 mb-4 font-size-large">Shopping Cart</h4>
        <div class="row">
            <div class="col-md-8">
                <!-- Left column for product details -->
                <div class="product-details">
                    <!-- Product 1 -->
                    <div class="cart-item d-flex flex-wrap align-items-center mb-3">
                        <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid me-3">
                        <div class="cart-item-details flex-grow-1">
                            <h5 class="card-title font-size-medium">Product 1</h5>
                            <p class="card-text font-size-small">Price: $19.99</p>
                            <div class="input-group w-50">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                            </div>
                        </div>
                        <div class="cart-item-actions mt-1">
                            <button class="btn btn-danger remove-item"><i class="material-symbols-outlined">
                                    delete
                                </i></button>
                        </div>
                    </div>
                    <!-- End Product 1 -->

                    <!-- Product 2 -->
                    <div class="cart-item d-flex flex-wrap align-items-center mb-3">
                        <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid me-3">
                        <div class="cart-item-details flex-grow-1">
                            <h5 class="card-title font-size-medium">Product 2</h5>
                            <p class="card-text font-size-small">Price: $29.99</p>
                            <div class="input-group w-50">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                            </div>
                        </div>
                        <div class="cart-item-actions mt-1">
                            <button class="btn btn-danger remove-item"><i class="material-symbols-outlined">
                                    delete
                                </i></button>
                        </div>
                    </div>
                    <!-- End Product 2 -->

                    <!-- Product 3 -->
                    <div class="cart-item d-flex flex-wrap align-items-center mb-3">
                        <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid me-3">
                        <div class="cart-item-details flex-grow-1">
                            <h5 class="card-title font-size-medium">Product 3</h5>
                            <p class="card-text font-size-small">Price: $39.99</p>
                            <div class="input-group w-50">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                            </div>
                        </div>
                        <div class="cart-item-actions mt-1">
                            <button class="btn btn-danger remove-item"><i class="material-symbols-outlined">
                                    delete
                                </i></button>
                        </div>
                    </div>
                    <!-- End Product 3 -->

                    <!-- Product 4 -->
                    <div class="cart-item d-flex flex-wrap align-items-center mb-3">
                        <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid me-3">
                        <div class="cart-item-details flex-grow-1">
                            <h5 class="card-title font-size-medium">Product 4</h5>
                            <p class="card-text font-size-small">Price: $49.99</p>
                            <div class="input-group w-50">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                            </div>
                        </div>
                        <div class="cart-item-actions mt-1">
                            <button class="btn btn-danger remove-item"><i class="material-symbols-outlined">
                                    delete
                                </i></button>
                        </div>
                    </div>
                    <!-- End Product 4 -->

                    <!-- Product 5 -->
                    <div class="cart-item d-flex flex-wrap align-items-center mb-3">
                        <img src="https://via.placeholder.com/150" alt="Product Image" class="img-fluid me-3">
                        <div class="cart-item-details flex-grow-1">
                            <h5 class="card-title font-size-medium">Product 5</h5>
                            <p class="card-text font-size-small">Price: $59.99</p>
                            <div class="input-group w-50">
                                <input type="number" class="form-control quantity-input" value="1" min="1">
                            </div>
                        </div>
                        <div class="cart-item-actions mt-1">
                            <button class="btn btn-danger remove-item"><i class="material-symbols-outlined">
                                    delete
                                </i></button>
                        </div>
                    </div>
                    <!-- End Product 5 -->
                </div>
                <!-- End Left column -->
            </div>
            <div class="col-md-4">
                <!-- Right column for total and checkout button -->
                <div class="fixed-right-column">
                    <div class="card mb-4 w-100">
                        <div class="card-body">
                            <h5 class="card-title font-size-medium">Cart Total</h5>
                            <p class="fs-5 font-size-medium">Total: $219.95</p>
                            <p class="fs-5 font-size-medium">Delivery Fee: $5.00</p>
                            <hr>
                            <p class="cart-total font-size-large">Total Price: $224.95</p>
                            <button class="btn btn-dark btn-block">Checkout</button>
                        </div>
                    </div>
                </div>
                <!-- End Right column -->
            </div>
        </div>
    </main>
    <?php require_once "./includes/footer.php" ?>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script>
        $(document).ready(function () {
            // Update quantity button click event
            $(".update-quantity").click(function () {
                var quantity = $(this).closest(".cart-item").find(".quantity-input").val();
                // Update quantity logic here
                console.log("Quantity updated to: " + quantity);
            });

            // Remove item button click event
            $(".remove-item").click(function () {
                var confirmation = confirm("Are you sure you want to remove this item from the cart?");
                if (confirmation) {
                    // Remove item logic here
                    $(this).closest(".cart-item").remove();
                }
            });
        });
    </script>
</body>

</html>
