<?php
session_start();
require_once("conn.php");

// checks if the user is logged in - directs them to log in if not
if (!isset($_SESSION["logged"]) || $_SESSION["logged"] == false) {
    header("Location: login.php");
    exit();
}

// fetches name, queries database to find ID
$user_name = $_SESSION["name"];
$query = "SELECT user_id FROM tbl_users WHERE user_full_name = '$user_name'";
$result = mysqli_query($connection, $query);
$user = mysqli_fetch_assoc($result);
$user_id = $user['user_id'];

// checks to make sure the cart isn't empty
if (!empty($_SESSION['cart'])) {
    $product_ids = implode(",", array_keys($_SESSION['cart']));
    // makes timestamp
    $order_date = date("Y-m-d H:i:s");

    // inserts the order into the database
    $insertOrder = "INSERT INTO tbl_orders (order_date, user_id, product_ids) VALUES ('$order_date', '$user_id', '$product_ids')";
    
// empties the cart after the order is placed
if (mysqli_query($connection, $insertOrder)) {
    $_SESSION['cart'] = []; 
    $_SESSION['order_success'] = "Order placed successfully!";
    header("Location: cart.php");
    exit();
} else {
    echo "Error: " . mysqli_error($connection);
}
} else {
echo "Cart is empty!";
}
?>