<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
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
            <h2 class="text-center mb-4">Sign In</h2>
            <label for="inputEmail" class="visually-hidden">Email address</label>
            <input type="email" id="inputEmail" class="form-control mb-3" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="visually-hidden">Password</label>
            <input type="password" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-dark" type="submit">Sign in</button>
            <p class="mt-3 mb-3 text-muted text-center">Create a new account<a href="./signup.php">Signup</a></p>
            <p class="mt-5 mb-3 text-muted text-center">&copy; 2024 captain</p>
        </form>
    </div>

    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>