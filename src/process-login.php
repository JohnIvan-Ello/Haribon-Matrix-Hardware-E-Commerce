<?php
session_start();

// Database configuration
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'user_table';

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Process the login form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Perform user authentication using the provided email
    $authQuery = "SELECT user_id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($authQuery);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Retrieve the stored password
        $row = $result->fetch_assoc();
        $storedPassword = $row['password'];

        // Verify the password
        if (password_verify($password, $storedPassword)) {
            // Authentication successful
            $_SESSION['user_id'] = $row['user_id'];
            header('Location: index.php'); // Redirect to the home page or dashboard
            exit();
        }
    }

    // Authentication failed, display an error message or redirect to a different page
    echo "Invalid email or password";

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>
