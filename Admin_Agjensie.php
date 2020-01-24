<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
	<title>Admin Panel</title>
	
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
	
</div>
<div id="right">



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
</html>