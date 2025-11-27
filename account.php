<?php
session_start();

// إذا المستخدم ما سجل دخول، رجّعه لصفحة تسجيل الدخول
if (!isset($_SESSION['user_id'])) {
    header("Location: signin.html");
    exit();
}

// عملية تسجيل الخروج
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>
    <link rel="icon" type="image/png" href="The Perfect Blend.png"/>
    <link rel="stylesheet" href="project_style.css">
</head>
<body>
    <main>
        <img src="The Perfect Blend.png" alt="Logo" id="logo-left" width="100" height="100">

        <nav class="pink-tape">
            <div class="nav-links">
                <a href="index.php">Home</a>
                <a href="products.html">Products</a>
                <a href="aboutus.html">About Us</a>
            </div>

            <div id="utility-icons">
                <a href="account.php" id="account-link">
                    <img src="account2 (1).png" alt="account photo" width="60" height="60">
                    <span><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                </a>
            </div>
        </nav>

        <header><h2>My Account</h2></header>

        <div class="account-info">
            <p><strong>Full Name:</strong> <?php echo htmlspecialchars($_SESSION['fname']); ?></p>
            <p><strong>Username:</strong> <?php echo htmlspecialchars($_SESSION['username']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></p>
            <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($_SESSION['pnum']); ?></p>
        </div>

        <form method="post">
            <input type="submit" name="logout" value="Logout">
        </form>

        <br><hr>
        <footer id="footer">
            <p>Contact Us</p>
        </footer><br>
    </main>
</body>
</html>
