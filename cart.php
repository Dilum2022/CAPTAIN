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
        <div class="row">
            <div class="col-md-8">
                <!-- Left column for product details -->
                <div class="col-md-10 product-details">
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- Product 1 -->
                            <div class="cart-item">
                                <img src="https://via.placeholder.com/150" alt="Product Image">
                                <div class="cart-item-details">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Price: $19.99</p>
                                    <div class="input-group">
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

                            <!-- Repeat the above structure for each product in the cart -->

                        </div>
                    </div>
                </div>
                <div class="col-md-10 product-details">
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- Product 1 -->
                            <div class="cart-item">
                                <img src="https://via.placeholder.com/150" alt="Product Image">
                                <div class="cart-item-details">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Price: $19.99</p>
                                    <div class="input-group">
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

                            <!-- Repeat the above structure for each product in the cart -->

                        </div>
                    </div>
                </div>
                <div class="col-md-10 product-details">
                    <div class="card mb-4">
                        <div class="card-body">
                            <!-- Product 1 -->
                            <div class="cart-item">
                                <img src="https://via.placeholder.com/150" alt="Product Image">
                                <div class="cart-item-details">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Price: $19.99</p>
                                    <div class="input-group">
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

                            <!-- Repeat the above structure for each product in the cart -->

                        </div>
                    </div>
                </div>
                <!-- End Left column -->
            </div>
            <div class="col-md-4">
                <!-- Right column for total and checkout button -->
                <div class="col-12 d-flex align-items-start fixed-right-column">
                    <div class="card mb-4  w-100">
                        <div class="card-body">
                            <h5 class="card-title">Cart Total</h5>
                            <p class="fs-5">Total: $19.99</p>
                            <p class="fs-5">Delivery Fee: $5.00</p>
                            <hr>
                            <p class="cart-total">Total Price: $24.99</p>
                            <button class="btn btn-success btn-block">Checkout</button>
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
        $(document).ready(function() {
            // Update quantity button click event
            $(".update-quantity").click(function() {
                var quantity = $(this).closest(".cart-item").find(".quantity-input").val();
                // Update quantity logic here
                console.log("Quantity updated to: " + quantity);
            });

            // Remove item button click event
            $(".remove-item").click(function() {
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