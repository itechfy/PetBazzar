<?php
session_start();
require_once "connect.php";
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '" . $uid. "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $user_id = $row['user_id'];
            mysqli_query($conn, "DELETE FROM users WHERE user_id = $user_id");  
            header("Location: adminpanel.php");
        }
    }
}
?>
