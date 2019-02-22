<?php
	require_once 'db_con.php';

	$id = $_GET['id'];

	$sql = "DELETE FROM member WHERE id=$id";

	$result= mysqli_query($conn, $sql);

	if($result) {
		header("Location: users.php");
		
	}

?>