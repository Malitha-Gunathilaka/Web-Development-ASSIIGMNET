<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
</head>
<body>
    <h2>Result Page</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data
        $studentNumber = $_POST["studentNumber"];
        $courseCode = $_POST["courseCode"];
        $grade = $_POST["grade"];

        // Open the file for writing
        $file = fopen("result.txt", "a");

        // Check if the file is opened successfully
        if ($file) {
            // Format the data to be written to the file
            $data = "Student Number: $studentNumber, Course Code: $courseCode, Grade: $grade\n";

            // Write data to the file
            fwrite($file, $data);

            // Close the file
            fclose($file);

            echo "<p>Details Recorded Successfully!</p>";
        } else {
            echo "<p>Error opening the file.</p>";
        }
    }
    ?>
</body>
</html>

