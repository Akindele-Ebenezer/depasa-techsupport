<?php 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty 
	
	
    // Validate credentials
    if(empty($username_err)){
        // Prepare a select statement
        $sql = "SELECT id, username FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username);
                    if(mysqli_stmt_fetch($stmt)){ 
						// Password is correct, so start a new session
						session_start();
						
						// Store data in session variables
						$_SESSION["loggedin"] = true;
						$_SESSION["id"] = $id;
						$_SESSION["username"] = $username;                            
						
						// Redirect user to welcome page
						header("location: profile.php");
				   
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>
 
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>DEPASA - Sign In</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body> 
<main id="main">

<?php include "header.html";
?>

	<div id="sign-up-wrapper">
			<h1>Log In</h1>
		<div id="sign-up-content">
			<div id="sign-up-img">
				<img src="sign-in-img.jpg">
			</div>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
				<div id="form-wrapper">
					<label>Name</label>  <br>
					<input type="text" name="username" value="<?php echo $username; ?>"> <br>
					
					<label for="password">Password</label> <br>
					<input type="password"> <br>
					
					<button type="submit">Log In</button>
					
					<p>Don't have an account? <strong><a href="sign-up.php">Sign Up</a></strong></p>
				</div>
			</form>
		</div>
	</div>

<?php include "footer.html"; ?>
</main>
</body>

</html>