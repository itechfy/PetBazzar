<?php
session_start();
require_once "connect.php";
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];

    $result = mysqli_query($conn, "SELECT * FROM pets WHERE pet_id = '" . $uid . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $id = $row['pet_id'];
            mysqli_query($conn, "DELETE FROM pets WHERE pet_id = $id");
            header("Location: admin/pages/totalPets.php");
        }
    }
}
