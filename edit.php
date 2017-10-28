<?php
	require_once 'dbcon.php';
	if(isset($_POST['login']) && isset($_GET['paketaID']))
	{
		$emri = $_POST['emri'];
		$vendodhja = $_POST['vendodhja'];
		$sasia_e_vendeve = $_POST['Sasia'];
		$sezoni = $_POST['Sezoni'];
		$pershkrimi = $_POST['Pershkrimi'];
		$cmimi = $_POST['cmimi'];
		$data_nisjes = $_POST['data'];
		$nr_vendeve = $_POST['ditet'];

			$target ="Foto/". basename($_FILES['foto']['name']);
			$image = $_FILES['foto']['name'];


 move_uploaded_file($_FILES['foto']['tmp_name'], $target);


			{

				$conn =$mysqli->query("UPDATE paketa SET EmriP = '$emri',Vendodhja = '$vendodhja', Sasia_e_vendeve  ='$sasia_e_vendeve',Sezoni='$sezoni',Pershkrimi='$pershkrimi',Cmimi='$cmimi',Data_Nisjes='$data_nisjes'  ,Nr_i_diteve='$nr_vendeve' ,Foto='$image'   WHERE paketaID = '$_GET[paketaID]'") or die(mysql_error());
				if($conn)
			{
					echo "<script>alert('Ndryshimet u bene me sukses !')</script>";
					 echo "<script>window.open('shiko_paketa1.php','_self')</script>";
			}
			else
			{
				echo "<script>alert('Ndryshimet nuk u bene !!')</script>";
			}
	}
}
?>
