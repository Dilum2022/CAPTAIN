<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPTAIN</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <!-- Custom CSS (if any) -->
    <style>
        /* Ensure the body is hidden until the CSS is loaded to prevent FOUC */
        body {
            visibility: hidden;
        }

        body.loaded {
            visibility: visible;
        }
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
                    <li class="nav-item">
                        <a class="nav-link" href="categorypage.php">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorypage.php">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorypage.php">Kids</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categorypage.php">Sport</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="material-icons-outlined">shopping_cart</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="material-icons-outlined">favorite</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="material-icons-outlined">person</i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Offcanvas Navbar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="categorypage.php">Men</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorypage.php">Women</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorypage.php">Kids</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="categorypage.php">Sport</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="material-icons-outlined">shopping_cart</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="material-icons-outlined">favorite</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="material-icons-outlined">person</i></a>
                </li>
            </ul>
        </div>
    </div>
</header>

<!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
<script>
    // Ensure the body is visible only after the CSS is loaded
    window.addEventListener('load', function() {
        document.body.classList.add('loaded');
    });
</script>
</body>
</html>
