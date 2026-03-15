<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link rel="shortcut icon" type="image" href="logo.png" />
  <link rel="stylesheet" type="text/css" href="forgotpassstyle.css">  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat"> 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=League Spartan"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <div class="container">
  <a href="signinsignup.php"><img src="backarrow.png"></a>
    <form method="post" action="process-forgotpass.php">
      <label for="email"><b>Email Address</b></label>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="text" placeholder="Email Address" name="email" required>
      <br><br>
      <label for="phone"><b>Phone Number</b></label>
     &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="phone" placeholder="Enter Phone Number" name="phone" required>
      <br><br>
      <label for="newPassword"><b>New Password</b></label>
      &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
      <input type="password" placeholder="Enter New Password" name="newPassword" required>
      <br><br>
      <button onclick="myFunction(submit)">Submit</button>


      <script>
  function myFunction() {
  alert("Password changed successfully");
}
</script>

    </form>
  </div>
</body>
</html>
