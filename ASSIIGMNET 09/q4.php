<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>
    <?php
    // Specify the file path
    $file_path = "university.txt";

    // Check if the file exists
    if (file_exists($file_path)) {
        // Open the file for reading
        $file = fopen($file_path, "r");

        // Check if the file was opened successfully
        if ($file) {
            // Read the file line by line and print on the web page
            while (($line = fgets($file)) !== false) {
                echo "<p>$line</p>";
            }

            // Close the file
            fclose($file);
        } else {
            echo "<p>Error opening the file.</p>";
        }
    } else {
        echo "<p>The file does not exist.</p>";
    }
    ?>
</body>
</html>
