<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
	<title>Admin Panel</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/jquery-1.11.3.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
  <script src = "jquery-3.1.1.min.js">
  </script>
  <script type="text/javascript">
$(document).ready(function(){
   $('.doni').on('click',function()
   {
    $.ajax('me_shume.php',
    {
      success: function(response)
      {
$('.s').html(response).slideDown();
      } 
    });
   });
});
   
  </script>
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
<a class="doni">Doni te dini me shume</a>
<div class="s"></div>


     




</div>
<div id="left">
	

</div>
	



</div>

</body>
</html>