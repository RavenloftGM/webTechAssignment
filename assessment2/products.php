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

            // The filters themselves
            $colourFilter = isset($_GET['colourFilter']) ? $_GET['colourFilter'] : '';
            $typeFilter = isset($_GET['typeFilter']) ? $_GET['typeFilter'] : '';

            // Finds all the colours, assumes all product titles list colour before the first space. 
            $findColours = "SELECT DISTINCT SUBSTRING_INDEX(product_title, ' ', 1) AS colour FROM tbl_products WHERE SUBSTRING_INDEX(product_title, ' ', 1) REGEXP '^[a-zA-Z]+$'";
            $availableColours = mysqli_query($connection, $findColours);

            // Shows the full product type.
            // Decided not to remove the "UCLan" bit but would do this if more types were added that did not include this
            $findTypes = "SELECT DISTINCT product_type FROM tbl_products";
            $availableTypes = mysqli_query($connection, $findTypes);

            // Colour dropdown menu
            echo "<form method='GET'>"; 
            echo "<select name='colourFilter'>";
            echo "<option value=''>All Colours</option>"; 
            while ($colour = mysqli_fetch_assoc($availableColours)) {
                $selected = ($colourFilter == $colour['colour']) ? 'selected' : '';
                echo "<option value='" . $colour['colour'] . "'>" . $colour['colour'] . "</option>";
            }
            echo "</select>";

            // Type dropdown menu
            echo "<select name='typeFilter'>";
            echo "<option value=''>All Types</option>"; 
            while ($type = mysqli_fetch_assoc($availableTypes)) {
                $selected = ($typeFilter == $type['product_type']) ? 'selected' : '';
                echo "<option value='" . $type['product_type'] . "'>" . $type['product_type'] . "</option>";
            }
            echo "</select>";
            echo "<input type='submit' value='Filter'>";
            echo "</form>";

            // if there is a colour filter in place, adds a condition 
            $query = "SELECT * FROM tbl_products WHERE 1";
            if (!empty($colourFilter)) {
                $query .= " AND product_title LIKE '$colourFilter %'";
            }
            
            // if there is a type filter in place, adds a condition 
            if (!empty($typeFilter)) {
                $query .= " AND product_type = '$typeFilter'";
            }
            
            // loops through the products matching the filters (or all if none in place) & displays them 
            $result = mysqli_query($connection, $query);
            echo "<div id='productsTable'>";
            while($product=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "<div class='productsEntry'>";
                echo "<h3>".$product["product_title"]."</h3><hr>";
                echo "<img src='".$product["product_image"]."'>";
                echo "<p> £".$product["product_price"]."</p>";
                echo "<a href='item.php?product_id=" . $product['product_id'] . "'>Read more...</a>";
                // if the user is logged in, they can add the item to their basket, if not, they are redirected to log in
                if (isset($_SESSION["logged"]) && $_SESSION["logged"] == true) {
                    echo "<form method='post' action='cart.php'>";
                    echo "<input type='hidden' name='product_id' value='" . $product['product_id'] . "'>";
                    echo "<input type='submit' name='add_to_cart' value='Add to Basket'>";
                    echo "</form>";
                } else {
                    echo "<a href ='login.php'>Add to Basket</a>";
                } 
                echo "</div>";
            }
            echo "</div>";
        ?>


    </main>

    <footer>    
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>


</body>

</html>