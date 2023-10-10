<?php
// Valid username and password
$validUsername = 'myusername';
$validPassword = 'mypassword';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password
    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        header('Location: dashboard.php'); // Redirect to the dashboard page
        exit; // Make sure to exit the script after the redirect
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>