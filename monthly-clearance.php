
	<style>
		#top-nav li:nth-child(2) { 
			background: lightyellow;  
		}     
	</style>
	
	<main>
 <?php 
	$title = "Monthly Clearance";
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
	
	<table id="monthly-clearance-table">
		<tr>
			<th>S/N</th>
			<th>Month</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>1</td> 
			<td>JANUARY</td> 
			<td>Present</td> 
		</tr>
		<tr>
			<td>2</td> 
			<td>FEBRUARY</td> 
			<td>Absent</td> 
		</tr>
		<tr>
			<td>3</td> 
			<td>MARCH</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>4</td> 
			<td>APRIL</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>5</td> 
			<td>MAY</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>6</td> 
			<td>JUNE</td>
			<td>-</td>  
		</tr>
		<tr>
			<td>7</td> 
			<td>JULY</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>8</td> 
			<td>AUGUST</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>9</td> 
			<td>SEPTEMBER</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>10</td> 
			<td>OCTOBER</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>11</td> 
			<td>NOVEMBER</td> 
			<td>-</td> 
		</tr>
		<tr>
			<td>12</td> 
			<td>DECEMBER</td>
			<td>-</td> 
		</tr>
	</table>
 </div>
 <?php
	include "footer.html";
?>
</main>