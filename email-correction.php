 <main>
 <?php 
	$title = "Email Correction";
	include "page.php";
	$title = "Email Correction";
 ?> 
 <div class="content-wrapper">
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
	<form action="/" method="post">
		<div id="email-correction-wrapper">
			<div id="email-correction-content">
				<h1>Change Email</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="text" name="old_email" placeholder="Old Email">
				<input type="text" name="new_email" placeholder="New Email"> <br> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Email</button>
			</div> 
		</div>
	</form> 
 </div>
 <?php
	include "footer.html";
?>
</main>