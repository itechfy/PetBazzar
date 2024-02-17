<?php
session_start();
if (isset($_SESSION['typ']) !== 'Admin') {
    session_destroy();
    header("Location: login.php");
}
require_once "connect.php";
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $status = "Enabled";

    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '" . $uid . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $user_id = $row['user_id'];
            mysqli_query($conn, "UPDATE users SET status = '$status' WHERE user_id = $user_id");
            header("Location: adminpanel.php");
        }
    }
}
