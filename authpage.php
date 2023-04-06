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
      <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}">

      <input type="submit" value="Login">
    </form>
  </div>
  </body>
</html>
