<?php
// Retrieve user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate user credentials
    $validUsername = 'randol'; // Set your desired username
    $validPassword = 'Randol205!'; // Set your desired password

    if ($username === $validUsername && $password === $validPassword) {
        // Authentication successful
        header('Location: https://example.com');
        exit;
    } else {
        echo 'Invalid username or password. Please try again.';
    }
}
?>