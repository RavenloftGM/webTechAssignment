<?php
session_start();
require_once("conn.php");

// checks if they're logged in and form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
    $user_name = $_SESSION["name"];
    $query = "SELECT user_id FROM tbl_users WHERE user_full_name = '$user_name'";
    $result = mysqli_query($connection, $query);
    $user = mysqli_fetch_assoc($result);
    $user_id = $user['user_id'];
    $product_id = mysqli_real_escape_string($connection, $_POST["product_id"]);
    $review_title = mysqli_real_escape_string($connection, $_POST["review_title"]);
    $review_desc = mysqli_real_escape_string($connection, $_POST["review_desc"]);
    $review_rating = mysqli_real_escape_string($connection, $_POST["review_rating"]);

    // timestamp
    $review_timestamp = date("Y-m-d H:i:s");

    // inserts the review to the database
    $query = "INSERT INTO tbl_reviews (user_id, product_id, review_title, review_desc, review_rating, review_timestamp)
              VALUES ('$user_id', '$product_id', '$review_title', '$review_desc', '$review_rating', '$review_timestamp')";

    if (mysqli_query($connection, $query)) {
        header("Location: item.php?product_id=$product_id&success=review_posted");
    } else {
        header("Location: item.php?product_id=$product_id&error=unable_to_post_review");
    }
} else {
    header("Location: login.php"); 
}
?>
