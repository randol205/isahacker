<?php
// Establish database connection

// ... (database connection code)

// Check for form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the submitted data
    $errors = [];

    // Validate username
    if (empty($username)) {
        $errors[] = 'Username is required.';
    }

    // Validate password
    if (empty($password)) {
        $errors[] = 'Password is required.';
    }

    // If there are no validation errors
    if (empty($errors)) {
        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Store the credentials in the database
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$hashedPassword')";
        $result = $connection->query($query);

        if ($result) {
            echo 'Registration successful! You can now log in.';
        } else {
            echo 'Error: ' . $connection->error;
        }
    } else {
        // If there are validation errors, display them to the user
        foreach ($errors as $error) {
            echo $error . '<br>';
        }
    }
}

// Close the database connection

// ... (database connection closing code)
?>