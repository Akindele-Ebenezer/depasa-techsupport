<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>My Dashboard - DEPASA</title>
	<link rel="stylesheet" href="styles.css">
	<style>
		#footer {
			margin-top: -18rem;
		}
		
		#top-nav li:first-child { 
			background: lightyellow;  
		}   

		@media (max-width: 1188px) {  
			#footer {
				margin-top: -18rem; 
			} 
		} 
		 		
	</style>
</head>

<body>

<div id="main">
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<?php
include "config.php";   
$username = $_SESSION["username"];  
$sql2 = "SELECT * FROM users WHERE username = '$username';";
$query = mysqli_query($conn, $sql2);  
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
   
//print_r($result[0]["first_name"]); 
 
	class Employee {
		public $username;
		public $first_name;
		public $last_name;
		public $age;
		public $gender;
		public $occupation;
		public $department;
		public $mobile;
		public $office_line;
		public $date_of_birth;
		public $email;
		public $interest;
		public $country;
		public $date_of_hire;
		public $status;
		public $employee_type;
		public $profile_pic;
		private $new_password;
		private $confirm_password;
	}
	$user = new Employee();
	$user->username = $result[0]["username"];  
	$user->first_name = $result[0]["first_name"];  
	$user->last_name = $result[0]["last_name"];  
	//$user->email = $result[0]["username"];  
	$user->age = $result[0]["age"];  
	$user->gender = $result[0]["gender"]; 
	$user->occupation = $result[0]["occupation"];  
	$user->department = $result[0]["department"];  
	$user->mobile = $result[0]["mobile"];  
	$user->office_line = $result[0]["office_line"];  
	$user->date_of_birth = $result[0]["date_of_birth"];  
	$user->interest = $result[0]["interest"];  
	$user->country = $result[0]["country"];  
	$user->date_of_hire = $result[0]["date_of_hire"];  
	$user->status = $result[0]["employee_status"];  
	$user->employee_type = $result[0]["employee_type"];   
	$user->profile_pic = $result[0]["profile_pic"]; 	
	$date = date('l jS \of F Y');

?>

<?php include "header.html"; ?>

	
	<div id="welcome-wrapper"> 
			<img src="images/bg.jpg">
			<img src="images/bg.jpg">
			 
			<div id="welcome-text">
				<p>Welcome <?= "$user->first_name $user->last_name"; ?></p>
				<br>
				
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<button id="welcome-text-btn">Explore</button>
			</div>
			
			<div id="connect">
				<p>Are you having any issues on your DASHBOARD? If so...</p> 
				<button>Connect</button>
			</div> 
	</div>

	<div id="profile-wrapper">
		<h2>Today is <?= $date; ?></h2>
		<h2><?= $user->email; ?></h2>
			<div id="profile-content">
				<div class="dashboard">
					<ul>
						<li><a href="profile.php">My Dashboard</a></li>
						<li><a href="monthly-clearance.php">Monthly Clearance</a></li>
						<li><a href="change-name.php">Change Name</a></li>
						<li><a href="change-password.php">Change Password</a></li>
						<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
						<li><a href="email-correction.php">Email Correction</a></li>
						<li><a href="index.php">Log Out</a></li>
					</ul>
				</div>
				
				<div id="profile-details">
					<h1>DEPASA - Employee Profile</h1>
					
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
					<h1>EMPLOYEE DETAILS</h1> 
					
					<ul>
						<li>NAME <br><br> <span><?= "$user->first_name $user->last_name"; ?></span></li>
						<li>AGE <br><br> <span><?= "$user->age"; ?></span></li>
						<li>GENDER <br><br> <span><?= "$user->gender"; ?></span></li>
						<li>OCCUPATION <br><br> <span><?= "$user->occupation"; ?></span></li>
						<li>DEPARTMENT <br><br> <span><?= "$user->department"; ?></span></li>
						<li>MOBILE <br><br> <span><?= "$user->mobile"; ?></span></li>
						<li>OFFICE LINE <br><br> <span><?= "$user->office_line"; ?></span></li>
						<li>DATE OF BIRTH <br><br> <span><?= "$user->date_of_birth"; ?></span></li>
						<li>EMAIL <br><br> <span><?= "$user->email"; ?></span></li>
						<li>INTEREST <br><br> <span><?= "$user->interest"; ?></span></li>
						<li>COUNTRY <br><br> <span><?= "$user->country"; ?></span></li>
						<li>DATE OF HIRE <br><br> <span><?= "$user->date_of_hire"; ?></span></li>
						<li>STATUS <br><br> <span><?= "$user->status"; ?></span></li>
						<li>EMPLOYEE TYPE <br><br> <span></span></li>
					</ul>  
				</div>  
		 

				<div id="profile-img">	 
					<img src="<?= $user->profile_pic ?>">
					<p>Employee Name</p>
				</div>
				
			</div>
	</div>	

<?php print_r($result[0]["id"]); ?>	
	 
</div>
<?php include "footer.html"; ?>
</body>

</html>