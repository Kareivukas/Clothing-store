<?php
// Check if the 'submit' button in the form was clicked
if (isset($_POST['submit'])) {
    // Retrieve data from the form and store it in variables
    $full_name = $_POST['full_name'];     // Fullname
    $email = $_POST['email'];     // email
    
    // hash the password
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // Include the database connection file
    include 'db1.php';

    // Define an SQL query to insert data into the 'logininfo' table
    $sql = "INSERT INTO logininfo (full_name, email, password, created_at)
            VALUES ('$full_name', '$email', '$password', CURRENT_TIMESTAMP)";

    // Execute the SQL query using the database connection
    if ($conn->query($sql) === TRUE) {
        // If the query was successful, display a success message
        echo "New record added";
    } else {
        // If there was an error in the query, display an error message
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>