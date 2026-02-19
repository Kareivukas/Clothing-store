<h2>Update your card details here:</h2>
<form name="form1" method="post" action="process.php">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required>
            </div>
            <div class="col">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="Card_Number">Card Number:</label>
                <input type="text" class="form-control" id="Card_Number" placeholder="Enter your card number" name="Card_Number" required>
            </div>
            <div class="col">
                <label for="Card_ExpiaryDate">Card Expiry Date:</label>
                <input type="text" class="form-control" id="Card_ExpiaryDate" placeholder="MM/YY" name="Card_ExpiaryDate" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" placeholder="Enter CVV" name="cvv" required>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>