<?php
session_start();
require_once "connect.php";
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $error = "error";

    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '" . $email . "' and pwd = '" . md5($pwd) . "'");
    if ($row = mysqli_fetch_array($result)) {

        if ($row['typ'] === "Admin") {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['typ'] = $row['typ'];
            $_SESSION['status'] = $row['status'];
            header("Location: adminpanel.php");
        }

        //we're using confirmed as pending 0 |active 1 for users for email verification
        else {
            if ($row['confirmed'] === '0') {
                header("Location: login.php?verifyNow=true");
            }
            if ($row['confirmed'] === '1') {
                if ($row['typ'] === "Doctor") {
                    if ($row['status'] === "Enabled") {
                        $_SESSION['user_id'] = $row['user_id'];
                        $_SESSION['fname'] = $row['fname'];
                        $_SESSION['phone'] = $row['phone'];
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['typ'] = $row['typ'];
                        $_SESSION['status'] = $row['status'];
                        $_SESSION['confirmed'] = $row['confirmed'];
                        $_SESSION['profilePicture'] = $row['profilePicture'];
                        header("Location: doctorpanel.php");
                    } else {
                        header("Location: disabledpanel.php");
                    }
                } else {
                    $_SESSION['user_id'] = $row['user_id'];
                    $_SESSION['fname'] = $row['fname'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['typ'] = $row['typ'];
                    $_SESSION['status'] = $row['status'];
                    $_SESSION['confirmed'] = $row['confirmed'];
                    $_SESSION['profilePicture'] = $row['profilePicture'];

                    header("Location: index.php");
                }
            }
        }
    } else {
        $error_message = "Incorrect Email or Password!";
        header("Location: login.php?error=$error");
    }
}
