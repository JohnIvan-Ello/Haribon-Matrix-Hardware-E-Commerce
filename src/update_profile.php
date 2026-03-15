<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page or display an error message
    header('Location: signinsignup.php');
    exit();
}

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

// Retrieve the user ID from the session
$user_id = $_SESSION['user_id'];

// Retrieve the form data
$first_name = $_POST['firstName'];
$last_name = $_POST['lastName'];
$middle_name = $_POST['middleName'];
$email = $_POST['email'];
$phone = $_POST['phoneNumber'];
$gender = $_POST['gender'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];


// Update the user's profile in the database
$updateQuery = "UPDATE users SET first_name = ?, last_name = ?, middle_name = ?, email = ?, phone = ?, gender = ?, dob_day = ?, dob_month = ?, dob_year = ? WHERE user_id = ?";

$stmt = $conn->prepare($updateQuery);
$stmt->bind_param("sssssssssi", $first_name, $last_name, $middle_name, $email, $phone, $gender, $day, $month, $year, $user_id);

if ($stmt->execute()) {
    // Profile updated successfully
    header('Location: profile.php');
    exit();
} else {
    // Handle the case when the update fails
    echo 'Error updating profile: ' . $conn->error;
}


// Close the database connection
$stmt->close();
$conn->close();
