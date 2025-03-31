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

<?php 
require_once("conn.php");

// checks that a product id is being passed to the url 
if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    // retrieves data from products table in database and 
    $query = "SELECT * FROM tbl_products WHERE product_id = $product_id";
    $result = mysqli_query($connection, $query);

    // dynamically displays the product information
    if ($product = mysqli_fetch_assoc($result)) {
        echo "<div class='selectedProduct'>";
        echo "<h1>" . $product['product_title'] . "</h1>";
        echo "<img src='" . $product['product_image'] . "'><br>";
        echo "<p>Price: £" . $product['product_price'] . "</p>";
        echo "<p>Description: " . $product['product_desc'] . "</p>";

        // if the user is not logged in they are redirected to log in, if they are logged in, the product is added to the cart 
        if (isset($_SESSION["logged"]) && $_SESSION["logged"] == false) {
            echo "<a href ='login.php'>Add to Basket</a>";
        } else {
            echo "<form method='post' action='cart.php'>";
            echo "<input type='hidden' name='product_id' value='" . $product['product_id'] . "'>";
            echo "<input type='submit' name='add_to_cart' value='Add to Basket'>";
            echo "</form>";
        }
        echo "</div>";

    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>
    <footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>
</html>