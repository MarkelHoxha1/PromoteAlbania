<?php
include 'dbcon.php';
include 'session.php';
include 'user_name.php';
if(isset($_GET['paketaID']))

{  
$mysqli = new mysqli("localhost", "root", "", "promotealbania");

	$cmimi = '';
	
	$paketa = $_GET['paketaID'];
	$sql = "SELECT * FROM paketa where paketaID = $paketa";
	$sql1 = $mysqli->query($sql);
	$query = $sql1->fetch_assoc();
	$cmimi = $query['Cmimi'];

	
	



	$insert_fatura = "insert into fatura (UserID,Koha,Cmimi,paketaID) values 
                        ('$userid',now() ,'$cmimi','$paketa')";

                    $insert = $mysqli->query($insert_fatura);
                    if($insert)
                    {
                         echo "<script>alert('Blerja u be me sukses!')</script>";
                          echo "<script>window.open('bootstrap1.php','_self')</script>";

                    }
                    else 
                    {
                         echo "<script>alert('Blerja nuk u be!')</script>".mysql_error();
                    }

}