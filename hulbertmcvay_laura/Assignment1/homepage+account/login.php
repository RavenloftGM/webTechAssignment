<?php 
// initialises/resumes session
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - UCLAN SU Shop</title>
</head>

<body id="homepageContent">
    <!--Logo & navigation bar-->
    <header class="header">
        <nav>
            <div class="navbar">
            <figure class="logo"><img src="./images/logo.svg" alt="UCLan logo"></figure>
              <ul class="menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="cart.php">Cart</a></li>
                
                <?php 
                // checks to see if a user is currently logged in - if so, displays 'log out', if not, displays 'log in'
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo "<li><a href ='logout.php'>Logout</a></li>";
                } else {
                    echo "<li><a href ='login.php'>Login</a></li>";
                } ?>
              </ul>
            </div>
          </nav>
    </header>

<!-- login form submits data to myscript.php using POST to keep details secure -->
<form name="login" action="myscript.php" method="post">
<p>Enter your username and password to proceed</p>
<p><label>Email:</label>
<input type="text" name="email" required></p>
<p><label>Password:</label>
<input type="password" name="password" required></p>
<p><input type="submit" name="Log Me In"></p>
</form>
<!-- provides link to register if user doesn't have an existing account -->
<p>Not a user?</p>
<a href="register.php">Sign up!</a>
<footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>
</body>
</html>