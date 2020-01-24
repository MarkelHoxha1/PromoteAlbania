<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
	
</div>
<div id="right">
  <h2 style="text-align: center;">Menaxho</h2>
<hr>
<table>
<tr>
<td>
<?php 

    echo "Hi:   ".$name;
  
  ?>
    
  </td>
  <td>
  <?php echo '<a href="logout.php">Logout</a>'; ?></table>
</td>
</tr>
</table>
<a href="user.php">Menaxho User-at</a>
<a href="mesazhe.php">Menaxho Komentet</a>



</div>
<div id="left">
<div class = "col-md-12 well">
			<a class = "btn btn-success" href = "raporte.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
			<br/>
			<br/>
			<div class  = "alert alert-warning">Paketa</div>
			<div class = "row">	
				<div class = "col-md-2 ">
				</div>
				<div class = "col-md-2">
				</div>
				<div class = "col-md-4">
					<?php
					if(isset($_GET['PaketaID']))
						{
						$acc_query = $mysqli->query("SELECT * FROM `paketa` WHERE paketaID = '$_GET[PaketaID]'") or die(mysql_error());
						$acc_fetch = $acc_query->fetch_array();
											?>
					<form method = "POST">
						<div class = "form-group">
							<label>Emri i paketes</label>
							<input  id = "emri" type = "text" name="emri" value = "<?php echo $acc_fetch['EmriP']?>" class = "form-control" />
							<input  id = "paketaID" type = "hidden" value = "<?php echo $acc_fetch['paketaID']?>" class = "form-control" />
						</div>
						<div class = "form-group">
							<label>Vendodhja</label>
							<input type = "text" id = "vendodhja" name="vendodhja" type = "text" value= "<?php echo $acc_fetch['Vendodhja']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Sasia e vendeve</label>
							<input type = "text" id = "Sasia" name="Sasia" type = "text" value= "<?php echo $acc_fetch['Sasia_e_vendeve']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Sezoni</label>
							<input type = "text" id = "Sezoni" name="Sezoni" type = "text" value= "<?php echo $acc_fetch['Sezoni']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Pershkrimi</label>
							<input type = "text" id = "Pershkrimi" name="Pershkrimi" type = "text" value= "<?php echo $acc_fetch['Pershkrimi']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Cmimi</label>
							<input type = "text" id = "cmimi" name="cmimi"  type = "text" value= "<?php echo $acc_fetch['Cmimi']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Data e nisjes</label>
							<input type = "text" id = "data" name="data"  type = "text" value= "<?php echo $acc_fetch['Data_Nisjes']?>" class = "form-control" />
							
						</div>

						<div class = "form-group">
							<label>Numri i diteve</label>
							<input type = "text" id = "ditet" name="ditet"  type = "text" value= "<?php echo $acc_fetch['Nr_i_diteve']?>" class = "form-control" />
							
						</div>

						<div id = "loading">
						</div>
						<br />
						<div class = "form-group">
						<a class = "btn btn-success" href = "raporte.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
							
						</div>
					</form>
					<?php
				}
				?>

				</div>
			</div>	
		</div>