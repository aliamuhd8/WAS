<!DOCTYPE html>
<html>
  <head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="authpage.css">
  </head>
  <body>
    <div class="container">
    <h1>Login Page</h1>
    <form method="post" action="connect.php">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]{4,16}">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#_-$%^&*]).{8,}">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <input type="submit" name="login" value="Login">
      <input type="submit" name="request_otp" value="Request OTP">
    </form>
  </div>
  </body>
</html>
