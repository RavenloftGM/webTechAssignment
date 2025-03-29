<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
<title>Register Account</title>
</head>
<body>

<h2>Register</h2>

<form id="registrationForm" method="POST" action="signup.php">
  <label for="fullName">Full Name:</label><br>
  <input type="text" id="fullName" name="fullName" required><br><br>

  <label for="address">Address:</label><br>
  <textarea id="address" name="address" required></textarea><br><br>

  <label for="email">Email Address:</label><br>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password" required><br><br>

  <input type="submit" value="Submit">
</form>

</body>
</html>