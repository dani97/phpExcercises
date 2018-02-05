<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login </title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class = "form-container">
		<div class="form-button" id="login-button">Login</div>
		<div class="form-button" id="signup-button">SignUp</div>
	</div>
	<div class = "login-form form" id="login-form">
		<div class="close-button pointer"><i class="fa fa-times color" id="login-closer" aria-hidden="true"></i></div>
		<form action="login.php" method="post">
			<fieldset>
				<legend>Login</legend>
				<label>Enter name:</label><br><br>
				<input type="text" name="name" required><br><br>
				<label>Enter Date of Birth:</label><br><br>
				<input type="date" name="dob" required><br><br>
				<label>
					<?php
						$num1 = rand(1,100);
						$_SESSION['num1'] = $num1;
						$num2 = rand(1,100);
						$_SESSION['num2'] = $num2;
						echo "$num1 + $num2 = ?";
					?>	
				</label><br><br>
				<label>Enter answer</label><br><br>
				<input type="number" name="answer" required><br><br>
				<input type="submit" value="login"><br><br>
			</fieldset>
		</form> 
	</div>
	<div class = "reg-form form" id="signup-form">
		<form action="signup.php" method="post">
			<div class="close-button pointer"><i class="fa fa-times color" id="signup-closer" aria-hidden="true"></i></div>
			<fieldset>
				<legend>SignUp</legend>
			<label>Enter name:</label><br><br>
			<input type="text" name="name" required><br><br>
			<label>Enter Date of Birth:</label><br><br>
			<input type="date" name="dob" required> <br><br>
			<input type="submit" value="signup"><br><br>
		</fieldset>
		</form> 
	</div>
	<script src="index.js" type="text/javascript" charset="utf-8"></script>
</body>
</html>