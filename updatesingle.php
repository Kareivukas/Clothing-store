<?php
include 'db.php';

// Check if ID is provided
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID not provided");
}

$a = $_GET['id'];

// Use prepared statement to prevent SQL injection
$stmt = $conn->prepare("SELECT * FROM paymentInfo WHERE id = ?");
$stmt->bind_param("i", $a);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if (!$row) {
    die("Record not found");
}
?>

<h2> Update your information below: </h2>
<form name="form1" method="post" action="updatesingle.php?id=<?php echo $a; ?>">
    <div class="row">
        <div class="col">
            <label>First Name:</label>
            <input type="text" class="form-control" placeholder="First name" name="first_name" required value="<?php echo htmlspecialchars($row['first_name']); ?>">
        </div>
        <div class="col">
            <label>Last Name:</label>
            <input type="text" class="form-control" placeholder="Last name" name="last_name" required value="<?php echo htmlspecialchars($row['last_name']); ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <label>Card Number:</label>
            <input type="text" class="form-control" placeholder="Card Number" name="Card_Number" value="<?php echo htmlspecialchars($row['Card_Number']); ?>">
        </div>
        <div class="col">
            <label>Expiry Date:</label>
            <input type="text" class="form-control" placeholder="Expiry Date" name="Card_ExpiaryDate" value="<?php echo htmlspecialchars($row['Card_ExpiaryDate']); ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
            <label>CVV:</label>
            <input type="text" class="form-control" placeholder="CVV" name="cvv" value="<?php echo htmlspecialchars($row['cvv']); ?>">
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
        <div class="col"><button type="submit" class="btn btn-danger" name="delete">Delete your Information</button></div>
    </div>
</form>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['submit'])) {
        // FIXED: Use the correct POST variable names that match your form
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $Card_Number = $_POST['Card_Number'];
        $Card_ExpiaryDate = $_POST['Card_ExpiaryDate'];
        $cvv = $_POST['cvv'];
        
        // Use prepared statement for UPDATE
        $update_stmt = $conn->prepare("UPDATE paymentInfo SET first_name=?, last_name=?, Card_Number=?, Card_ExpiaryDate=?, cvv=? WHERE id=?");
        $update_stmt->bind_param("sssssi", $first_name, $last_name, $Card_Number, $Card_ExpiaryDate, $cvv, $a);
        
        if ($update_stmt->execute()) {
            echo "<h2 style='color: green;'>✓ Your information is updated Successfully</h2>";
            echo "<script>setTimeout(function(){ window.location.href = 'updatesingle.php?id=$a'; }, 2000);</script>";
        } else {
            echo "<h2 style='color: red;'>✗ Error updating record: " . $conn->error . "</h2>";
        }
        $update_stmt->close();
    }

    if (isset($_POST['delete'])) {
        $delete_stmt = $conn->prepare("DELETE FROM paymentInfo WHERE id=?");
        $delete_stmt->bind_param("i", $a);
        
        if ($delete_stmt->execute()) {
            echo "<h2 style='color: green;'>✓ Record Deleted with id: $a</h2>";
            echo "<script>setTimeout(function(){ window.location.href = 'display.php'; }, 2000);</script>";
        } else {
            echo "<h2 style='color: red;'>✗ Record Not Deleted: " . $conn->error . "</h2>";
        }
        $delete_stmt->close();
    }
}

$conn->close();
?>