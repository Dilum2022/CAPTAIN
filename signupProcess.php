<?php

include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST["f"] ?? null;
    $lname = $_POST["l"] ?? null;
    $email = $_POST["e"] ?? null;
    $gender = $_POST["g"] ?? null;
    $password = $_POST["p"] ?? null;

    if (empty($fname)) {
        echo "Please Enter Your First Name.";
    } else if (strlen($fname) > 50) {
        echo "First Name Must Contain LOWER THAN 50 characters.";
    } else if (empty($lname)) {
        echo "Please Enter Your Last Name.";
    } else if (strlen($lname) > 50) {
        echo "Last Name Must Contain LOWER THAN 50 characters.";
    } else if (empty($email)) {
        echo "Please Enter Your Email Address.";
    } else if (strlen($email) > 100) {
        echo "Email Address Must Contain LOWER THAN 100 characters.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid Email Address.";
    } else if (empty($password)) {
        echo "Please Enter Your Password.";
    } else if (strlen($password) < 5 || strlen($password) > 20) {
        echo "Password Must Contain 5 to 20 Characters.";
    } else {
        $rs = Database::search("SELECT * FROM `user` WHERE `email`='" . $email . "'");
        $n = $rs->num_rows;

        if ($n > 0) {
            echo "User with the same Email Address already exists.";
        } else {
            $d = new DateTime();
            $tz = new DateTimeZone("Asia/Colombo");
            $d->setTimezone($tz);
            $date = $d->format("Y-m-d H:i:s");

            Database::iud("INSERT INTO `user`
            (`fname`,`lname`,`email`,`gender_gender_id`,`password`,`joined_date`,`status_status_id`) VALUES 
            ('".$fname."','".$lname."','".$email."','".$gender."','".$password."','".$date."','1')");

            echo "success";
        }
    }
}
?>
