<?php

	require_once 'db_con.php';

	$fullname = $_POST['fullname']; //global: superglobal//
	$company = $_POST['company']; 
	$email = $_POST['email']; 
	$password = sha1($_POST['password']);
	$cpass = sha1($_POST['cpass']);
	// SHA1 - Secure Hashing Algorithm (40 chars)
	//MD5 - Message Digest 5

	$sql = "INSERT member (fullname, company, email, password, cpass) 
	VALUES ('$fullname', '$company', '$email', '$password', '$cpass')";

	$result = mysqli_query($conn, $sql); 
			if(!mysqli_num_rows($result)>0) {
				while($row = mysqli_fetch_assoc($result)) {
				$data = "Email already exists";
			}

		} else {
			$data = "Email is Available";
		}
		
	echo $data;
	?>	