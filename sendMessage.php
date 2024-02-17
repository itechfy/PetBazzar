<?php
require_once "connect.php";
if (isset($_POST['send'])) {
    $send_to = $_POST['send_to'];
    $send_by = $_POST['send_by'];
    $text = $_POST['chat_msg'];



    $result = mysqli_query($conn, "SELECT * FROM users WHERE user_id = '" . $send_to . "'");
    if ($row = mysqli_fetch_array($result)) {
        $currentTime = date("h:i A");
        if (mysqli_query($conn, "INSERT INTO user_inbox(text, send_to, send_by ,timestamp) VALUES('" . $text . "', '" . $send_to . "', '" . $send_by . "', '" . $currentTime . "')")) {
            header("location: inbox.php");
            exit();
        } else {
            echo mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}
