<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Contact Submissions</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <section id="contact">
        <h2>Contact Submissions</h2>
        <table border="1">
            <tr>
                <th>Customer ID</th>    
                <th>Name</th>
                <th>Email</th>
                
            </tr>
            <?php include 'subs.php'; ?>
        </table>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>