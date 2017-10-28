<?php
	require_once 'dbcon.php';
	if(isset($_POST['login']) && $_GET['UserID'])
	{
		$username = $_POST['username'];
		$type = $_POST['Type'];
		$first = $_POST['First_Name'];
		$last = $_POST['Last_name'];
		$address = $_POST['Address'];
		$email = $_POST['Email'];
		$target = "fotografi/".basename($_FILES['foto']['name']);
		$image = $_FILES['foto']['name'];
		move_uploaded_file($_FILES['foto']['tmp_name'], $target);

		

				$conn =$mysqli->query("UPDATE user SET Username = '$username',Type = '$type', First_name  ='$first',Last_name='$last',Address='$address',Email='$email' ,Foto='$image'  WHERE UserID = '$_GET[UserID]'") or die(mysql_error());
				if($conn)
					{
						echo "<script>alert('Ndryshimet u bene me sukses!')</script>";
					 	echo "<script>window.open('profili.php','_self')</script>";
					}
					else
					{
						echo "<script>alert('Ndryshimet nuk u bene')</script>";
					}
	
}
?>
