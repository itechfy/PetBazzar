<?php
session_start();
require_once "connect.php";
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];

    $result = mysqli_query($conn, "SELECT * FROM products WHERE id = '" . $uid . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $id = $row['id'];
            mysqli_query($conn, "DELETE FROM products WHERE id = $id");
            header("Location: admin/pages/products.php");
        }
    }
}
