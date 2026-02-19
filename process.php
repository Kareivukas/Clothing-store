<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $first_name = $_POST['first_name'];     // First name
    $last_name = $_POST['last_name'];       // Last name
    $Card_Number = $_POST['Card_Number'];   // Card Number
    $Card_ExpiaryDate = $_POST['Card_ExpiaryDate']; // Card Expiry Date
    $cvv = $_POST['cvv'];                   // CVV

    // Include the database connection file
    include 'db.php';

    // FIXED: Use correct table name (all lowercase) and column names
    $sql = "INSERT INTO paymentInfo (first_name, last_name, Card_Number, Card_ExpiaryDate, cvv)
            VALUES ('$first_name', '$last_name', '$Card_Number', '$Card_ExpiaryDate', '$cvv')";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        echo "New record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>