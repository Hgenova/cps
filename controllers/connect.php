<?php 
	$host = "localhost";
	$db_username="root"	;
	$db_password="";
	$db_name="dbabc_acad";

	//Create connection
	$conn = mysqli_connect($host, $db_username, $db_password, $db_name);

	//Check Connection
	if(!$conn){
		die("Connection failed: ".mysqli_error($conn));

	}

 ?>