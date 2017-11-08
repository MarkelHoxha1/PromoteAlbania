<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');

?>
<html>
<head>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
           <div class = "alert alert-info"><a class = "btn btn-success" href = "bootstrap1.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
           </div>
			
        </div>
    </div>
</nav>
<div class="container">
<h1 align="center">Your Profile</h1>
	<div class="page-header">
	<form method="POST"  action = "dergo1.php">
		<div class = "form-group">
  				
 			<button  type="submit" class = "btn btn-success" style="margin-left: 670px;" value ="dergo " name="dergo" ><span class = "glyphicon glyphicon-send"></span>&nbsp; Dergo Kerkese </button>
 			<textarea  name="fusha" id= "fusha" rows="1" cols="40" ></textarea>
 			 </div>
 			 </form>
    </div>
<div class="row">
<?php
	$stmt = $mysqli->query("SELECT  *  FROM user where UserID = $userid");
	$stmt1 = mysqli_fetch_array($stmt);
	
		$emri = $stmt1['Username'];
		$tipi = $stmt1['Type'];
		$foto =$stmt1['Foto'];
	
		?>
		<div class="col-xs-3"  >&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<h3 class="page-header" style="background-color:cadetblue" align="center"><?php echo  $emri."<br>". $tipi; ?></h3>
			<img src=<?php echo "Foto/$foto" ?> class="img-rounded" width="250px" height="250px" /><hr>
			<p class="page-header" align="center">
			<span>
			<a class="btn btn-primary" href="user_edit1.php?UserID=<?php echo $stmt1['UserID']; ?>"><span class="glyphicon glyphicon-pencil"></span> Edit</a> 
			<a class="btn btn-warning" href="delete_user.php?Username=<?php echo $stmt1['Username']; ?>" title="click for delete" onclick="return confirm('Are You Sure You Want To Delete the account ?')"><span class="glyphicon glyphicon-trash"></span> Delete</a>
			</span>
			</p>
		</div>
    <h3 align="center">Kerkesat tuaja</h3>

 <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th>Pershkrimi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Tipi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM mesazhe where UserID = $userid") or die(mysql_error());
              if(!$query)
              {?>
              	<div class="col-xs-12">
				<div class="alert alert-warning">
					<span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
				</div>
				</div>
				<?php
              

              }
              else
              {
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['UserID']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><?php echo $f_query['Pershkrimi']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['Tipi']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                
            </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
        <br>
        <br>
        <h3 align="center">Blerjet tuaja</h3>

         <table id = "table" class = " table-bordered">
          <thead>
            <tr>
              <th>UserID &nbsp;</th>
              <th>PaketaID &nbsp;</th>
               <th>Koha &nbsp;</th>
                 <th>Cmimi &nbsp; &nbsp;</th>
                  
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM fatura where UserID = $userid ") or die(mysql_error());
              while($f_query =$query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['UserID'] ?>  &nbsp; &nbsp; &nbsp;</td>
              <td><?php echo $f_query['paketaID'] ?>&nbsp; &nbsp; &nbsp;</td>
               <td><?php echo $f_query['Koha'] ?>&nbsp; &nbsp; &nbsp;</td>
                 <td><?php echo $f_query['Cmimi']."leke"?> &nbsp; &nbsp; &nbsp;</td>
              
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>


		<?php
	
	if(!$stmt1)
	{




	?>
	<div class="col-xs-12">
		<div class="alert alert-warning">
			<span class="glyphicon glyphicon-info-sign"></span>&nbsp; No Data Found.
		</div>
	</div>
	<?php
}
?>
</div>
</div>
</body>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  })
</script>
</html>