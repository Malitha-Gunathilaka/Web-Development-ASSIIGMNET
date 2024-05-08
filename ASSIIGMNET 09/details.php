<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <h2>User Details</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Password:</strong> $password</p>";
    } else {
        echo "<p>No data submitted</p>";
    }
    ?>
</body>
</html>
