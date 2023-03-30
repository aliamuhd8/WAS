<?php
$name_regex = "/^[a-zA-Z ]+$/";
$matric_no_regex = "/^[a-zA-Z0-9]+$/";
$email_regex = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$phone_regex = "/^\d{10}$/";

$name = preg_match($name_regex, $_POST['student_name']) ? $_POST['student_name'] : '';
$matric_no = preg_match($matric_no_regex, $_POST['matric_no']) ? $_POST['matric_no'] : '';
$current_address = str_replace("<", "&lt;", $_POST['current_Address']);
$current_address = str_replace(">", "&gt;", $current_address);
$current_address = str_replace('"', '&quot;', $current_address);
$current_address = str_replace("'", '&#39;', $current_address);
$current_address = str_replace("&", "&amp;", $current_address);
$home_address = str_replace("<", "&lt;", $_POST['home_Address']);
$home_address = str_replace(">", "&gt;", $home_address);
$home_address = str_replace('"', '&quot;', $home_address);
$home_address = str_replace("'", '&#39;', $home_address);
$home_address = str_replace("&", "&amp;", $home_address);
$email_address = preg_match($email_regex, $_POST['email_address']) ? $_POST['email_address'] : '';
$mobile_number = preg_match($phone_regex, $_POST['mobile_number']) ? $_POST['mobile_number'] : '';
$home_number = preg_match($phone_regex, $_POST['home_number']) ? $_POST['home_number'] : '';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Submitted Details</title>
	<link rel="stylesheet" type="text/css" href="stylesubmit.css">
</head>
<body>
	<div class="container">
		<h2><strong> B.Submitted Details </strong></h2><br>
	</div>
	<div class="submittedform">
		<p><strong>Name: </strong><?php echo $name; ?></p>
		<p><strong>Matric No: </strong><?php echo $matric_no; ?></p>
		<p><strong>Current Address: </strong><?php echo $current_address; ?></p>
		<p><strong>Home Address: </strong><?php echo $home_address; ?></p>
		<p><strong>Email Address: </strong><?php echo $email_address; ?></p>
		<p><strong>Mobile Phone No: </strong><?php echo $mobile_number; ?></p>
		<p><strong>Home Phone No (Emergency): </strong><?php echo $home_number; ?></p>
	</div>
</body>
</html>
