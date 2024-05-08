<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current Date</title>
</head>
<body>
    <?php
    // Get the current date in different formats
    $date_slash = date("Y/m/d");
    $date_dot = date("Y.m.d");
    $date_dash = date("Y-m-d");

    // Print the dates
    echo "<p>Slash Format: $date_slash</p>";
    echo "<p>Dot Format: $date_dot</p>";
    echo "<p>Dash Format: $date_dash</p>";
    ?>
</body>
</html>
