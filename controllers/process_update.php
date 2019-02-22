<?php
	require_once '../partials/db_con.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname']; 
	$email = $_POST['email']; 
	$password = $_POST['password'];
	// $cpass = sha1($_POST['cpass']);
	$id = $_POST['id']; 

	$firstname = $_POST['firstname']; //global: superglobal//
	$lastname = $_POST['lastname'];
	
	// hidden input field thru inspect

	$sql = "UPDATE member SET email = '$email', password = '$password' WHERE id = $id";
	// 2 ways to get the ID
	$result = mysqli_query($conn, $sql);

	if($result) {
		header("Location: users.php");
	}
?>