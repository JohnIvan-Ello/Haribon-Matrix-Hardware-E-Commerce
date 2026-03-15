<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_table";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$contactNumber = $_POST['contact_number'];
$deliveryAddress = $_POST['delivery_address'];
$info = $_POST['additional_notes'];

// Check if the user already exists in the database
$userQuery = "SELECT user_id FROM users WHERE email = '$email'";
$userResult = $conn->query($userQuery);

if ($userResult->num_rows > 0) {
    // User already exists, retrieve the user ID
    $row = $userResult->fetch_assoc();
    $userId = $row['user_id'];
} else {
    // User does not exist, insert the user into the users table
    $insertUserQuery = "INSERT INTO users (email, contact_number) VALUES ('$email', '$contact_number')";
    if ($conn->query($insertUserQuery) === TRUE) {
        // Retrieve the inserted user's ID
        $userId = $conn->insert_id;
    } else {
        echo "Error creating user: " . $conn->error;
        exit;
    }
}

// Insert the order into the orders table
$insertOrderQuery = "INSERT INTO orders (email, contact_number, delivery_address, additional_notes) VALUES ('$email', '$contactNumber', '$deliveryAddress', '$info')";
if ($conn->query($insertOrderQuery) === TRUE) {
    header("Location: ude.php");
} else {
    echo "Error placing order: " . $conn->error;
}

$conn->close();
?>