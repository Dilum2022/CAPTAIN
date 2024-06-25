<?php
require_once './connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPTAIN</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <style>
        body { visibility: hidden; }
        body.loaded { visibility: visible; }
        .search-bar { width: 100%; max-width: 600px; border-radius: 0; }
        .search-button { border-radius: 0; }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand captain" href="./">CAPTAIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav d-lg-flex align-items-center mx-auto">
                        <?php
                        $category_rs = Database::search("SELECT * FROM `category`");
                        while ($category_data = $category_rs->fetch_assoc()) {
                            echo '<li class="nav-item"><a class="nav-link" href="categorypage.php?category=' . htmlspecialchars($category_data["category_name"]) . '">' . htmlspecialchars($category_data["category_name"]) . '</a></li>';
                        }
                        ?>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="cart.php"><i class="material-icons-outlined">shopping_cart</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="watchlist.php"><i class="material-icons-outlined">favorite</i></a></li>
                        <li class="nav-item"><a class="nav-link" href="signin.php"><i class="material-icons-outlined">person</i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="bg-light py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <form class="d-flex">
                            <input class="form-control me-2 search-bar" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-dark search-button" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <?php
                    $category_rs->data_seek(0);
                    while ($category_data = $category_rs->fetch_assoc()) {
                        echo '<li class="nav-item"><a class="nav-link" href="categorypage.php?category=' . htmlspecialchars($category_data["category_name"]) . '">' . htmlspecialchars($category_data["category_name"]) . '</a></li>';
                    }
                    ?>
                    <li class="nav-item"><a class="nav-link" href="cart.php"><i class="material-icons-outlined">shopping_cart</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="watchlist.php"><i class="material-icons-outlined">favorite</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="signin.php"><i class="material-icons-outlined">person</i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.body.classList.add('loaded');
        });
    </script>
</body>
</html>
