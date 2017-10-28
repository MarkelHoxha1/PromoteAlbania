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
	<link rel="stylesheet" type="text/css" href="style.css">
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
<a href="raporte.php">Shiko raportet mbi shitjet</a>
<a href="user.php">Menaxho User-at</a>
<a href="mesazhe.php">Menaxho Komentet</a>



</div>
<div id="left">
<div class = "col-md-12 well">
			<a class = "btn btn-success" href = "user.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
			<br/>
			<br/>
			<div class  = "alert alert-warning">User / Update</div>
			<div class = "row">	
				<div class = "col-md-2 ">
				</div>
				<div class = "col-md-2">
				</div>
				<div class = "col-md-4">
					<?php
					if(isset($_GET['UserID']))
						{
						$acc_query = $mysqli->query("SELECT * FROM `user` WHERE UserID = '$_GET[UserID]'") or die(mysql_error());
						$acc_fetch =$acc_query->fetch_array();
											?>
					<form method = "POST" action="user_edit_query.php?UserID=<?php echo $acc_fetch['UserID']?>" enctype="multipart/form-data">
						<div class = "form-group">
							<label>Username</label>
							<input  id = "username" type = "text" name="username" value = "<?php echo $acc_fetch['Username']?>" class = "form-control" />
							<input  id = "admin_id" type = "hidden" name="uid" value = "<?php echo $_GET['UserID']?>" class = "form-control" />
						</div>
						<div class = "form-group">
							<label>Type</label>
							<input type = "text" id = "Type" name="Type" type = "text" value= "<?php echo $acc_fetch['Type']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>First_Name</label>
							<input type = "text" id = "First_name" name="First_Name" type = "text" value= "<?php echo $acc_fetch['First_name']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Last_Name</label>
							<input type = "text" id = "Last_name" name="Last_name" type = "text" value= "<?php echo $acc_fetch['Last_name']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Address</label>
							<input type = "text" id = "Address" name="Address" type = "text" value= "<?php echo $acc_fetch['Address']?>" class = "form-control" />
							
						</div>
						<div class = "form-group">
							<label>Email</label>
							<input type = "text" id = "Email" name="Email"  type = "text" value= "<?php echo $acc_fetch['Email']?>" class = "form-control" />
							
						</div>
						 <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
           				 </div>						
						<br />
						<div class = "form-group">

							<button class = "btn btn-success"  type = "submit" href= "user_edit_query.php?UserID=<?php echo $acc_fetch['UserID'] ?>" name="login" ><span class = "glyphicon glyphicon-save"></span> Save Changes</button>
						</div>
					</form>
					<?php
				}
				?>

				</div>
			</div>	
		</div>
		</div>
		</div>
		</body>
		</html>