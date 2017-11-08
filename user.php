<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href="bootstrap/css/bootstrap.css" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
     <script src="bootstrap/js/jquery.dataTables2.js"></script>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
     
<div class = "alert alert-info"><a class = "btn btn-success" href = "Admin.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a> <br>
<br>
        <table id = "table" class = " table table-striped">
          <thead>
            <tr>
              <th>Username</th>
              <th>Type</th>
               <th>First_Name</th>
                <th>Last_name</th>
                 <th>Address</th>
                  <th>Email</th>
                  <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = $mysqli->query("SELECT * FROM user where Type!='Admin'") or die(mysql_error());
              while($f_query = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo $f_query['Username']?></td>
              <td><?php echo $f_query['Type']?></td>
               <td><?php echo $f_query['First_name']?></td>
                <td><?php echo $f_query['Last_name']?></td>
                 <td><?php echo $f_query['Address']?></td>
                  <td><?php echo $f_query['Email']?></td>



                    <td><center><a href="user_edit.php?UserID=<?php echo $f_query['UserID']?>" value ="<?php echo $f_query['UserID']?>" class = "btn btn-success btn-sm"><span class = "glyphicon glyphicon-look" ></span> Edit </a> | <a  href="delete_user.php?Username=<?php echo $f_query['Username']?>" class = "btn btn-danger"><span class = "glyphicon glyphicon-trash" ></span> Delete</a></center></td>









                  
             
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
    <script src="bootstrap/js/jquery.dataTables2.js"></script>

<link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="bootstrap/js/jquery.dataTables2.js"></script>


<script type = "text/javascript">
  $(document).ready(function(){
    $('#table').DataTable();
  });
</script>
</html>