<?php
if(isset($_POST["login"]))
{
$Username=$_POST['username'];
$Password=$_POST['password'];
$fetch="select * from user where Username='$Username' and Password='$Password'" or die(mysql_error());
$res = $mysqli_>query($fetch) or die("nuk ecen");
$row = mysqli_fetch_array($res);

if($row['Username']== $Username && $row['Password']== $Password)
{

echo "Login Succesful Welcome".$row['Username'];
}
  else{
  echo "error";
  }
}
?>