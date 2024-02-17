<?php
// $url = 'localhost';
// $username = 'id20722183_root';
// $password = 'Rashidali@123';
// $conn = mysqli_connect($url, $username, $password, "id20722183_petbazzar");
// if (!$conn) {
//     die('Could not Connect My Sql:' . mysql_error());
// }


$url = 'localhost';
$username = 'root';
$password = '';
$conn = mysqli_connect($url, $username, $password, "petbazzar");
if (!$conn) {
    die('Could not Connect My Sql:' . mysql_error());
}
