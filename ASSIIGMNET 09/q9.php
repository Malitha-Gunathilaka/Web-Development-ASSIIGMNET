<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <h2>File Upload Form</h2>

    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if a file is uploaded successfully
        if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == UPLOAD_ERR_OK) {
            $target_dir = "fileupload/";
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

            $file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $file_size = $_FILES["fileToUpload"]["size"];

            // Check file type and size
            if (($file_type == "jpg" || $file_type == "gif") && $file_size < 25000) {
                // Move the uploaded file to the "fileupload" folder with a unique filename
                $unique_filename = uniqid() . "." . $file_type;
                $target_path = $target_dir . $unique_filename;

                move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_path);

                // Display file details
                echo "<p>File Name: " . $_FILES["fileToUpload"]["name"] . "</p>";
                echo "<p>File Type: " . $file_type . "</p>";
                echo "<p>File Size: " . $file_size . " bytes</p>";
                echo "<p>File successfully uploaded and saved as: " . $unique_filename . "</p>";
            } else {
                echo "<p>Invalid file. Please upload a .jpg or .gif file with a size less than 25KB.</p>";
            }
        } else {
            echo "<p>Error uploading file.</p>";
        }
    }
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required>
        <br>
        <input type="submit" value="Upload File">
    </form>
</body>
</html>
