<?php
	require_once 'dbcon.php';
	$mysqli->query("DELETE FROM mesazhe WHERE MesazhID = '$_GET[MesazhID]'") or die(mysql_error());
	header('location: mesazhe.php');