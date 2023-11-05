<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Contact Us</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <section id="contact">
            <h2>Contact Us</h2>
            <form action="contact_form.php" method="post" enctype="multipart/form-data">
                <label for="full-name">Full Name:</label>
                <input type="text" id="full-name" name="full-name" required>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
                
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required>
                
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                
                <label for="file-upload">File Upload (optional):</label>
                <input type="file" id="file-upload" name="file-upload">

                <button type="submit">Submit</button>
            </form>
        </section>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>