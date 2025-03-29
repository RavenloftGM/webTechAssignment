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

        $query = "SELECT * FROM tbl_products";
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