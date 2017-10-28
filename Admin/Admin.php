<!DOCTYPE html>
<html>
<head>
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
session_start();
  if(isset($_SESSION['Username']))
  {
    echo "Hi:   ".$_SESSION['Username'];
  }
  ?>
  	
  </td>
  <td>
  <?php echo '<a href="bootstrap.html?action=logout">Logout</a>'; ?></table>
</td>
</tr>
</table>
<a href="#">Shiko raportet mbi shitjet</a>
<a href="#">Menaxho User-at</a>
<a href="#">Menaxho Komentet</a>
<a href="#">Menaxho Njoftimet</a>

     




</div>
<div id="left">
	

</div>
	



</div>

</body>
</html>