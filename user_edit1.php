<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');

?>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
           <div class = "alert alert-info"><a class = "btn btn-success" href = "profili.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
           </div>
			
        </div>
    </div>
</nav>
<div class="container">
<h1 align="center">Your Profile</h1>
    <div class = "col-md-12 well">
     
      <br/>
      <br/>
      <div class  = "alert alert-warning">User / Update</div>
      <div class = "row"> 
        <div class = "col-md-2 ">
        </div>
        <div class = "col-md-2">
        </div>
        <div class = "col-md-4">
          <?php
          if(isset($_GET['UserID']))
            {
            $acc_query = $mysqli->query("SELECT * FROM `user` WHERE UserID = '$_GET[UserID]'") or die(mysql_error());
            $acc_fetch = $acc_query->fetch_array();
                      ?>
          <form method = "POST" action="user_edit_query1.php?UserID=<?php echo $acc_fetch['UserID']?>" enctype="multipart/form-data">
            <div class = "form-group">
              <label>Username</label>
              <input  id = "username" type = "text" name="username" value = "<?php echo $acc_fetch['Username']?>" class = "form-control" />
              <input  id = "admin_id" type = "hidden" name="uid" value = "<?php echo $_GET['UserID']?>" class = "form-control" />
            </div>
            <div class = "form-group">
              <label>Type</label>
              <input type = "text" id = "Type" name="Type" type = "text" value= "<?php echo $acc_fetch['Type']?>" class = "form-control" />
              
            </div>
            <div class = "form-group">
              <label>First_Name</label>
              <input type = "text" id = "First_name" name="First_Name" type = "text" value= "<?php echo $acc_fetch['First_name']?>" class = "form-control" />
              
            </div>
            <div class = "form-group">
              <label>Last_Name</label>
              <input type = "text" id = "Last_name" name="Last_name" type = "text" value= "<?php echo $acc_fetch['Last_name']?>" class = "form-control" />
              
            </div>
            <div class = "form-group">
              <label>Address</label>
              <input type = "text" id = "Address" name="Address" type = "text" value= "<?php echo $acc_fetch['Address']?>" class = "form-control" />
              
            </div>
            <div class = "form-group">
              <label>Email</label>
              <input type = "text" id="Email" name="Email"  type = "text" value= "<?php echo $acc_fetch['Email']?>" class = "form-control" />
              
            </div>
            <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </div>
            <div id = "loading">
            </div>
            <br />
            <div class = "form-group">

              <button class = "btn btn-success"  type = "submit" href= "user_edit_query1.php?UserID=<?php echo $acc_fetch['UserID'] ?>" name="login" ><span class = "glyphicon glyphicon-save"></span> Save Changes</button>
            </div>
          </form>
          <?php
        }
        ?>

        </div>
      </div>  
    </div>
    </div>
    </body>
    </html>