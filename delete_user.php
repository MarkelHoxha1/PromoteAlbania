<?php
	require_once 'dbcon.php';
	$mysqli->query("DELETE FROM user WHERE Username = '$_GET[Username]'") or die(mysql_error());
	header('location: user.php');