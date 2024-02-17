<?php
session_start();
require_once "connect.php";
if (isset($_GET['email']) && isset($_GET['token'])) {
    $email = $_GET['email'];
    $token = $_GET['token'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "' and confirmation_code = '" . $token . "'");
    if ($row = mysqli_fetch_array($result)) {
        $user_id = $row['user_id'];
        if ($row['confirmed'] === '0') {
            $confirmed = 1;
            mysqli_query($conn, "UPDATE users SET confirmed = $confirmed WHERE user_id = $user_id");
            header("Location: login.php?verified=true");
        } else {
            header("Location: login.php");
        }
    } else {
        $error_message = "Incorrect Email or Password!";
        header("Location: login.php");
    }
}
