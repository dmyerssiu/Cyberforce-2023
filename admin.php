<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin Panel</title>
    <style>
        /* Custom styles for horizontal list */
        ul.horizontal-list {
            list-style: none;
            padding: 0;
        }

        ul.horizontal-list li {
            display: inline; /* Display list items inline */
            margin-right: 10px; /* Add some spacing between list items */
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <h2 style="color: white;">Welcome to the Admin Panel</h2><br>
        <ul class="horizontal-list">
            <li><a href="der_data.php">Dashboard</a></li>
            <li><a href="contact_submissions.php">Contact Submissions</a></li>
            <li><a href="registered_users.php">Registered Users</a></li>
        </ul>
    </div>
<br><br><br><br>

    <?php include 'footer.php'; ?>
</body>
</html>
