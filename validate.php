<?php
	require_once 'dbcon.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass = md5($password);
	$query= $mysqli->query("SELECT * FROM user WHERE Username = '$username' && Password = '$pass'") or die(mysqli_error());
	$validate = mysqli_num_rows($query);
	$fetch = mysqli_fetch_array($query);
	if($validate > 0)
	{
		echo "Success";
		session_start();
		$_SESSION['User_ID'] = $fetch['User_ID'];
		//$_SESSION['Type'] =$fetch['Type']; 
	}
	else
	{
		echo "Error";
	}