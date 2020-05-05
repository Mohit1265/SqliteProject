<?php
require_once 'classes/queryDb.php';

if (isset($_POST['submit'])) {
    $action = addProduct($_POST['name'], $_POST['manufacturing'], $_POST['description'], $_POST['price']);
    if($action){
        echo "<script>alert('Product added successfully.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
    <title>E-commerce</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/apply.js"></script>
</head>
<!-- Body -->
<body>
<!-- Navigation Bar -->
<nav>
    <!-- Navigation Left Side LOGO-->
    <img src="images/logo1.png" alt="LOGO" class="logo-hide-show">
    <!-- Navigation Left Side LOGO-->
    <div class="nav-part1"><img src="images/logo1.png" alt="LOGO" class="logo"></div>
    <!-- Navigation Left Side Menu Bar-->
    <div class="nav-part2">
        <a href="index.php">Home</a>
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
<!-- Main Container -->
<div class="form-container">
    <!-- Conatiner - Head Part -->
    <div class="head">
        <h2 class="color-white">Add New Product</h2>
    </div>
    <br>
    <!-- Container - Body Part -->
    <div class="body_main">
        <form method="post" name="validate_form">
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Product Name</label><label class="warning-msg"></label><input type="text" name="name"
                                                                                             value="">
            </div>
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Manufacturing</label><label class="warning-msg"></label><input type="text"
                                                                                              name="manufacturing"
                                                                                              value="" maxlength="20">
            </div>
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Price</label><label class="warning-msg"></label><input type="text" name="price" value="">
            </div>
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Description</label><label class="warning-msg"></label><textarea name="description"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="form-button">
                <input type="submit" name="submit" value="Click here to add the product" id="submit">
            </div>
        </form>
    </div>
</div>
<br>
<br>
<br>
<!-- Footer -->
<footer>
    <!-- Copyright Section -->
    <a href="#">&copy;Copyright 2020 All Rights Reserved</a>
</footer>
<script src="scripts/storage.js"></script>
<script src="scripts/age.js"></script>
</body>
</html>