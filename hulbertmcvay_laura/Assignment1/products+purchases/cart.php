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

    <?php require_once("conn.php");

        // displays success message from checkout if there is one
        if (isset($_SESSION['order_success'])) {
            echo "<p>" . $_SESSION['order_success'] . "</p>";
            unset($_SESSION['order_success']); 
        }

// initialises the cart if one does not exist already
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// gets product id, checks if it exists in cart, then adds or increments
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    if (!isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] = 1; 
    } else {
        $_SESSION['cart'][$product_id] += 1;
    }
}


// removes an item from the cart
if (isset($_POST['remove_from_cart'])) {
    $product_id = $_POST['product_id'];
    unset($_SESSION['cart'][$product_id]); // Remove product
}

// cart display
echo "<h2>Shopping Cart</h2>";
// if cart is NOT empty, dynamically displays a table of the cart contents 
if (!empty($_SESSION['cart'])) {
    echo "<table border='1'>";
    echo "<tr><th>Product</th><th>Price</th><th>Quantity</th><th>Action</th></tr>";

    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $query = "SELECT * FROM tbl_products WHERE product_id = $product_id";
        $result = mysqli_query($connection, $query);
        $product = mysqli_fetch_assoc($result);

        echo "<tr>";
        echo "<td>" . $product['product_title'] . "</td>";
        echo "<td>£" . $product['product_price'] . "</td>";
        echo "<td>" . $quantity . "</td>";
        echo "<td>
                <form method='post' action='cart.php'>
                    <input type='hidden' name='product_id' value='$product_id'>
                    <input type='submit' name='remove_from_cart' value='Remove'>
                </form>
              </td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><a href='checkout.php'>Proceed to Checkout</a>";
} else {
    // displays a message if cart IS empty
    echo "Your cart is empty.";
}
?>
    <footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>
</html>