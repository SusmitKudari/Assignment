<?php 
	include('registration.php');
 ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Registration</title>
		
	</head>
	<body>
		
			<form method="post" action="registration.php">
			<div class="input">
				<label>Username</label>
				<input type="text" name="uname" placeholder="Name of the User">
			</div>
			<div class="input">
				<label>Email_Address</label>
				<textarea placeholder="Put your email" name="email"></textarea>
			</div>
			<div class="input">
				<label>Password</label>
				<input type="text" name="pwd" placeholder="Enter Password">
			</div>
			<div class="input">
				<label>Confirm_Password</label>
				<input type="text" name="c_pwd" placeholder="Enter Confirm Password">
			</div>
			<div class="input">
				<input type="submit" name="save" class="button" value="save">
			</div>
		</form>
	</body>
</html>