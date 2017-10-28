<?php 
include('dbcon.php');

?>

<html>
    <head>
        
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="stili.css">
    </head>
    <body>

<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="bootstrap.php">Promote Albania</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="Login.php">Sign to your account</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    <div class="jumbotron">
        <h1>Register with us and discover the events!!!</h1>
        <div class="row">
            <div class="col-md-6">
                <div>Become a seller</div>
                <ul class="list-unstyled" style="line-height: 2">
                    <li><span class="glyphicon glyphicon-ok"></span> See all your orders</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Fast re-order</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Fast checkout</li>
                    <li><span class="glyphicon glyphicon-ok"></span> Get a gift <small>(only new customers)</small></li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class=""></p>
            </div>
            <div class="col-md-6">
                <form name=""  action =""  method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="username">Username*</label>
                        <input type="text" class="form-control"  name = "username" required  id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password*</label>
                        <input type="password"  name="password" class="form-control" required  id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="password_again">Password Again*</label>
                        <input type="password" class="form-control" name="password_again" required  id="password_again" placeholder="Retype password">
                    </div>
                    <div class="form-group">
                       <label for="type">Type*</label><br>
                      <select name ="Type" class="form-control">
                          <option>Admin_Agjensie</option>
                          <option>User</option>
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="first_Name">First_Name*</label>
                        <input type="text" class="form-control"  required   name="first_Name" id="first_Name" placeholder="First_Name">
                    </div>
                    <div class="form-group">
                        <label for="last_Name">Last_Name*</label>
                        <input type="text" class="form-control" required  name="last_Name" id="last_Name" placeholder="Last_Name">
                    </div>
                    <div class="form-group">
                        <label for="addres">Address*</label>
                        <input type="text" class="form-control" name="addres"  required="true" id="addres" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <input type="email" class="form-control" name="email" id="email"  required="true" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="agree"> By signup you agree to the terms and conditions*
                        </label>
                    </div>
                    <button type="submit"  name="register" class="btn btn-primary btn-lg">Create my account</button>
                    <br>
                        <div >
                        <h6 class="">* Must be filled</h6>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
   </body>
</html>
<?php 


$mysqli = new mysqli("localhost", "root", "", "promotealbania");
if(isset($_POST['register']))
{

$username  = $_POST['username'];
$password  = $_POST['password'];
$password_again = $_POST['password_again'];
$type = $_POST['Type'];
$first_Name = $_POST['first_Name'];
$last_Name = $_POST['last_Name'];
$addres = $_POST['addres'];
$email = $_POST['email'];

$target = "fotografi/".basename($_FILES['foto']['name']);
$image = $_FILES['foto']['name'];


$count =0;
//$foto = $_FILES['foto']['name'];
//$foto_tmp = $_FILES['foto']['tmp_name'];

move_uploaded_file($_FILES['foto']['tmp_name'], $target);


$query = "SELECT * FROM user where Username = '$username'";
$res = $mysqli->query($query);
$count  = mysqli_num_rows($res);
$gjat1 = strlen($username);
$gjat2 = strlen($first_Name);
if($count>0)
{
    ?>
    <script type="text/javascript">
        alert("This username exists!");
    </script>
    <?php
}
if($password!=$password_again)
{
    ?>
    <script type="text/javascript">
        alert("Passwords are not the same!");
    </script>
    <?php
}
else
if($gjat1<6 && $gjat2<6)
{
    ?>
    <script type="text/javascript">
        alert("Username too short!");
    </script>
    <?php 
}
else
{

//move_uploaded_file($foto_tmp, "images/$foto");
$pass = md5($password);


$insert_user = "insert into user (Username,Password,Type,First_Name,Last_Name,Address,Email,Foto) values 
('$username','$pass','$type','$first_Name','$last_Name','$addres','$email','$image')";

$insert = $mysqli->query($insert_user);
if($insert)
{
    echo "<script>alert('Personi u rregjistrua me sukses!')</script>";
    echo "<script>window.open('bootstrap.php','_self')</script>";

}
else  {
     echo "<script>alert('Person has  not been registered!')</script>";
}
}


}


?>
