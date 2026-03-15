<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $firstName = $_POST["first_name"] ?? "";
  $lastName = $_POST["last_name"] ?? "";
  $middleName = $_POST["middle_name"] ?? "";
  $email = $_POST["email"] ?? "";
  $phone = $_POST["phone"] ?? "";
  $password = $_POST["password"] ?? "";
  $confirmPassword = $_POST["confirmPassword"] ?? "";
  $gender = $_POST["gender"] ?? "";
  $dob_month = $_POST["dob_month"] ?? "";
  $dob_day = $_POST["dob_day"] ?? "";
  $dob_year = $_POST["dob_year"] ?? "";

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

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  // Prepare and execute the SQL statement to insert the user data
  $sql = "INSERT INTO users (first_name, last_name, middle_name, email, phone, password, gender, dob_month, dob_day, dob_year)
          VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssssssss", $firstName, $lastName, $middleName, $email, $phone, $hashedPassword, $gender, $dob_month, $dob_day, $dob_year);

  $stmt->execute();

  if ($stmt->affected_rows > 0) {
    echo "Account created successfully!";
    // Redirect to the login page
    header("Location: signinsignup.php");
    exit;
  } else {
    echo "Failed to create account.";
  }

  $stmt->close();
  $conn->close();
}
?>
