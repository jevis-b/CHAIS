<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cancer Health Care Intergrated System</title>
</head>
<body>
<div class="center">
      <h1>Login</h1>
      <form  action="./process/process.login.php" method="post">
        <div class="txt_field">
          <input type="text" name="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="submit_login" value="Login">
        <div class="signup_link"> <a href="./register.php">Click here to Register</a>
        </div>
      </form>
    </div> 
</body>
</html>