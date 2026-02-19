<?php
include 'db.php';

// SQL query to retrieve data from the 'paymentInfo' table
$sql = "SELECT * FROM paymentInfo";

// Execute the SQL query and store the result
$result = $conn->query($sql);

// Check if there are any results
if ($result->num_rows > 0) {
    echo "<table class='table'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Card Number</th>
                    <th>Card Expiry Date</th>
                    <th>CVV</th>
                </tr>
            </thead>
            <tbody>";

    // Loop through the result set and display data in rows
    while ($row = $result->fetch_assoc()) {
        // Mask sensitive card information for security
        $masked_card = '**** **** **** ' . substr($row['Card_Number'], -4);
        $masked_cvv = '***';
        
        echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['first_name']) . "</td>
                <td>" . htmlspecialchars($row['last_name']) . "</td>
                <td>" . $masked_card . "</td>
                <td>" . htmlspecialchars($row['Card_ExpiaryDate']) . "</td>
                <td>" . $masked_cvv . "</td>
              </tr>";
    }

    echo "</tbody></table>";
} else {
    // Display a message if no results are found
    echo "No records found";
}

// Close the connection when done
$conn->close();
?>