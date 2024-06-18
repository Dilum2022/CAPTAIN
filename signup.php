<?php

include  "connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
    <form class="form-signup-signup" id="signupForm" method="post" enctype="multipart/form-data">

        <h2 class="text-center mb-4 second-font">Sign Up</h2>
        <div class="mb-3">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" id="fname" name="f" class="form-control" placeholder="Enter your first name" required autofocus>
        </div>
        <div class="mb-3">
            <label for="lname" class="form-label">Last Name</label>
            <input type="text" id="lname" name="l" class="form-control" placeholder="Enter your last name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" id="email" name="e" class="form-control" placeholder="Enter your email address" required>
        </div>

        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="g">
                <?php
                $rs = Database::search("SELECT * FROM `gender`");
                $num = $rs->num_rows;

                for ($x = 0; $x < $num; $x++) {
                    $data = $rs->fetch_assoc();
                ?>
                    <option value="<?php echo $data["gender_id"]; ?>">
                        <?php echo $data["gender_name"]; ?>
                    </option>
                <?php
                }
                ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="p" class="form-control" placeholder="Enter your password" required>
        </div>

        <button class="w-100 btn btn-lg btn-dark" type="button" onclick="signup();">Sign up</button>

        <p class="mt-3 mb-3 text-muted text-center">Already have an account? <a href="./signin.php">Sign in</a></p>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2024 captain</p>
    </form>
</div>

    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/script.js"></script>

</body>

</html>