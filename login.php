<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin Login</title>
</head>
<body>
    <?php include 'header.php'; ?>
    

    <div class="container">
        <section id="contact">
            <h2>Admin Login</h2>
            <form action="admin_login.php" method="post">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Log In</button>
            </form>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
