<?php
	require_once 'dbcon.php';
	$query1 = $mysqli->query("SELECT * FROM user WHERE UserID = '$_SESSION[UserID]'") or die(mysql_error());
	$acc_fetch = mysqli_fetch_array($query1,MYSQLI_ASSOC);
	$name = $acc_fetch['Username'];
	$userid = $acc_fetch['UserID'];
	?>