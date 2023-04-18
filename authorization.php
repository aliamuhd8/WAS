<?php
// Start a PHP session
session_start();

// Check if user is not authenticated, redirect to login page
if (!isset($_SESSION["username"]) || !isset($_SESSION["password"])) {
    header("Location: authpage.php");
    exit;
}

// Connect to MySQL
$host = "localhost"; // Change this if your database server is on a different host
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "assignment1"; // Change this to the name of your MySQL database
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user information from the database
$username = $_SESSION["username"];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

// Check user role and set permissions
$role = $row["role"];
if ($role == "guest") {
    $can_view = true;
    $can_insert = false;
    $can_update = false;
    $can_delete = false;
} else if ($role == "user") {
    $can_view = true;
    $can_insert = true;
    $can_update = true;
    $can_delete = true;
} else if ($role == "admin") {
    $can_view = true;
    $can_insert = true;
    $can_update = true;
    $can_delete = true;
} else {
    // Invalid role, redirect to login page
    header("Location: authpage.php");
    exit;
}

// Check if user has permission to access this page
$page = basename($_SERVER["SCRIPT_NAME"]);
if ($page == "authpage.php" && $role != "guest") {
    header("Location: studentdetails.php");
    exit;
} else if ($page == "studentdetails.php" && !$can_view) {
    header("Location: authpage.php");
    exit;
} else if ($page == "insert.php" && !$can_insert) {
    header("Location: studentdetails.php");
    exit;
} else if ($page == "update.php" && !$can_update) {
    header("Location: studentdetails.php");
    exit;
} else if ($page == "delete.php" && !$can_delete) {
    header("Location: studentdetails.php");
    exit;
}

// Close the database connection
mysqli_close($conn);
?>
