<?php
session_start();
require_once "connect.php";


if (isset($_POST['consultNow']) && isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $doctorId = $_POST['doctorId'];
    $problem = $_POST['problem'];
    $petOwner = $_POST['petOwner'];
    $phoneNumber = $_POST['phoneNumber'];
    $status = "pending";

    if (mysqli_query($conn, "INSERT INTO consult_doctor(doctorId, userId, problem ,petOwner, phoneNumber, status) VALUES('" . $doctorId . "', '" . $userId . "', '" . $problem . "', '" . $petOwner . "', '" . $phoneNumber . "', '" . $status . "')")) {
        // Redirect to confirmation page
        header("Location: consult-doctor.php?consulted=true");
        exit();
    }
}
mysqli_close($conn);
