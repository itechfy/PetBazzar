<?php
session_start();
require_once "connect.php";


if (isset($_POST['status'])) {

    $user_id = $_POST['userId'];
    $status = $_POST['status'];

    if (mysqli_query($conn, "UPDATE consult_doctor SET status = '$status' WHERE userId = $user_id")) {
        // Redirect to confirmation page
        header("Location:consultationRequests.php");
        exit();
    }
}
mysqli_close($conn);
