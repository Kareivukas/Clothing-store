<?php
$servername = "Localhost via UNIX socket"; // Replace with your MySQL server hostname
$username = "bbcap25_7";     // Replace with your MySQL username
$password = "o7Edmhuo";     // Replace with your MySQL password
$dbname = "wp_bbcap25_7";       // FIX: Use the correct database name (same as db.php)

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to database: " . $dbname;
?>