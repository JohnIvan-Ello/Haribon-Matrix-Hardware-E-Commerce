<?php
    session_start();

    // Check if the user is logged in
    if (!isset($_SESSION['user_id'])) {
        // Redirect to the login page or display an error message
        header('Location: ../signinsignup.php');
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

    // Retrieve the user's profile information from the database
    $selectQuery = "SELECT * FROM users WHERE user_id = $user_id";
    $result = $conn->query($selectQuery);

    if ($result->num_rows > 0) {
        // User found in the database, retrieve the profile information
        $row = $result->fetch_assoc();
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $middle_name = $row['middle_name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $day = $row['dob_day'];
        $month = $row['dob_month'];
        $year = $row['dob_year'];


        // Close the database connection
        $conn->close();
    } else {
        // User not found in the database, display an error message or redirect to a different page
        echo "User not found.";
        exit();
    }
    ?>
    <html>
    <head>
        <title>User Profile</title>
        <link rel="shortcut icon" type="image" href="logo.png" />
        <?php require 'dashboard.php'; ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <style>
        * {
  box-sizing:border-box;
}

body {
    background-image: url('bg (3).jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    overflow: hidden;
  margin:0;
}

input, select {
  padding:5px 10px;
}

form {
  display: flex;
  flex-direction:column;
  width: min(800px, 100% - 50px);
  margin-inline:auto;
  gap:10px;
  padding: 10px;
  margin-top:100px;
}

form .form-group {
  display: flex;
  flex-direction:column;
}

form button {
  align-self:center;
}

fieldset .inputs {
  display: flex;
  gap:10px;
}

fieldset .inputs input {
  flex:1;
}

.profile-container label {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  font-family: "League Spartan";
  font-size: 20px;
}

form label {
  color:white;
}

form legend {
  color:white;
}

.profile-container button {
                border: 1px solid #4CAF50;
                padding: 10px;
                border-radius: 10px;
                background: #4CAF50;
                font-family: "League Spartan";
                font-size: 1.2em;
                color: white;
                transition: 100ms;
            }

            .profile-container button:hover {
                background-color: #204D22;
                border: 1px solid #204D22;
            }

.profile-container{
  display: flex;
  align-items: center;
  margin-bottom: 10px;
  margin-top: 50px;
}

.profile-container h1{
                font-family: "League Spartan";
                font-size: 5em;
                color: #FFAC20;
                position: absolute;
                top: 180px;
                right: 735px
            }


        </style>

        <script>
            function showEditForm() {
                document.getElementById('profile-info').style.display = 'none';
                document.getElementById('edit-form').style.display = 'flex';
            }

            function saveProfile() {
                var firstName = document.getElementById('firstName').value;
                var lastName = document.getElementById('lastName').value;
                var middleName = document.getElementById('middleName').value;
                var email = document.getElementById('email').value;
                var phoneNumber = document.getElementById('phoneNumber').value;
                var gender = document.querySelector('input[name="gender"]:checked').value;
                var day = document.getElementById('day').value;
                var month = document.getElementById('month').options[document.getElementById('month').selectedIndex].text;
                var year = document.getElementById('year').value;

                document.getElementById('first_name-label').textContent = firstName;
                document.getElementById('last_name-label').textContent = lastName;
                document.getElementById('middle_name-label').textContent = middleName;
                document.getElementById('email-label').textContent = email;
                document.getElementById('phone-label').textContent = phoneNumber;
                document.getElementById('gender-label').textContent = gender;
                document.getElementById('birthday-label').textContent = day + ' ' + month + ' ' + year;

                document.getElementById('profile-info').style.display = 'inline-block';
                document.getElementById('edit-form').style.display = 'none';
            }
        </script>
    </head>

    <body>
        <div class="container">
        <div class="profile-container">
                <h1>EDIT PROFILE</h1>
                <form method="POST" action="update_profile.php">
  <div class="form-group">
    <label for="firstName">First Name</label>
    <input type="text" name="firstName" id="firstName" value="<?php echo $first_name; ?>" required>
  </div>

  <div class="form-group">
    <label for="lastName">Last Name</label>
    <input type="text" name="lastName" id="lastName" value="<?php echo $last_name; ?>" required>
  </div>

  <div class="form-group">
    <label for="middleName">Middle Name</label>
    <input type="text" name="middleName" id="middleName" value="<?php echo $middle_name; ?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="<?php echo $email; ?>" required>
  </div>

  <div class="form-group">
    <label for="phoneNumber">Phone Number</label>
    <input type="tel" name="phoneNumber" id="phoneNumber" value="<?php echo $phone; ?>" required>
  </div>

  <label for="gender">Gender</label>
    <select name="gender" id="gender" required>
        <option value="male" <?php if ($gender === 'male') echo 'selected'; ?>>Male</option>
        <option value="female" <?php if ($gender === 'female') echo 'selected'; ?>>Female</option>
        <option value="other" <?php if ($gender === 'other') echo 'selected'; ?>>Other</option>
    </select>

  <fieldset>
    <legend>Date of Birth</legend>
    <div class="inputs">
      <input type="number" name="day" id="day" min="1" max="31" value="<?php echo $day; ?>" required>
      <input type="number" name="month" id="month" min="1" max="12" value="<?php echo $month; ?>" required>
      <input type="number" name="year" id="year" min="1900" max="2023" value="<?php echo $year; ?>" required>
    </div>
  </fieldset>

  <button type="submit">Update Profile</button>
</form>

            </div>
        </div>
    </body>
    </html>