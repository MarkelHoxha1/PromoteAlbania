<?php 
session_start();

unset($_SESSION['UserID']);

header('location:bootstrap.php');


?>