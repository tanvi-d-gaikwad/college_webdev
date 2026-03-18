<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 100px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 20px;
            color: #555;
        }
    </style>
</head>
<body>

<?php
// Set timezone to India
date_default_timezone_set("Asia/Kolkata");

// Display Welcome message
echo "<h1>Welcome</h1>";

// Display current date and time
echo "<p>Current Date and Time: " . date("l, d F Y h:i:s A") . "</p>";
?>

</body>
</html>