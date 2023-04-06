<!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="authpage.css">
  </head>
  <body>
    <div class="container">
    <h1>Registration Page</h1>
    <form method="post" action="registerdb.php">
       
      <label for="name">Full name:</label>
      <input type="text" id="name" name="name" required pattern="[a-zA-Z ]+" title="Please enter a valid full name">
 
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required pattern="[a-zA-Z0-9]{4,16}" title="Please enter a username between 4 and 16 characters that contains only letters and numbers.">

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@_-#$%^&*]).{8,}" title="Please enter a password that is at least 8 characters long and contains at least one uppercase letter, one lowercase letter, one number, and one special character.">

      <input type="submit" value="Login">
      <p>Already have an account? <a href="authpage.php">Login here.</a></p>
    </form>
  </div>
  </body>
</html>
