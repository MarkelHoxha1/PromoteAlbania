<!DOCTYPE html>
<?php
include('dbcon.php');
?>
<html lang="en">
  <head>
   		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Challenge in Albania</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="stilii.css">
		<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  function mos()
  {
    alert("Ju duhet te jeni te rregjistruar qe te beni nje Kerkese");
    alert("Ju faleminderit");
  }
</script>
    

  </head>

  <body>
  <?php
					          					if(isset($_GET['SfidaId']))
					            {
					            $acc_query = $mysqli->query("SELECT * FROM `sfida` WHERE SfidaId = '$_GET[SfidaId]'") or die(mysql_error());
					            $acc_fetch =$acc_query->fetch_array();
					                      ?>
		<div class="container">

		<div class="card">
		 <a class = "btn btn-success" href = "shiko_sfida1.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">

						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="<?php echo $acc_fetch['Foto'];  ?>"></div>
						  
						</div>
						 
						
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title"><?php echo $acc_fetch['Emri']; ?></h3>
						<p class="product-description"><?php echo $acc_fetch['Pershkrimi'];  ?></p>
						<h4 class="price">Data-Fillimit <span><?php echo $acc_fetch['Data_fillimit'];  ?></span></h4>
						<h4 class="price">Data-Mbarimit <span><?php echo $acc_fetch['Data_mbarimit'];  ?></span></h4>
						
						<h4 class="price">Destinacion <span><?php echo $acc_fetch['Destinacioni'];  ?></span></h4>
						<div class="action">
							<a class=" btn btn-primary" href="bashkohu.php?SfidaId=<?php echo$acc_fetch['SfidaId']?>"   type="button">Bashkohu</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	  <?php
        }
        ?>
  </body>
</html>
