<?php
session_start();
require_once("conn.php");

if (isset($_GET['product_id'])) {
    $product_id = $_GET['product_id'];

    $query = "SELECT * FROM tbl_products WHERE product_id = $product_id";
    $result = mysqli_query($connection, $query);

    if ($product = mysqli_fetch_assoc($result)) {
        echo "<h1>" . $product['product_title'] . "</h1>";
        echo "<img src='" . $product['product_image'] . "'><br>";
        echo "<p>Price: £" . $product['product_price'] . "</p>";
        echo "<p>Description: " . $product['product_desc'] . "</p>";

        if (isset($_SESSION["logged"]) && $_SESSION["logged"] == false) {
            echo "<a href ='login.php'>Add to Basket</a>";
        } else {
            echo "<a href ='cart.html'>Add to Basket</a>";
        }

    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>