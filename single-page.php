<?php
require_once 'classes/queryDb.php';
$img = $_GET['img'];
$products = getProducts($_GET['pid'],null);
$products = $products[0];
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
        <a href="index.php" class="active">Home</a>
        <a href="products.php">Products</a>
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
<!-- Banner -->
<div class="index-banner">
    <img src="images/banner-single-page.jpg" alt="" style="width: 100%; height: 335px;">
</div>
<!-- Welcome Text -->
<div class="product-search-steps">
    <br>
    <h2>Product Details</h2>
    <hr>
    <div class="box">
        <a href="enhancements.php"><img src="images/m<?php echo $img; ?>.jpg" alt="Image" class="box-img zoom-circle"></a>
        <h5><?php echo $products['PRODUCTNAME'] ?></h5>
    </div>
    <div class="box" style="text-align:center;width: 80%; background-color: transparent; padding: 0px 5px; ">
        <h1><?php echo $products['PRODUCTNAME'] ?></h1>
        <h1>Price</h1>
        <h3><?php echo $products['PRICE'] ?></h3>
        <h1>Quantity</h1>
        <select style="padding: 5px 21px;">
            <option value="null">5 Qty</option>
            <option value="null">6 Qty</option>
            <option value="null">7 Qty</option>
            <option value="null">10 Qty</option>
        </select>
        <h1>Description</h1>
        <p><?php echo $products['DESCRIPTION'] ?></p>
        <input type="button" class="add-to-cart-btn" value="ADD TO CART">
        <br>
        <br>
    </div>
</div>
<!-- Footer -->
<footer>
    <!-- Copyright Section -->
    <a href="#">&copy;Copyright 2020 All Rights Reserved</a>
</footer>
</body>
</html>