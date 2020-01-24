<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

     <!--pagination-->
      <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
      <script src="bootstrap/js/jquery.dataTables2.js"></script>
</head>
<body>
<div class="main_wrapper">
<div id="header">
  
</div>
<div id="right">

<div class = "alert alert-info"><a class = "btn btn-success" href = "Admin_Agjensie.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
<br />
      <br /><br />
      <br />
        <table id = "table" class = " table table-striped">
          <thead>
            <tr>
              <th>Emri I Paketes </th>
              <th>Pershkrimi</th>
               <th>Vendodhja</th>
                <th>Sasia e vendeve</th>
                 <th>Sezoni</th>
                  <th>Cmimi</th>
                  <th>Data e nisjes</th>
                  <th>Nr i diteve</th>
                  <th>Foto</th>
                  <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM paketa where UserID = $userid ") or die(mysql_error());
              if(!$query)
              {
                echo "Nuk ka paketa te ketij admini";

              }
              else
              {
              while($f_query = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo $f_query['EmriP']?></td>
              <td><?php echo $f_query['Pershkrimi']?></td>
               <td><?php echo $f_query['Vendodhja']?></td>
                <td><?php echo $f_query['Sasia_e_vendeve']?></td>
                 <td><?php echo $f_query['Sezoni']?></td>
                  <td><?php echo $f_query['Cmimi']?></td>
                   <td><?php echo $f_query['Data_Nisjes']?></td>
                    <td><?php echo $f_query['Nr_i_diteve']?></td>
                    <td class="align-img"><center><img src="Foto/<?php echo $f_query['Foto'] ?>" width="80" height="60"></center></td>
                    <td class="align-img">
                       <a class = "btn btn-success btn-xs" href="paketa_edit.php?paketaID=<?php echo $f_query['paketaID']?>"   value ="<?php echo $f_query['paketaID']?>">
                Edit
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
              </a>
              <a class = "btn btn-danger  btn-xs" href="delete_paketa.php?PaketaID=<?php echo $f_query['paketaID']?>">
                Delete
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
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
  });
</script>
</html>