<!DOCTYPE html>
<html>
  <head>
    <title>Student Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
   <div class="container">
     <h2><strong> A.Student Details </strong></h2><br>
    </div>
   <div class="form">
      <form action="process.php" method="post">
       <label for="name">Name(Legal/Official)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </label>
        <input type="text" id="name" name="student_name" pattern="[a-zA-Z ]+" required><br><br>
        <label for="matricno">Matric No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;	&nbsp;&nbsp;	&nbsp;	&nbsp; :</label>
        <input type="tel" id="matricno" name="matric_no" pattern="[0-9]{7}"  required ><br><br>
        <label for="currentaddress">Current Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" id="currentaddress" name="current_Address" pattern="^[a-zA-Z0-9_\-.!,\s]*$" required><br><br>
        <label for="homeaddress">Home Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="text" id="homeaddress" name="home_Address" pattern="^[a-zA-Z0-9_\-.!,\s]*$" required><br><br>
        <label for="email-address">Email Address(Gmail Account) &nbsp&nbsp;&nbsp;:</label>
        <input type="email" id="email-address" name="email_address" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"><br><br>
        <label for="mobile-number">Mobile Phone No &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="tel" id="mobile-number" name="mobile_number" pattern="[0-9]{10}"  required ><br><br>
        <label for="home-number">Home Phone No (Emergency) &nbsp;&nbsp;&nbsp;&nbsp;:</label>
        <input type="tel" id="home-number" name="home_number" pattern="[0-9]{10}" required ><br><br>
        <input type="submit" value="Submit"><br>
      </form>
    </div>
  </body>
</html>

