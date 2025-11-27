<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head> 
    <title>About Us</title>
    <link rel="stylesheet" href="project_style.css">
    <link rel="icon" type="image/png" href="The Perfect Blend.png"/>
    <script src="cart.js"></script> 
</head>
<body>
<main>
    <img src="The Perfect Blend.png" alt="Logo" id="logo-left" width="100" height="100">

    <nav class="pink-tape">
        <div class="nav-links">
            <a href="index.php">Home</a>
            <a href="products.php">Products</a>
            <a href="aboutus.php">About Us</a>
        </div>
        <div id="utility-icons">
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="account.php" id="account-link">
                    <img src="account2 (1).png" alt="account photo" width="60" height="60">
                </a>
            <?php else: ?>
                <a href="signin.php" id="account-link">
                    <img src="account2 (1).png" alt="account photo" width="60" height="60" style="filter: grayscale(100%);">
                </a>
            <?php endif; ?>

            <div id="cart-icon" onclick="toggleCartPanel()">
                <img src="cart2.png" alt="Shopping Cart" width="40" height="40">
                (<span id="cart-count">0</span>)
            </div>
        </div>
    </nav>

    <header><h2>About Us</h2></header>

    <h3>Our Story</h3>
    <p>Welcome to The Perfect Blend, where we believe that beauty should be accessible, high-quality, and fun!</p>

    <h3>Our Commitment</h3>
    <p>We are committed to sourcing the best ingredients to create products that are both stunning and safe for everyday use.</p>

    <h3>Join Our Community</h3>
    <p>Thank you for choosing The Perfect Blend. Explore our products and become part of our growing beauty community!</p>

    <br><hr>
    <footer id="footer">
        <p>Contact Us</p>
    </footer><br>
</main>

<div id="cart-panel">
    <h3>Shopping Cart</h3>
    <ul id="cart-items-list"></ul>
    <p>Total: <span id="cart-total">0</span> SAR</p>
    <button>Checkout</button>
</div>
</body>
</html>
