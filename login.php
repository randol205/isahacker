<?php
// Simulating user credentials stored in a database
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
        echo 'Login successful! Redirecting to the dashboard...';
        // Perform any additional actions or redirect the user to the desired page
        // e.g., header('Location: dashboard.php');
    } else {
        // Authentication failed
        echo 'Invalid username or password. Please try again.';
    }
}
?>