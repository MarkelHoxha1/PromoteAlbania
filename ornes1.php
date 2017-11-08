<!DOCTYPE html>
<?php
require('session.php');
require('dbcon.php');
require('user_name.php');
?>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Challenge in Albania</title>

		<!-- Bootstrap CSS -->
		
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }
		</style>
		<style>
		  .modal-backdrop.in
		  {
		    display: none
		  }
		</style>



		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>

	

	<body style="padding-top: 60px">

		<!-- begin whole content -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<img src="Foto/logo.jpg" height="50" width="50"> &nbsp;
					</div>
			
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse">
						<ul class="nav navbar-nav">
							<li><a href="ornes1.php" style="font-family: Times New Roman; font-size: 30px;">Challenge</a></li>
						</ul>

						<ul class="nav navbar-nav" style="font-family: Times New Roman;">
							<li class="active">
								<a href="bootstrap1.php">Home</a>
							</li>
							<li ><a href="shiko_sfida1.php">Sfida</a></li>
						</ul>
						
						<ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
							 <a class = "profil" href="profili.php">Your Profile</a>
    						  </form>
     							 <ul class=" loget nav navbar-nav navbar-right">
       											 <li><h5 class="col-sm-1">
     								 <?php
  
   						 echo "Hi:".$name;
  
 									 ?>
 											 </h5></li>
       								  <li><?php echo '<a href="logout.php">Logout</a>'; ?></li>
     					 </ul>
						</ul>
					</div><!-- /.navbar-collapse -->
				</div>
			</nav>
		<!-- end -->
		<div class="row">
			<div id="carousel-id" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carousel-id" data-slide-to="0" class=""></li>
					<li data-target="#carousel-id" data-slide-to="1" class=""></li>
					<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item">
						<center>
						<img src="Foto/challenge1.jpg" style="height: 500px; width: 100%;">
						</center>
						<div class="container">
							<div class="carousel-caption">
								<h1>Albania challenges </h1>
								<p><a class="btn btn-lg btn-primary" href="Register.php" role="button">Register today</a></p>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="Foto/challenge2.jpg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>Albania challenges</h1>
								<p></p>
								<p><a class="btn btn-lg btn-primary"   data-toggle="modal" data-target="#myModal" role="button">Learn more</a></p>
  


								<div class="modal fade" id="myModal" role="dialog">
    								<div class="modal-dialog">
									      <div class="modal-content">
									        <div class="modal-header">
									          <button type="button" class="close" data-dismiss="modal">&times;</button>
									          <h4 class="modal-title">Me shume:</h4>
									        </div>
									        <div class="modal-body">
									        <?php include('infoChallenge.html'); ?>




									        </div>
									        <div class="modal-footer">
									          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									        </div>
									      </div>
									      
									    </div>
									  </div>
																</div>
															</div>
					</div>
					<div class="item active">
						<img src="Foto/challenge3.jpeg" style="height: 500px; width: 100%;">
						<div class="container">
							<div class="carousel-caption">
								<h1>Albania challenges</h1>
								<p></p>
								<p><a class="btn btn-lg btn-primary" href="# do ta bej me modal" role="button">Browse gallery</a></p>
							</div>
						</div>
					</div>
				</div>
				<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<br />
		<div class="row container-fluid">
			<div class="col-md-4">
				<div class="panel panel-info">
					<div class="panel-heading">
						<h3 class="panel-title"><center>About Us</center></h3>
					</div>
					<div class="panel-body">
					Projekt i realizuar nga grupi jone per te promovuar turizmin ne shqiperi.
						Jemi munduar te marim pak nga te gjitha.<br>
						
						<hr>
						<center>&copy;OM<sup>4</sup></center>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Contact Us</center></h3>
					</div>
					<div class="panel-body">
						<div class="panel-body">
						<h3>Per me teper na kontaktoni</h3>
						cel:068.......<br>
						e-mail:OM4@gmail.com
					</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="panel panel-warning">
					<div class="panel-heading">
						<h3 class="panel-title"><center>Travel</center></h3>
					</div>
					<div class="panel-body">
						<p>Per te mare me te miren nga shqiperia duhet qe ta shetisni ate nga veriu ne jug. Behuni pjese e ketij rrugtimi qe te shijoni madheshtine e natyres shqiptare. Nuk do te mbeteni te zhgenjyer.</p>
					</div>
				</div>
			</div>
		</div>
 		
 		<p>
 			<center>
 			
 			</center>
 		</p>
		
		<footer style="background-color: white;">
			<center>
				&copy; All rights reserved
			</center>
		</footer>

 		<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 	
 		<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>



	</body>
</html>