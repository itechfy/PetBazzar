<?php
require_once "connect.php";

$order_no = $_POST['order_no'];
$ordered_on = $_POST['ordered_on'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$country = $_POST['country'];
$city = $_POST['city'];
$pet_nickname = $_POST['pet_nickname'];
$other_city = $_POST['other_city'];
$address = $_POST['address'];
$additional_info = $_POST['additional_info'];
$ordered_items = $_POST['ordered_items'];
$bill = $_POST['bill'];
$status = "pending";
$orderType = 'cashOnDelivery';


if (mysqli_query($conn, "INSERT INTO orders(order_no, ordered_on, name ,email, phone, country, city,pet_nickname,other_city,address,additional_info,ordered_items,bill,status,order_type) VALUES('" . $order_no . "', '" . $ordered_on . "', '" . $name . "', '" . $email . "', '" . $phone . "', '" . $country . "', '" . $city . "', '" . $pet_nickname . "', '" . $other_city . "', '" . $address . "', '" . $additional_info . "', '" . $ordered_items . "', '" . $bill . "', '" . $status . "', '" . $orderType . "')")) {
    // Redirect to confirmation page
    header("Location: orderStatus.php");
}
