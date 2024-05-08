<?php
// Start the session
session_start();

// Set session variables
$_SESSION["Name"] = "Your Name";
$_SESSION["Age"] = 25; // Replace with your actual age

// Display session variables
$name = $_SESSION["Name"];
$age = $_SESSION["Age"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Variables</title>
</head>
<body>
    <h2>Session Variables</h2>
    <p>Name: <?php echo $name; ?></p>
    <p>Age: <?php echo $age; ?></p>
</body>
</html>
