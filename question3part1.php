<?php 
	$conn = mysqli_connect("localhost","root","mysql");
	if(!$conn)
		die('Could not connect'.mysqli_connect_error());

	if(!mysqli_select_db($conn,"6470")){
		$sql = "CREATE Database `6470`";
		
		if(!mysqli_query($conn,$sql))
			echo "database creation failed ".mysqli_error($conn);

		mysqli_select_db($conn,"6470");
	}

	if(!mysqli_query($conn,'DESCRIBE `6470exerciseusers`')){
		$sql = 'CREATE TABLE 6470exerciseusers(USERNAME varchar(100) UNIQUE, PASSWORD_HASH char(40), PHONE varchar(10))';

		if(!mysqli_query($conn,$sql))
			echo 'table creation failed '.mysqli_error($conn);
	}

	mysqli_close($conn);
?>
