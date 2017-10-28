<?php
	require_once 'dbcon.php';
	
	$query = $mysqli->query("DELETE FROM paketa WHERE paketaID = '$_GET[PaketaID]'") or die(mysql_error());
	if(!$query)
	{
		echo "Kjo fshirje nuk mund te behet pasi e ka blere nje user i identifikuar";
		header('location: shiko_paketa1.php');

	}
	header('location: shiko_paketa1.php');