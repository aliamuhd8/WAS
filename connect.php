<?php
$host = "localhost"; // Change this if your database server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "assignment1"; // Change this to the name of your MySQL database

// Start a PHP session
session_start();

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $input_username = $_POST["username"];
    $input_password = $_POST["password"];

    // Sanitize the input to prevent SQL injection attacks
    $input_username = mysqli_real_escape_string($conn, $input_username);
    $input_password = mysqli_real_escape_string($conn, $input_password);

    // Hash the input password using SHA-1 algorithm
    $hashed_password = sha1($input_password);

    // Check if the input values match the values stored in the database
    $sql = "SELECT * FROM login WHERE username='$input_username' AND password='$hashed_password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        // Store the username and password in session variables
        $row = mysqli_fetch_assoc($result);
        $_SESSION["username"] = $row["username"];
        $_SESSION["password"] = $row["password"];
       

        // Redirect the user to page
        header("Location: studentdetails.php");
        exit;
    } else {
        // Display an error message
        echo '<script>alert("Invalid username or password. Please try again."); window.location.href="authpage.php";</script>';
    }

}

// Close the database connection
mysqli_close($conn);
?>
