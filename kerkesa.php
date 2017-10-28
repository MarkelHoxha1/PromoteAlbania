<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
	<title>Admin Panel</title>
	
  

  <link rel="stylesheet" type="text/css" href="style1.css">
<!-- Latest compiled and minified JavaScript -->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/dataTables.js"></script>
    <script src="bootstrap/js/dataTables2.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="main_wrapper">
<div id="header">
	
</div>
<div id="right">







<div class = "alert alert-info"><a class = "btn btn-success" href = "Admin_Agjensie.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
<br>
<br>
<br>
        <table id = "table" class = "table table-striped">
          <thead>
            <tr>
              <th>User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              <th>Pershkrimi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               <th>Data&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
              </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM kerkesa ") or die(mysql_error());
              if(!$query)
              {
                echo "Nuk ka Kerkesa";

              }
              else
              {
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['UserID']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
              <td><?php echo $f_query['Pershkrimi']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
               <td><?php echo $f_query['Data']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                
            </tr>
            <?php
              }
            }
            ?>
          </tbody>
        </table>
      </div>
</div>




<div id="left">
	<h2 style="text-align: center;">Menaxho seksionet e faqes</h2>
<hr>
<table>
<tr>
<td>
<?php 

 
    echo "  Hi:   ".$name;
  
  ?>
    
  </td>
  <td>
  <?php echo '<a href="logout.php">Logout</a>'; ?></table>
</td>
</tr>
</table>
<a href="kerkesa.php">Shiko kerkesa</a>
<a href="shiko_paketa1.php">Shiko paketa</a>
<a href="paketa.php">Shto paketa</a>
<a href="sfida.php">Shto sfida</a>


     



</div>
	



</div>

</body>
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
    <script src="bootstrap/js/dataTables.js"></script>
    <script src="bootstrap/js/dataTables2.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
        <!--pagination-->
    <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="bootstrap/js/jquery.dataTables2.js"></script>

<script type = "text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  })
</script>
</html>