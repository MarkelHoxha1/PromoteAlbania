<?php
require('session.php');
require('dbcon.php');
require('user_name.php');

if(isset($_POST['dergo']))
{
  //require 'connect_to_mysql.php';
  $mesazhi =$_POST['fusha'];

   $sql = 'INSERT INTO promotealbania.mesazhe'.
      '(Pershkrimi,Tipi,UserID) '.
      'VALUES ( "'.$mesazhi.'","Kerkese", "'.$userid.'")';
      
   
   $retval = $mysqli->query( $sql);
   if(! $retval ) 
   {
      die('Could not enter data: ' . mysql_error());
   }
   else
   {
   echo "<script>alert(Kerkesa u dergua me sukses.)</script>";
    echo "<script>window.open('profili.php','_self')</script>";
   }
}
?>