<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grid Credits Meter</title>
    <style>
        /* Styling for the circular meter */
        .meter {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: conic-gradient(
                #3498db 0%,
                #3498db calc(1% * var(--percentage)),
                #ecf0f1 calc(1% * var(--percentage)),
                #ecf0f1 100%
            );
            transform: rotate(-90deg);
            position: relative;
        }

        /* Text for the current value inside the meter */
        .meter-text {
            text-align: center;
            font-size: 24px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="meter">
        <div class="meter-text">0</div>
    </div>

    <script>
        function updateMeter() {
            // Simulated value for grid_credits (replace with actual data retrieval)
            const gridCredits = Math.random() * 100; // Random value for demonstration

            const meter = document.querySelector('.meter');
            const meterText = document.querySelector('.meter-text');
            
            meter.style.setProperty('--percentage', gridCredits);
            meterText.innerText = Math.round(gridCredits);
        }

        // Initial update and set interval to refresh the meter every 15 seconds
        updateMeter();
        setInterval(updateMeter, 15000);
    </script>
</body>
</html>
