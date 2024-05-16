<?php
// Start the session
session_start();

// Register session variables
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john@example.com';

// Modify session variable
$_SESSION['username'] = 'JaneDoe';

// Display entire session
echo "Entire Session:<br>";
foreach ($_SESSION as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

// Unset a specific session variable
unset($_SESSION['email']);

// Display modified session
echo "<br>Modified Session:<br>";
foreach ($_SESSION as $key => $value) {
    echo $key . " = " . $value . "<br>";
}

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Check if session is destroyed
if(session_status() === PHP_SESSION_NONE) {
    echo "<br>Session has been destroyed.";
} else {
    echo "<br>Session still exists.";
}
?>
