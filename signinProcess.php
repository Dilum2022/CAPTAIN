<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST["email"] ?? null;
    $password = $_POST["password"] ?? null;
    $rememberMe = $_POST["rememberMe"] ?? false;

    if (empty($email)) {
        echo "Please enter your email address.";
    } else if (empty($password)) {
        echo "Please enter your password.";
    } else {
        $email = $connection->real_escape_string($email);
        $password = $connection->real_escape_string($password);

        $result = Database::search("SELECT * FROM `user` WHERE `email`='$email'");
        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                session_start();
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_fname'] = $user['fname'];
                
                if ($rememberMe) {
                    setcookie("user_id", $user['user_id'], time() + (86400 * 30), "/");
                }
                
                echo "Sign-in successful. Welcome, " . $user['fname'] . "!";
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No account found with that email address.";
        }
    }
}
?>
