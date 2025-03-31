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
        // Get average rating for the product
        $avg_query = "SELECT ROUND(AVG(review_rating)) AS avg_rating FROM tbl_reviews WHERE product_id = $product_id";
        $avg_result = mysqli_query($connection, $avg_query);
        
        // Check if any reviews exist
        if ($avg_row = mysqli_fetch_assoc($avg_result)) {
            $avg_rating = $avg_row['avg_rating'];
            $avg_rating = round($avg_rating);
        
            // Display average rating with stars
            if ($avg_rating > 0) {
                echo "<div class='averageRating'>";
                echo "<h3>Average Rating: " . str_repeat("★", $avg_rating) . str_repeat("☆", 5 - $avg_rating) . " ($avg_rating/5)</h3>";
                echo "</div>";
            } else {
                echo "<div class='averageRating'><h3>No reviews yet. Be the first to leave a review!</h3></div>";
            }
        }
        
        echo "<img src='" . $product['product_image'] . "'><br>";
        echo "<p>Price: £" . $product['product_price'] . "</p>";
        echo "<p>Description: " . $product['product_desc'] . "</p>";

        // if the user is not logged in they are redirected to log in, if they are logged in, the product is added to the cart 
        if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
            echo "<form method='post' action='cart.php'>";
            echo "<input type='hidden' name='product_id' value='" . $product['product_id'] . "'>";
            echo "<input type='submit' name='add_to_cart' value='Add to Basket'>";
            echo "</form>";
        } else {
            echo "<a href ='login.php'>Add to Basket</a>";
        } 
        echo "</div>";

    } else {
        echo "Product not found.";
    }
} else {
    echo "Product ID not provided.";
}
?>
<div class="reviewContainer">
    <div class="createReview"><?php if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) : ?>
    <form method="POST" action="createreview.php">
        <h3>Post a Review</h3>
        <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
        <input type="text" name="review_title" placeholder="Review Title" required>
        <textarea name="review_desc" placeholder="Write your review..." required></textarea>
        <label>Rating:</label>
        <select name="review_rating" required>
            <option value="5">5 Stars ★★★★★</option>
            <option value="4">4 Stars ★★★★☆</option>
            <option value="3">3 Stars ★★★☆☆</option>
            <option value="2">2 Stars ★★☆☆☆</option>
            <option value="1">1 Star ★☆☆☆☆</option>
        </select>
        <button type="submit">Submit Review</button>
    </form>
<?php else : ?>
    <p><a href="login.php">Login</a> to post a review!</p>
<?php endif; ?>
</div>
<div class="displayReview">
    <h3>Customer Reviews</h3>
    <?php
    $review_query = "SELECT r.review_title, r.review_desc, r.review_rating, r.review_timestamp, u.user_full_name 
                     FROM tbl_reviews r
                     JOIN tbl_users u ON r.user_id = u.user_id
                     WHERE r.product_id = $product_id
                     ORDER BY r.review_timestamp DESC";
    
    $review_result = mysqli_query($connection, $review_query);

    if (mysqli_num_rows($review_result) > 0) {
        while ($review = mysqli_fetch_assoc($review_result)) {
            echo "<div class='reviewCard'>";
            echo "<h4>" . htmlspecialchars($review['review_title']) . " - " . $review['review_rating'] . " ★</h4>";
            echo "<p>" . htmlspecialchars($review['review_desc']) . "</p>";
            echo "<p><b>Reviewed by:</b> " . htmlspecialchars($review['user_full_name']) . "</p>";
            echo "<p><em>Posted on: " . date('d M Y, H:i', strtotime($review['review_timestamp'])) . "</em></p>";
            echo "</div><hr>";
        }
    } else {
        echo "<p>No reviews yet.</p>";
    }
    ?>
</div>
</div>

    <footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>
</html>