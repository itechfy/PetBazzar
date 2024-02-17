<?php
require_once "connect.php";

// Query the database to retrieve the data
$sql = "SELECT * FROM users WHERE typ = 'Doctor' ORDER BY user_id DESC";
$result = $conn->query($sql);

// Fetch the data from the result set and store it in an array
$data = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Convert the array to a JSON string
$json = json_encode($data);

// Set the response headers to indicate that the response contains JSON data
header("Content-Type: application/json");

// Output the JSON string as the response
echo $json;

// Close the database connection
$conn->close();
