<?php session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome - UCLAN SU Shop</title>
</head>

<body id="productContent">

    <!--Logo & core nav links-->
    <header class="header">
        <nav>
            <div class="navbar">
            <figure class="logo"><img src="./images/logo.svg" alt="UCLan logo"></figure>
              <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li><a href="cart.html">Cart</a></li>
              </ul>
            </div>
          </nav>
    </header>

    <!--Template for products, script below copies, modifies, and appends the div-->
    <main id="productsList">
        <a href="logout.php">Debug Thing!</a>
        <div class="itemInfo" id="itemCard">
            <p class="src"></p>
            <a href="item.html" class="itemName"></a>
            <p class="itemPrice"></p>
        </div>

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
            echo "<option value=''>All Colours</option>"; // Add an "All Colors" option
            while ($colour = mysqli_fetch_assoc($availableColours)) {
                $selected = ($colourFilter == $colour['colour']) ? 'selected' : '';
                echo "<option value='" . $colour['colour'] . "'>" . $colour['colour'] . "</option>";
            }
            echo "</select>";

            // Type dropdown menu
            echo "<select name='typeFilter'>";
            echo "<option value=''>All Types</option>"; // Add an "All Types" option
            while ($type = mysqli_fetch_assoc($availableTypes)) {
                $selected = ($typeFilter == $type['product_type']) ? 'selected' : '';
                echo "<option value='" . $type['product_type'] . "'>" . $type['product_type'] . "</option>";
            }
            echo "</select>";
            echo "<input type='submit' value='Filter'>";
            echo "</form>";
            

            $query = "SELECT * FROM tbl_products WHERE 1";
            if (!empty($colourFilter)) {
                $query .= " AND product_title LIKE '$colourFilter %'";
            }
            
            if (!empty($typeFilter)) {
                $query .= " AND product_type = '$typeFilter'";
            }
            
            $result = mysqli_query($connection, $query);
            echo "<div id='productsTable'>";
            while($product=mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo "<div class='productsEntry'>";
                echo "<h3>".$product["product_title"]."</h3><hr>";
                echo "<img src='".$product["product_image"]."'>";
                echo "<p> £".$product["product_price"]."</p></div>";
                echo "<a href ='item.html'>Read more...</a>";
                if ($_SESSION["logged"] == false) {
                    echo "<a href ='login.php'>Add to Basket</a>";
                } else {
                    echo "<a href ='cart.html'>Add to Basket</a>";
                }
            }
        ?>


    </main>

    <footer>
        <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
        <script src="footerbutton.js"></script>
    </footer>


</body>

</html>