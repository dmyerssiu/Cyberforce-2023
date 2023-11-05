<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Registered Users</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <section id="contact">
        <h2>Registered Users</h2>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Email</th>
                
                <th>Create Date</th>
                <th>Last Update</th>
            </tr>
            <?php include 'customers.php'; ?>
        </table>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
