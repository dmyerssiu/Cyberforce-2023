<header id="home">
    <nav>
        <ul>
            <li><a href="index.php"><img src="DER_LOGO1.png" alt="DER8.9 logo"></a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="der_data.php">DER Data</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <?php if (isset($_SESSION['admin'])): ?>
                <li><a href="admin.php">Admin</a></li>
            <?php else: ?>
                <li><a href="login.php">Log In</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="banner">
        <img src="home-background.jpg" alt="Solar Panels, Wind Turbines, and Batteries">
        <div class="banner-text">
            <h1>Welcome to DER8.9 <style>color</style></h1>
            <h2>Part of JakaaGen Inc</h2>
        </div>
    </div>
</header>
