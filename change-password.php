 <main>
 <?php 
	$title = "Change Password";
	include "page.php";
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
		<div id="change-password-wrapper">
			<div id="change-password-content">
				<h1>Change Password</h1>
				<p>It's quick and easy</p> 
				<hr>
				
				<input type="text" name="old_password" placeholder="Old Password">
				<input type="text" name="new_password" placeholder="New Password"> <br>
				<input type="email" name="email" placeholder="Email"> 
				<input type="number" name="tel_no" placeholder="Tel No.">  <br>
				<button type="submit">Change Password</button>
			</div>
		</div>
	</form>
 </div> 
 <?php
	include "footer.html";
?>
</main>