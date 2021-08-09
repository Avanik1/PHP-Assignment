<?php
	

 ?>

 <!DOCTYPE html>
 <html>
 
 <head>
 	<meta charset="utf-8">
 	<title>Registration and Login Form</title>
 </head>

 <body>
 	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 		<div>
	 		<label for="user_name">Username: </label>
	 		<input type="text" id="user_name" name="userName" placeholder="Enter Username">
 		</div>
 		<div>
 			<label for="password">Password: </label>
 			<input type="password" name="password" id="password" placeholder="Enter Password">
 		</div>
 		<div>
 			<label for="phone_no">Phone Number: </label>
 			<input type="text" name="phoneNo" id="phone_no" placeholder="Enter Phone Number">
 		</div>
 		<input type="button" name="submit" value="Register">
 	</form>

 </body>
 
 </html>