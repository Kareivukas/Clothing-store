<?php
$servername = "localhost"; // Replace with our MySQL server hostname
$username = "bbcap25_7";     // Replace with our MySQL username
$password = "o7Edmhuo";     // Replace with our MySQL password
$dbname = "wp_bbcap25_7";       // Replace with the name of our MySQL database

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

