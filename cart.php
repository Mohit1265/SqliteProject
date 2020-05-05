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
        <a href="cart.php" class="active">Cart</a>
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
<div class="form-container about-back-img">
    <!-- Haead Part -->
    <div class="head">
        <h2 class="color-white">Cart</h2>
    </div>
    <!-- Body Part -->
    <div class="body_main">
        <!-- Left Side User Images -->
        <div class="second-half">
            <figure>
                <img src="images/user2.png" alt="User-Image" class="user_img zoom">
            </figure>
        </div>
        <!-- Right Side User Details -->
        <div class="first-half">
            <dl>
                <dt>Name:</dt>
                <dd>Alex John Smith</dd>
            </dl>
            <dl>
                <dt>Contact No.:</dt>
                <dd>024 564 894</dd>
            </dl>
            <dl>
                <dt>Email link:</dt>
                <dd><a href="mailto:someone@example.com" style="text-decoration: none;">alexsmith@email.com</a></dd>
            </dl>
            <dl>
                <dt>Address:</dt>
                <dd>
                   <ol style="padding-left:0px;">
                       <li>51 Endeavour Drive, Tulka North, South Australia, 5607, Australia</li>
                       <li>35 Kopkes Road, Pitfield, New South Wales,</li>
                   </ol>
                </dd>
            </dl>
            <div class="clear"></div>
        </div>
        <div style="clear:both"></div>
        <hr class="about-hr">
        <!-- Timetable Main Responsive Containers-->
        <section class="responsive-table">
            <!-- Table Heading -->
            <h2 class="heading-center"><a>Cart Details</a></h2>
            <!-- Timetable -->
            <table style="width: 100%;">
                <thead style="font-size: 20px">
                <tr>
                    <th style="padding:20px 0px;">Sr No.</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
                </thead>
                <tbody style="font-size: 18px;">
                <tr>
                    <td>01</td>
                    <td>Formal Blue Shirt</td>
                    <td>2</td>
                    <td>$45.99</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Gabi Full Sleeve</td>
                    <td>6</td>
                    <td>$65.12</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>Round Neck T-Shirt</td>
                    <td>3</td>
                    <td>$32.45</td>
                </tr>
                </tbody>
            </table>
        </section>
        <br>
        <!-- Horizontal Rule -->
        <hr class="about-hr"><br>
        <!-- Demographic Information Section-->
        <div class="about-first" style="text-align: left">
                <input type="submit" value="Checkout" style="padding: 10px 20px;">
        </div>
        <!-- Personal Information Section-->
        <div class="clear"></div>
        <br>
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