<?php
ob_start();
session_start();
if(isset($_SESSION['user_id'])) {
session_destroy();
unset($_SESSION['user_id']);
unset($_SESSION['fname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['typ']);
header("Location: login.php");
} else {
header("Location: login.php");
}
?>