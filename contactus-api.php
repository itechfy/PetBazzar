<?php
require_once "connect.php";
if (isset($_POST['submit'])) {
    $fullName = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    if (mysqli_query($conn, "INSERT INTO admin_inbox(fullName,email ,subject, message) VALUES('" . $fullName . "', '" . $email . "', '" . $subject . "', '" . $message . "')")) {
        header('Location:contact-us.php?sent=true');
    } else {
        header('Location:contact-us.php?sent=false');
    }
}
