<!DOCTYPE html>
<?php

require('dbcon.php');

?>
<html lang="">
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

    <script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

     <!--pagination-->
      <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
      <script src="bootstrap/js/jquery.dataTables2.js"></script>

  </head>

  <style type="text/css">
    .navbar 
    {
     margin-bottom:0px !important;
    }
    .carousel-caption 
    {
     margin-top:0px !important
    }
  </style>
  <style>
  .modal-backdrop.in
  {
    display: none
  }
</style>



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
            <img src="logo.jpg" height="50" width="50"> &nbsp;
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a href="ornes.php" style="font-family: Times New Roman; font-size: 30px;">Challenge</a></li>
            </ul>

            <ul class="nav navbar-nav" style="font-family: Times New Roman;">
              <li class="active">
                <a href="bootstrap.php">Home</a>
              </li>
              <li ><a href="KrijoGrup.php">Sfida</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right" style="font-family: Times New Roman;">
              <li>
                <a href="login.php">
                  Login
                  <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>





<div class = "alert alert-info"><a class = "btn btn-success" href = "ornes1.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
<br />
      <br /><br />
      <br />
        <table id = "table" class = " table table-striped">
          <thead>
            <tr>
              <th>Emri i Sfides </th>
              <th>Pershkrimi</th>
             
                  <th>Data e nisjes</th>
                  <th>Data e mbarimit</th>
                  <th>Destinacioni</th>
                  <th>Foto</th>
                  <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM sfida") or die(mysql_error());
              if(!$query)
              {
                echo "Nuk ka sfida";

              }
              else
              {
              while($f_query = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo $f_query['Emri']?></td>
              <td><?php echo $f_query['Pershkrimi']?></td>
               
                   <td><?php echo $f_query['Data_fillimit']?></td>
                    <td><?php echo $f_query['Data_mbarimit']?></td>
                    <td><?php echo $f_query['Destinacioni']?></td>
                    <td class="align-img"><center><img src="<?php echo $f_query['Foto'] ?>" width="80" height="60"></center></td>
                    <td class="align-img">
                       <a class = "btn btn-success btn-xs" href="KrijoGrup.php?SfidaId=<?php echo $f_query['SfidaId']?>"   value ="<?php echo $f_query['SfidaId']?>">
              Shiko
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </a>
              
            </td>
              
            </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>




  



























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
    <script src="bootstrap/js/bootstrap.js"></script>


  </body>
  <script src="bootstrap/js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/dataTables.js"></script>
    <script src="bootstrap/js/dataTables2.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <!--pagination-->
    <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="bootstrap/js/jquery.dataTables2.js"></script>
<script type = "text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  });
</script>
</html>