<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel = "stylesheet" type = "text/css" href = "bootstrap/css/jquery.dataTables.css" />
  <title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
  
</div>
<div id="left">
  <h2 style="text-align: center;">Menaxho</h2>
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
<a href="kerkesa.php">Shiko kerkesa</a>
<a href="shiko_paketa1.php">Shiko paketa</a>
<a href="paketa.php">Shto paketa</a>



</div>
<div id="right">
<div class = "col-md-12 well">
      <a class = "btn btn-success" href = "shiko_paketa1.php"><span class = "glyphicon glyphicon-hand-right"></span> Back</a>
      <br/>
      <br/>
      <div class  = "alert alert-warning">Paketa / Update</div>
      <div class = "row"> 
        <div class = "col-md-2 ">
        </div>
        <div class = "col-md-2">
        </div>
        <div class = "col-md-4">
          <?php
          if(isset($_GET['paketaID']))
            {
            $acc_query = $mysqli->query("SELECT * FROM `paketa` WHERE paketaID = '$_GET[paketaID]'") or die(mysql_error());
            $acc_fetch = $acc_query->fetch_array();
                      ?>
                      <table>
          <form method = "POST"   action="edit.php?paketaID=<?php echo $acc_fetch['paketaID']?>" enctype = "multipart/form-data">
            <div class = "form-group">
              <td><tr>
              <label>Emri i paketes</label></tr><tr>
              <input  id = "emri" type = "text" name="emri" value = "<?php echo $acc_fetch['EmriP']?>" class = "form-control" />
              <input  id = "PaketaID" type = "hidden"  name = "paketaID" value = "<?php echo $acc_fetch['paketaID']?>" class = "form-control" />
            </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Vendodhja</label></tr><tr>
              <input type = "text" id = "vendodhja" name="vendodhja" type = "text" value= "<?php echo $acc_fetch['Vendodhja']?>" class = "form-control" />
              </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Sasia e vendeve</label></tr><tr>
              <input type = "text" id = "Sasia" name="Sasia" type = "text" value= "<?php echo $acc_fetch['Sasia_e_vendeve']?>" class = "form-control" />
              </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Sezoni</label></tr><tr>
              <input type = "text" id = "Sezoni" name="Sezoni" type = "text" value= "<?php echo $acc_fetch['Sezoni']?>" class = "form-control" />
              </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Pershkrimi</label></tr><tr>
              <input type = "text" id = "Pershkrimi" name="Pershkrimi" type = "text" value= "<?php echo $acc_fetch['Pershkrimi']?>" class = "form-control" />
               </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Cmimi</label></tr><tr>
              <input type = "text" id = "cmimi" name="cmimi"  type = "text" value= "<?php echo $acc_fetch['Cmimi']?>" class = "form-control" />
              </tr></td>
            </div>
            <div class = "form-group">
              <td><tr>
              <label>Data e nisjes</label></tr><tr>
              <input type = "text" id = "data" name="data"  type = "text" value= "<?php echo $acc_fetch['Data_Nisjes']?>" class = "form-control" />
              </tr></td>
            </div>

            <div class = "form-group">
               <td><tr>
              <label>Numri i diteve</label></tr><tr>
              <input type = "text" id = "ditet" name="ditet"  type = "text" value= "<?php echo $acc_fetch['Nr_i_diteve']?>" class = "form-control" />
              </tr></td>
            </div>
            <div class="form-group">
              <td><tr>
                        <label>Choose Photo</label></tr><tr>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </tr></td>
            </div>

            <div id = "loading">
            </div>
            <br />
            <div class = "form-group">

              <button type="submit" href="edit.php?<?php echo $acc_fetch['paketaID']?>" class = "btn btn-success"  value="Save Changes" name="login" > Save Changes</button>
          </form>
          </table>
          <?php
        }
        ?>

        </div>
      </div>  
    </div>