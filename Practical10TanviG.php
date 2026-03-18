<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP POST Form</title>
    <style>
        body {
            font-family: Arial;
            text-align: center;
            margin-top: 50px;
        }
        form {
            display: inline-block;
            padding: 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<h2>Enter Your Details</h2>

<form method="POST" action="">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Display the data
    echo "<h3>Submitted Information:</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
}
?>

</body>
</html>