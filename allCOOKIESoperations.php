<?php
// Set a cookie with name 'user' and value 'JohnDoe'
setcookie("user", "JohnDoe", time() + (86400 * 30), "/"); // 86400 = 1 day

// Accessing cookie
if(isset($_COOKIE['user'])) {
    echo "User cookie value: " . $_COOKIE['user'];
} else {
    echo "User cookie not set!";
}

// Deleting cookie
if(isset($_COOKIE['user'])) {
    setcookie("user", "", time() - 3600, "/"); // Set expiration time to past to delete
    echo "<br>Cookie 'user' is deleted.";
} else {
    echo "<br>Cookie 'user' not found!";
}
?>
