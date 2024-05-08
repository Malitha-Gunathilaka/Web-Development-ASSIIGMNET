<?php
// Set the cookie with a 2-day expiration
$cookie_name = "AC_user1";
$cookie_value = "Harry Potter";
$expiration_time = time() + (2 * 24 * 60 * 60); // 2 days * 24 hours * 60 mins * 60 seconds

setcookie($cookie_name, $cookie_value, $expiration_time, "/");

// Check if the cookie is set
if (isset($_COOKIE[$cookie_name])) {
    // Print the message if the cookie is set
    $user_value = $_COOKIE[$cookie_name];
    echo "AC user1 is $user_value";
} else {
    // Print a message if no cookies are set
    echo "No cookies";
}
?>
