<?php
require_once 'classes/queryDb.php';
$products = getProducts(null,$_GET['search']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>E-commerce</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="scripts/styles/slider.css">
    <style>
        .add-to-cart-btn {
            font-size: 13px;
            color: #fff;
            background: #2fdab8;
            text-decoration: none;
            cursor: pointer;
            position: relative;
            border: none;
            border-radius: 0;
            text-transform: uppercase;
            padding: .5em 40px;
            outline: none;
            letter-spacing: 1px;
            font-weight: 600;
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav>
    <!-- Navigation Left Side LOGO-->
    <img src="images/logo1.png" alt="LOGO" class="logo-hide-show">
    <!-- Navigation Left Side LOGO-->
    <div class="nav-part1"><img src="images/logo1.png" alt="image of the LOGO" class="logo" ></div>
    <!-- Navigation Left Side Menu Bar-->
    <div class="nav-part2">
        <a href="index.php">Home</a>
        <a href="products.php" class="active">Products</a>
        <a href="about.php">About</a>
        <a href="cart.php">Cart</a>
        <a href="signup.php">Sign Up</a>
    </div>
    <!-- Navigation Right Side Search Box -->
    <div class="nav-bar-search">
        <form method="get" action="search-results.php">
            <!-- Input Field -->
            <div id="search-box-1">
                <input type="text" class="" name="search" placeholder="Quick Search">
            </div>
            <!-- Search Button -->
            <div id="search-box-2">
                <button type="submit"><img src="images/search.png" alt="Search"></button>
            </div>
        </form>
    </div>
    <div class="clear"></div>
</nav>
<!-- Welcome Text -->
<div class="product-search-steps">
    <h4>Search Result</h4>
    <h2>Stylish Products Delivered To Your Door Step</h2>
    <?php
    foreach ($products as $key=>$val) {
        ?>
        <div class="box">
            <a href="single-page.php?pid=<?php echo $val['PRODID']; ?>&img=<?php echo $key; ?>"><img src="images/m<?php echo $key; ?>.jpg" alt="Image" class="box-img zoom-circle"></a>
            <h5><?php echo $val['PRODUCTNAME'] ?></h5>
            <h5><?php echo $val['PRICE'] ?></h5>
            <input type="button" class="add-to-cart-btn" value="ADD TO CART">
        </div>
        <?php
    }
    ?>
</div>
<!-- Footer -->
<footer>
    <!-- Copyright Section -->
    <a href="#">&copy;Copyright 2020 All Rights Reserved</a>
</footer>
</body>
</html>