<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
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
        <form class="form-signup-signup">
            <h2 class="text-center mb-4">Sign Up</h2>
            <div class="mb-3">
                <label for="inputName" class="form-label">Full Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="Enter your full name" required autofocus>
            </div>
            <div class="mb-3">
                <label for="inputEmail" class="form-label">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter your email address" required>
            </div>
            <div class="mb-3">
                <label for="inputPassword" class="form-label">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Enter your password" required>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign up</button>
            <p class="mt-3 mb-3 text-muted text-center">Already have an account? <a href="./signin.php">Sign in</a></p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2024 captain</p>
        </form>
    </div>

    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>
