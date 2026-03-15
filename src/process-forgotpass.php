<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $email = $_POST["email"] ?? "";
  $phone = $_POST["phone"] ?? "";
  $newPassword = $_POST["newPassword"] ?? "";

  // Validate the form data (e.g., check required fields, validate email format, etc.)

  // Create a MySQL connection
  $servername = "localhost";
  $username = "root";
  $dbpassword = "";
  $dbname = "user_table";

  $conn = new mysqli($servername, $username, $dbpassword, $dbname);

  // Check the connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // Hash the new password
  $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

  // Prepare and execute the SQL statement to update the password
  $updateSql = "UPDATE users SET password = ? WHERE email = ? AND phone = ?";
  $updateStmt = $conn->prepare($updateSql);
  $updateStmt->bind_param("sss", $hashedPassword, $email, $phone);
  $updateStmt->execute();

  if ($updateStmt->affected_rows > 0) {
    echo "Password updated successfully!";
    // Redirect to the login page or any other desired page
    header("Location: signinsignup.php");
    exit;
  } else {
    header("Location: forgotpass.php");
  }

  $updateStmt->close();
  $conn->close();
}
?>
