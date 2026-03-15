<?php
    session_start(); // Add this line to start the session
?>

<html>
<head>
    <title>Haribon Matrix</title>
    <link rel="shortcut icon" type="image" href="logo.png" />
    <link rel="stylesheet" type="text/css" href="styles.css">  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="container">
    <div class = "shape">
    <form action="process-login.php" method="POST">
      <label for="email"><b>Email Address</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" placeholder="Email Address" name="email" required>
      <br><br>
      <label for="psw"><b>Password</b></label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="password" placeholder="Enter Password" name="password" required>
      <br>
      <div class="forgot">
        <a style="text-decoration: none" href="forgotpass.php" alt="forgot"><h3>Forgot Password?<h3></a>
      </div>
      <button class="submit" type="submit">Login</button>
      <a style="text-decoration: none" href="create.account.php"><br><h2>Sign-up</h2></a>
    </form>
  </div>
</div>
  <script src="index.js"></script>
</body>
</html>
