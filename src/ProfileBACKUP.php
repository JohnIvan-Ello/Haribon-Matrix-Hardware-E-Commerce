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
    body {
                margin: 0;
                padding: 0;
                background-image: url('bg (3).jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: 100% 100%;
                overflow: hidden;
                align-items: center;
                justify-content: center;
                font-family: "League Spartan";
        
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }

            .profile-container {
                padding: 20px;
                border-radius: 10px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 600px;
                width: 1000px; 
                position: absolute;
                bottom : 20px;
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

            .profile-container h1{
                font-family: "League Spartan";
                font-size: 5em;
                color: white;
                position: absolute;
                top: -100px;
            }

            .profile-info {
                display: inline-block;
                margin: 10px;
                font-size: 35px;
                color:#FFAC20;
            
            }

            .profile-container label {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                font-family: "League Spartan";
                font-size: 20px;
            }

            .edit-button {
                background-color: #105652;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                margin-top: 10px;
                transition: 500ms;
                font-size: 20px;
                font-weight: 600;
                position: relative;
                left: 250px;
                
            }
            .edit-button:hover {
                background: #FFAC20;
                color: floralwhite;
                scale: 10px;
            }

            .edit-form {
                display: none;
                flex-direction: column;
                color:#FFAC20;
            }

            .edit-form .input-container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 10px;
            }

                .edit-form .input-container label {
                    font-weight: bold;
                    width: 200px;
                    font-size: 25px;
                }

                .edit-form .input-container input {
                    flex: 1;
                    padding: 5px;
                    border-radius: 3px;
                    border: 1px solid #ccc;
                    font-size: 20px;
                    width: 250px;
                }

                    .edit-form input[type="submit"] {
                        background-color: #105652;
                        color: white;
                        padding: 10px 20px;
                        border: none;
                        border-radius: 10px;
                        cursor: pointer;
                    }

            .box{
                font-size: 30px;
                color: white;
                width: 500px;
                margin-left: 200px;
                display: flex;
                position: relative;
                bottom: 30px;
                left: 40px;

                
            
            }

            #save-button{
                margin-top: 10px;
                transition: 500ms;
                font-size: 15px;
                font-weight: 600;
            }
            #save-button:hover{
                background: #FFAC20;
                color: floralwhite;
                scale: 10px;
            }

            .gender-container {
            display: flex;
            align-items: center;
            margin-top: 40px;
            font-weight: bold;
            font-size: 25px;
        
        }
            .gender-label {
            margin-right: 100px; 
            
        }
            .gender-container input[type="radio"] {
            width: 20px;
            height: 20px;
            margin: auto 20px;
            cursor: pointer;
        
    }

            select {
                padding: 8px;
                font-size: 14px;
                width: 140px;
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
        <label for="firstName">First Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="firstName" id="firstName" value="<?php echo $first_name; ?>" required><br></label>

        <label for="lastName">Last Name  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" name="lastName" id="lastName" value="<?php echo $last_name; ?>" required><br></label> 

        <label for="middleName">Middle Name  &nbsp&nbsp&nbsp&nbsp
        <input type="text" name="middleName" id="middleName" value="<?php echo $middle_name; ?>"><br> </label>

        <label for="email">Email  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="email" name="email" id="email" value="<?php echo $email; ?>" required><br> </label>

        <label for="phoneNumber">Phone Number  &nbsp&nbsp
        <input type="tel" name="phoneNumber" id="phoneNumber" value="<?php echo $phone; ?>" required><br> </label>

        <label for="gender">Gender  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
        <select name="gender" id="gender" required>
            <option value="male" <?php if ($gender === 'male') echo 'selected'; ?>>Male</option>
            <option value="female" <?php if ($gender === 'female') echo 'selected'; ?>>Female</option>
            <option value="other" <?php if ($gender === 'other') echo 'selected'; ?>>Other</option>
        </select></label><br>

        <label for="dob">Date of Birth
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="number" name="day" id="day" min="1" max="31" value="<?php echo $day; ?>" required>
        <input type="number" name="month" id="month" min="1" max="12" value="<?php echo $month; ?>" required>
        <input type="number" name="year" id="year" min="1900" max="2023" value="<?php echo $year; ?>" required><br></label>



                    <button type="submit">Update Profile</button>
                </form>
            </div>
        </div>
    </body>
    </html>
