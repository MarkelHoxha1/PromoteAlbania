<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href="bootstrap/css/bootstrap.css" />
    <link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
	
</div>
<div id="right">
  <h2 style="text-align: center;">Menaxho seksionet e faqes</h2>
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
     
<div class = "alert alert-info"><a class = "btn btn-success" href = "Admin.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
<br>
<br>
<br>
        <table id = "table" class = "table-bordered">
          <thead>
            <tr>
              <th>UserID </th>
              <th>Pershkrimi </th>
               <th>Tipi </th>
               <th>Action </th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->uery("SELECT * FROM mesazhe ") or die(mysql_error());
              while($f_query = $query->fetch_array()){
            ?>
            <tr>
              <td><?php echo $f_query['UserID']?></td>
              <td><?php echo $f_query['Pershkrimi']?></td>
               <td><?php echo $f_query['Tipi']?></td>
              <td><center><a  href = "delete_mesazh.php?MesazhID=<?php echo $f_query['MesazhID']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash"></span> Delete</a></center></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div>



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