<?php
// Assuming you have a valid connection earlier in your code
$conn = new mysqli("localhost","root","","simapres");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Your query
$query = "SELECT * FROM prestasi";

// Perform the query
$result = mysqli_query($conn, $query);

// Rest of your code...
?>