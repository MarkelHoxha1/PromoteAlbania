<?php
	session_start();
	if(!isset($_SESSION['UserID'])){
		header("location: bootstrap.php");
	}
?>	