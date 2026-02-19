<?php
include 'db.php';

// Test the connection
echo "<h2>Database Connection Test</h2>";
echo "Connected to database: " . $dbname . "<br><br>";

// Check if paymentInfo table exists
$result = $conn->query("SHOW TABLES LIKE 'paymentInfo'");
if ($result->num_rows > 0) {
    echo "✓ Table 'paymentInfo' exists<br>";
    
    // Show table structure
    $result = $conn->query("DESCRIBE paymentInfo");
    echo "<h3>Table Structure:</h3>";
    echo "<table border='1'>";
    echo "<tr><th>Field</th><th>Type</th><th>Null</th><th>Key</th><th>Default</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['Field'] . "</td>";
        echo "<td>" . $row['Type'] . "</td>";
        echo "<td>" . $row['Null'] . "</td>";
        echo "<td>" . $row['Key'] . "</td>";
        echo "<td>" . $row['Default'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    
    // Count records
    $result = $conn->query("SELECT COUNT(*) as count FROM paymentInfo");
    $row = $result->fetch_assoc();
    echo "<p>Total records: " . $row['count'] . "</p>";
    
} else {
    echo "✗ Table 'paymentInfo' does NOT exist<br>";
    
    // List all tables
    echo "<h3>Available tables:</h3>";
    $result = $conn->query("SHOW TABLES");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_array()) {
            echo "- " . $row[0] . "<br>";
        }
    } else {
        echo "No tables found in database";
    }
}

$conn->close();
?>