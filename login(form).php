<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <title>Frost & Form</title>

</head>
<body>

  <form method="POST">
      <label>Full Name:</label>
        <input type="text" name="full_name" class="form-control">
      <label>email:</label>
        <input type="email" name="email" class="form-control">
      <label>password:</label>
        <input type="password" name="password" class="form-control">

    <button type="submit" name="submit" class="btn btn-success">Submit</button>
    
  </form>

  <br>

  <?php
  if (isset($_POST['full_name']) && (isset($_POST['email']) && isset($_POST['password'])) {
      echo "<h3>Hello " . $_POST['full_name'] . ",
      Welcome to Frost & Form</h3>";
  }
  ?>
</div>

</body>
</html>




