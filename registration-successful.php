<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrarion Successful</title>
</head>

<body>
<?php
require "config.php";
include "profile-pic.php"; 

$username = $_POST["first_name"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$occupation = $_POST["occupation"];
$department = $_POST["department"];
$mobile = $_POST["mobile"];
$office_line = $_POST["office_line"];
$date_of_birth = $_POST["date_of_birth"];
$email = $_POST["email"];
$interest = $_POST["interest"];
$country = $_POST["country"];
$date_of_hire = $_POST["date_of_hire"];
$status = $_POST["status"]; 
$profile_pic = $target_file;
$employee_type = $_POST["employee_type"];

$query = "INSERT INTO users (username, first_name, last_name, age, gender, occupation, department, mobile, office_line, interest, country, date_of_hire, employee_type, profile_pic) 
							VALUES
							('$username', '$first_name', '$last_name', '$age', '$gender', '$occupation', '$department', '$mobile', '$office_line', '$interest', '$country', '$date_of_hire', '$employee_type', '$profile_pic')";
		
$result = mysqli_query($conn, $query);
//echo $office_line;
	
?>
<?php include "header.html"; ?>
	<h1>Registration Successful..</h2>
	<p>Hello <?=  ucwords($first_name) . " " . ucwords($last_name); ?>, you're registered.</p>
	<p>Go to <a href="index.php">Home Page</a> to Login</p>
<?php include "footer.html"; ?>
</body>

</html>