<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>DER8.9 - Part of JakaaGen Inc</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


</head>
<body>
<?php include 'header.php'; ?>

<section id="about">
    <div class="container">
        <h4>DER8.9 is a leading utility company specializing in Distributed Energy Resources (DER). We are dedicated to revolutionizing the energy landscape by harnessing the power of renewable energy and advanced technology.</h4>
        
        

    </div>
</section>
<section id="about">
    <div class="container">
    <?php include 'grid_table.php'; ?>
    </div>
</section>
<section id="about">
    <div class="container">
    <?php include 'test.php'; ?>
    </div>
</section>
<section id="about">
    <div class="container">
    <canvas id="gridChart"></canvas>
    <script src="grid_chart.js"></script>
    </div>
</section>

<?php include 'footer.php'; ?>
</body>
</html>


