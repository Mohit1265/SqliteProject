<?php
require_once 'classes/queryDb.php';

if (isset($_POST['submit'])) {
    $action = addCustomer($_POST['f_name'], $_POST['l_name'], $_POST['address'], $_POST['phone']);
    if($action){
        echo "<script>alert('Account has been created successfully.');</script>";
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
    <img src="images/logo1.png" alt="LOGO" class="logo-hide-show" >
    <!-- Navigation Left Side LOGO-->
    <div class="nav-part1"><img src="images/logo1.png" alt="LOGO" class="logo" ></div>
    <!-- Navigation Left Side Menu Bar-->
    <div class="nav-part2">
        <a href="index.php">Home</a>
        <a href="products.php">Products</a>
        <a href="about.php">About</a>
        <a href="cart.php">Cart</a>
        <a href="signup.php" class="active">Sign UP</a>
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

<!-- Main Heading -->
<div class="welcome">
    <div class="typewriter_effect">
        <h1><a href="enhancements.php" class="custom-decoration">Hurry Up!!! Register now and get exclusive offers.</a></h1>
    </div>
</div>
<!-- Main Container -->
<div class="form-container">
    <!-- Conatiner - Head Part -->
    <div class="head">
        <h2 class="color-white">Sign Up</h2>
    </div>
    <br>
    <!-- Container - Body Part -->
    <div class="body_main">
        <form method="post" >
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>First Name</label><label class="warning-msg"></label><input type="text" name="f_name" value="">
            </div>
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Last Name</label><label class="warning-msg"></label><input type="text" name="l_name" value="">
            </div>
            <!-- Input Field Grouping -->
            <div class="input-group">
                <label>Phone Number</label><label class="warning-msg"></label><input type="text" name="phone" value="">
            </div>
            <div class="input-group">
                <label>Address</label><label class="warning-msg"></label><textarea name="address"></textarea>
            </div>
            <!-- Submit Button -->
            <div class="form-button">
                <input type="submit" name="submit" value="Submit" id="submit">
            </div>
        </form>
    </div>
</div>
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