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

<!-- modal -->

<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
    <script src="./assets/js/bootstrap.min.js"></script>
</body>

</html>