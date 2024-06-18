<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        body {
            background-color: #ffffff;
            color: #000000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-2 mt-4 captain">CAPTAIN</h2>
        <form id="signinForm" class="form-signup-signup" onsubmit="return false;">
            <h2 class="text-center mb-4 second-font">Sign In</h2>
            <label for="inputEmail" class="form-label">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control mb-3" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" id="rememberMe" name="rememberMe" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="button" onclick="signin();">Sign in</button>
            <p class="mt-3 mb-3 text-muted text-center">Create a new account <a href="./signup.php">Signup</a></p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2024 captain</p>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal" id="responseModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign In Response</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalBodyText"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>