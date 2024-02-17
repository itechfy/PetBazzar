<?php
session_start();
if (isset($_SESSION['typ']) !== 'Admin') {
    session_destroy();
    header("Location: login.php");
}
require_once "connect.php";
if (isset($_GET['order_no'])) {
    $order_no = $_GET['order_no'];
    $status = "delivered";

    $result = mysqli_query($conn, "SELECT * FROM orders WHERE order_no = '" . $order_no . "'");
    if (!empty($result)) {
        if ($row = mysqli_fetch_array($result)) {
            $user_id = $row['user_id'];
            mysqli_query($conn, "UPDATE orders SET status = '$status' WHERE order_no = '$order_no'");
            header("Location: admin/pages/orders.php");
        }
    }
}
