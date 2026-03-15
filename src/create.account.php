<!DOCTYPE html>
<html>
<head>
  <title>Account Creation</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=League Spartan"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'dashboard.php';?>
  <style>
    body {
      background-image: url('signinbg.jpg');
      background-repeat: no-repeat;
      background-size: 100%,100%;
      font-family: "Montserrat", sans-serif;
    }

    .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: auto;
      font-family: "League Spartan";
      position: absolute;
      right: 420px;
      top: 300px;
    }

    .container h2 {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: auto;
      font-family: "League Spartan";
      position: absolute;
      right: 250px;
      top: -70px;
    }

    h2 {
      font-size: 70px;
      color: #ffaa19;
      font-style: arial;
      margin-right: 130px;
    }

    form {
      width: 999px;
      background-color: transparent;
      display: flex;
      flex-direction: column;
      align-items: center;
      border: none;
    }

    label {
      display: block;
      color: white;
      font-weight: bold;
      margin-top: 20px;
      font-size: 18px;
    }

    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="date"],
    input[type="text"] {
      width: 80%;
      height: 30px;
      padding: 8px;
      background-color: #08271f;
      color: #fff;
      border: 1px solid #fff;
      margin-top: 8px;
      font-size: 14px;
      border-radius: 4px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 20px;
      margin-right: 120px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #204D22;
    }

    .form-row {
      display: flex;
      align-items: center;
      width: 80%;
      margin-bottom: 15px;
    }

    .form-row > div {
      width: 100%;
      display: flex;
      align-items: center;
    }

    .form-row > div:nth-child(1) {
      margin-right: 5%;
    }

    .form-row > div:nth-child(2) {
      margin-left: 5%;
    }

    .form-row-bottom {
      margin-top: 20px;
    }

    .form-row-bottom select {
      width: 50%;
      height: 30px;
      font-size: 14px;
    }

    .form-row input[type="radio"] {
      margin-right: 5px;
    }

    .form-row .gender-checkbox {
      display: flex;
      margin-top: auto;
      margin-left: auto;
    }

    .form-row .gender-checkbox label {
      margin-right: 20px;
      color: white;
      font-weight: bold;
      margin-top: -15px;
    }

    .dob-inputs input[type="text"] {
      width: 30px;
      margin: 2px;
      margin-bottom: 30px;
      margin-right: 20px;
    }

    .dob-inputs span {
      font-size: 1.6em;
      color: white;
      position: relative;
      right: 10px;
      top: -10px;
    }

    input[required] {
      position: relative;
    }

  </style>
</head>
<body>
<div class="container">
  <form action="process-form.php" method="POST">
    <h2>CREATE ACCOUNT</h2>

    <div class="form-row">
      <div>
        <label for="firstName" class="required-label">FIRST NAME</label>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="first_name" name="first_name" required placeholder="FIRST NAME">
      </div>

      <div>
        <label for="lastName" class="required-label">LAST NAME</label> 
        <input type="text" id="last_name" name="last_name" required placeholder="LAST NAME">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="middleName">MIDDLE NAME</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="text" id="middle_name" name="middle_name" placeholder="MIDDLE NAME"> 
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="email" class="required-label">EMAIL</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="email" id="email" name="email" required placeholder="EMAIL">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="phone" class="required-label">PHONE NUMBER</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="tel" id="phone" name="phone" required placeholder="PHONE NUMBER">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="password" class="required-label">PASSWORD</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <input type="password" id="password" name="password" required placeholder="PASSWORD">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="confirmPassword" class="required-label">CONFIRM PASSWORD</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required placeholder="CONFIRM PASSWORD">
      </div>
    </div>

    <div class="form-row">
      <label for="gender" class="required-label">GENDER:</label>
      <div class="gender-checkbox">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <label for="male"><input type="radio" name="gender" id="male" value="male"> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="female"> Female</label>
        <label for="other"><input type="radio" name="gender" id="other" value="other"> PREFER NOT TO SAY</label>
      </div>
    </div>

    <div class="form-row">
      <label for="dob" class="dob-label">DATE OF BIRTH: *</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <div class="dob-inputs">
        <label for="dob_month">Month:</label>
        <select name="dob_month" id="dob_month">
          <option value="1">January</option>
          <option value="2">February</option>
          <option value="3">March</option>
          <option value="4">April</option>
          <option value="5">May</option>
          <option value="6">June</option>
          <option value="7">July</option>
          <option value="8">August</option>
          <option value="9">September</option>
          <option value="10">October</option>
          <option value="11">November</option>
          <option value="12">December</option>
        </select>

        <label for="dob_day">Day:</label>
        <input type="number" name="dob_day" id="dob_day" min="1" max="31" required>

        <label for="dob_year">Year:</label>
        <input type="number" name="dob_year" id="dob_year" min="1900" max="2023" required>
      </div>
    </div>

    <input type="submit" value="Sign Up">
  </form>
</div>
</body>
</html>
