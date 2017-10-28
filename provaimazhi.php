<?php
require('session.php');
require('dbcon.php');
require('user_name.php');

$msg = "";
if(isset($_POST['dergo']))
{

	$target = "Imazhet/".basename($_FILES['foto']['name']);


$image = $_FILES['foto']['name'];

$sql = "INSERT INTO images (foto) VALUES ('$image')";
mysql_query($sql);
if(move_uploaded_file($_FILES['foto']['tmp_name'], $target))
{
	$msg = "u be";
}
else
{
	$msg = "nuk  u be";
}



}

?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="foto"/>
	<input type="submit" name="dergo" value="dergo"/>

</form>
</body>
</html>