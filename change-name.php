 <main>
 <?php 
	$title = "Change Name";
	include "page.php"; 
 ?>
 <div class="content-wrapper">
	<div class="dashboard">
		<ul>
			<li><a href="profile.php">My Dashboard</a></li>
			<li><a href="monthly-clearance.php">Monthly Clearance</a></li>
			<li><a href="change-name.php">Change Name</a></li>
						<li><a href="change-profile-picture.php">Change Profile Picture</a></li>
			<li><a href="change-password.php">Change Password</a></li>
			<li><a href="email-correction.php">Email Correction</a></li>
			<li><a href="index.php">Log Out</a></li>
		</ul>
	</div> 
	<form action="profile.php" method="post">
		<div id="change-name-wrapper">
			<div id="change-name-content">
				<h1>Change Name</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="text" name="first_name" placeholder="First name">
				<input type="text" name="last_name" placeholder="Last name"> <br>
				<input type="email" name="email" placeholder="Email"> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Name</button>
			</div> 
		</div>
	</form>
 </div>
 <?php
	include "footer.html";
?>
</main>