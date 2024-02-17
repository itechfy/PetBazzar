<?php
session_start();
require_once "connect.php";
if (isset($_GET['pet_id']) && isset($_GET['user_id'])) {
    $pet_id = $_GET['pet_id'];
    $user_id = $_GET['user_id'];

    $result = mysqli_query($conn, "SELECT * FROM pets WHERE pet_id = '" . $pet_id . "' AND user_id = '" . $user_id . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $id = $row['pet_id'];
            mysqli_query($conn, "DELETE FROM pets WHERE pet_id = $id");
            header("Location: myPetAds.php");
        }
    }
}
