<!doctype html>
<html>
<body>
<!-- Simple web form -->
<form name="login" action="myscript.php" method="post">
<p>Enter your username and password to proceed</p>
<p><label>Username:</label>
<input type="text" name="username" required></p>
<p><label>Email:</label>
<input type="text" name="email" required></p>
<p><label>Password:</label>
<input type="password" name="password" required></p>
<!-- replace 'text' above with 'password' to conceal password -->
<p><input type="submit" name="Log Me In"></p>
</form>
</body>
</html>