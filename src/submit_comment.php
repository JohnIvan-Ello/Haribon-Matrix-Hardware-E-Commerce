<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_table";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the form data

$email = $_POST['email'];
$comment = $_POST['comment'];

// Prepare and execute the SQL query to get the user ID based on the email
$userQuery = "SELECT user_id FROM users WHERE email = '$email'";
$userResult = $conn->query($userQuery);
if ($userResult->num_rows > 0) {
    $row = $userResult->fetch_assoc();
    $user_id = $row['user_id'];

    // Prepare and execute the SQL query to insert the feedback into the feedbacktb table
    $feedbackQuery = "INSERT INTO feedbacktb (email, user_id, comment) VALUES ('$email', '$user_id', '$comment')";
    if ($conn->query($feedbackQuery) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $feedbackQuery . "<br>" . $conn->error;
    }
} else {
    echo "User not found!";
}

$conn->close();
?>
