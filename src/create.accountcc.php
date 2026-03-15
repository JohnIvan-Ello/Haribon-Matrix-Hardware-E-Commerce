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
    }

    .container{
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      margin: auto;
      font-family: "League Spartan";
      position: absolute;
      right: 350px;
      top: 300px;
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
    }

    .dob-label {
      white-space: nowrap; 
      text-overflow: ellipsis;
      margin-bottom: 50px;
    }

    input[type="text"] {

    width: 80%;
      height: 20px;
      padding: 8px;
      background-color: #08271f;
      color: #fff;
      border: 1px solid #fff;
      margin-top:8px;
    }
    input[type="email"],
    input[type="tel"],
    input[type="password"],
    input[type="date"] {

    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      margin-top: 10px;
      margin-right: 120px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    #middleName {
      width: 40%; 
    }

    #lastName {
      margin-right: 10px;
      width: 60%;
    }

    .form-row {
      display: flex;
      align-items: center;
      width: 80%;
      margin-bottom: 5px;
    }

    .form-row > div {
      width: 100%;
      display: flex;
      align-items: center;
    }

    .form-row > div:nth-child(1) {
      margin-right: 0%;
    }

    .form-row > div:nth-child(2) {
      margin-left: 0%;
    }

    .form-row-bottom {
      margin-top: 20px;
    }

    .form-row-bottom select {
      width: 50%;
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

    .dob-inputs span{
      font-size: 1.6em;
      color: white;
      position: relative;
      right: 10px;
      top: -10px
    }

    input[required] {
      position: relative;
    }
  </style>
</head>
<body>
  <form action="process-form.php" method="POST">
    <h2>CREATE ACCOUNT</h2>

    <div class="form-row">
      <div>
        <label for="firstName" class="required-label"></label>
        <input type="text" id="firstName" required placeholder="FIRST NAME*" required>
      </div>
      
      <div>
        <label for="lastName" class="required-label"></label>
        <input type="text" id="lastName" required placeholder="LAST NAME *" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="middleName"></label>
        <input type="text" id="middleName" required placeholder="MIDDLE NAME" class="middle-name-input">
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="email" class="required-label"></label>
        <input type="email" id="email" required placeholder="EMAIL *" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="phone" class="required-label"></label>
        <input type="tel" id="phone" required placeholder="PHONE NUMBER *" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="password" class="required-label"></label>
        <input type="password" id="password" required placeholder="PASSWORD *" required>
      </div>
    </div>

    <div class="form-row">
      <div>
        <label for="confirmPassword" class="required-label"></label>
        <input type="password" id="confirmPassword" required placeholder="CONFIRM PASSWORD *" required>
      </div>
    </div>
    
    <div class="form-row">
      <label for="gender" class="required-label">GENDER:* </label>
      <div class="gender-checkbox">
        <div></div>
        <label for="male"><input type="radio" name="gender" id="male" value="male"> Male</label>
        <label for="female"><input type="radio" name="gender" id="female" value="female"> Female</label>
        <label for="other"><input type="radio" name="gender" id="other" value="other"> PREFER NOT TO SAY</label>
      </div>
    </div>
    
    <div class="form-row">
      <label for="dob" class="dob-label">DATE OF BIRTH: *</label>
      <div class="dob-inputs">
        <input type="text" id="dobMonth" name="dobMonth" required placeholder="MM">
        <span>/</span>
        <input type="text" id="dobDay" name="dobDay" required placeholder="DD">
        <span>/</span>
        <input type="text" id="dobYear" name="dobYear" required placeholder="YYYY">
        
      </div>
    </div>

    <input type="submit" value="Sign Up">
  </form>
</body>
</html>