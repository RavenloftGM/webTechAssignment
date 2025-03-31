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


<h2>Register</h2>
<!-- login form submits data to signup.php using POST to keep details secure -->

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
<footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>
</body>

</html>