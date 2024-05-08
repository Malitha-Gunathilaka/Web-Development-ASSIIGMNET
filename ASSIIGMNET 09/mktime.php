<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Output</title>
</head>
<body>
    <?php
    // Use mktime to create a specific date (2023-04-22 in this example)
    $specific_date = mktime(0, 0, 0, 4, 22, 2023);

    // Use date to format the specific date
    $formatted_date = date("Y/m/d", $specific_date);

    // Print the formatted date
    echo "<p>Formatted Date: $formatted_date</p>";
    ?>
</body>
</html>
