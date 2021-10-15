<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>DEPASA - Sign Up</title>
	<style>
		* {
			margin: 0;
			padding: 0;
		}
		
		button {
			border: 1px solid #999;
			border-radius: 1rem;
			margin: .5rem;
			padding: 1rem;
			
		}
		
		input { 
			background: #eee;
			border: 1px solid #eee;
			border-radius: 1rem;
			font-size: 1.3rem;
			margin: .5rem;
			padding: 1rem;
			width: 20rem;
		}
		
		#main {
				overflow: hidden;
		}
		
		#sign-up-content {
			border: 1px solid #ddd; 
			border-radius: 3rem;
			padding: 4rem;
		}
		
		#sign-up-content h1,
		#sign-up-content p {
			margin-bottom: 1.5rem;
		}
		
		#sign-up-wrapper { 
			align-items: center;
			display: flex;
			flex-wrap: wrap;
			height: 100vh;
			justify-content: center; 
			margin-bottom: 20rem;
		}
	</style>
</head>

<body>

<main id="main">
<?php include "header.html" ?>
	<form action="registration-successful.php" method="post" enctype="multipart/form-data">
		<div id="sign-up-wrapper">
			<div id="sign-up-content">
				<h1>Sign Up</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="text" name="first_name" placeholder="First name">
				<input type="text" name="last_name" placeholder="Last name"> <br>
				<input type="email" name="email" placeholder="Email"> <br>
				<input type="password" name="new_password" placeholder="New Password">
				<input type="password" name="confirm-password" placeholder="Confirm Password"> <br>
				
				<h1>REGISTRATION</h1>
				<hr>
					  
					<input type="text" name="age" placeholder="Age"> 
					 
					<input type="text" name="gender"  placeholder="Gender"> <br>
					
					 
					<input type="text" name="occupation"  placeholder="Occupation"> 
					 
					<input type="text" name="department"  placeholder="Department"> <br>
					 
					 
					<input type="number" name="mobile"  placeholder="Mobile">
					
					<input type="number" name="office_line"  placeholder="Office Line"> <br>
					
					<center>
					<label for="date_of_birth">Date of Birth:</label>
					<input type="date" name="date_of_birth" > <br> 
					</center>
					 
					<input type="email" name="email"  placeholder="Email"> <br>
					 
					<input type="text" name="interest"  placeholder="Interest"> 
					 
					<input type="text" name="country"  placeholder="Country"> <br>
					 
					<center>
					<label for="date_of_hire">Date of Hire:</label>
					<input type="date" name="date_of_hire" > <br>
					</center>
					
					<input type="text" name="status"  placeholder="Status"> 
					
					<input type="file" name="profile_pic">
					
					<center>
					<label for="employee_type">Employee Type:</label> 
						<select name="employee_type">
							<option value="active">Active</option>
							<option value="overtime">Overtime</option>
							<option value="regular">Regular</option>
						</select>
					</center>
					<br>
				<button type="submit">Create Account</button>
			</div>
		
		</div>
	</form>
	
<?php include "footer.html" ?>
</main>
</body>

</html>
