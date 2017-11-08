<!DOCTYPE html>
<?php
require('session.php');
require('dbcon.php');
require('user_name.php');
?>
 

<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
  .modal-backdrop.in
  {
    display: none
  }
</style>

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/layout.css" rel="stylesheet" type="text/css">
<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Promote Albania</title>
</head>

<body style="padding-top: 50px">
<?php include_once('njejta.php'); ?>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
    <li data-target="#carousel1" data-slide-to="3"></li>
    <li data-target="#carousel1" data-slide-to="4"></li>
    <li data-target="#carousel1" data-slide-to="5"></li>
    <li data-target="#carousel1" data-slide-to="6"></li>
    <li data-target="#carousel1" data-slide-to="7"></li>
    <li data-target="#carousel1" data-slide-to="8"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
  <div class="item active"><img src="Foto/Albania1.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>

  <div class="item "><img src="Foto/pamje.jpg" alt="Third slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item "><img src="Foto/mal.jpg" alt="First slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/berat.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/debore.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
        <div class="item"><img src="Foto/det.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/lure.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/ujesia.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/liqeni_p.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  <section class="container">
  <div class="row">
    <figure class="col-sm-6">
     <a href="t_kulturor1.php"> <p>Turizmi Kulturor</p></a>
    <a href="t_kulturor1.php"><img src="Foto/butrint.jpg" alt="foto"></a>
    </figure>
    <figure class="col-sm-6">
      <a href="malore1.php"><p>Turizmi malor</p></a>
      <a href="malore1.php"><img src='Foto/mali.jpg'></a>
    </figure>
  </div>
  <div class="row"> 
    <figure class="col-sm-6">
      <a href ="Turizmi1.php"><p>Turizmi blu</p></a>
   <a href="Turizmi1.php"><img src="Foto/ujesi.jpg"></a>
    </figure>
    <figure class="col-sm-6">
      <a href="marxhens1.php"><p>Turizmi Kulinar</p></a>
    <a href="marxhens1.php"><img src="Foto/ushqim5.jpg"></a>
    </figure>
  </div>
</section>
<section class="container">
<h4>Dergo nje mesazh</h4>
 <form method="POST"  action = "dergo.php">
<div class = "form-group">
  <textarea  name="fusha" id= "fusha" rows="10" cols="80" ></textarea>
 <button  type="submit" class = "btn btn-success"  value ="dergo " name="dergo" ><span class = "glyphicon glyphicon-send"></span> Send</button>
  </div>
  </form>
</section>
<footer class="container">
  <div class="row">
    <p class="col-sm-4">&copy; 2016 OM 4</p>
    <ul class="col-sm-8">
      <li class="col-sm-1">...</li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-md-1">  <img src=""></li>
   
    </ul>
  </div>
</footer>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>