<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"  crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
</div>
<div id="right">



<div class  = "alert alert-warning">Insert Package</div>
            <div class = "row"> 
                <div class = "col-md-2 ">
                </div>
                <div class = "col-md-2">
                </div>
                <div class = "col-md-4">
                    <table>
                    <form method = "POST"  enctype="multipart/form-data">
                        <div class = "form-group"><td>
                            <tr>
                            <label>Emri i paketes</label> </tr>
                            <tr>
                            <input  id = "emri" type = "text" name="emri"  class = "form-control" />
                            <input  id = "PaketaID" type = "hidden" value = "<?php echo $acc_fetch['PaketaID']?>" class = "form-control" />
                        </tr>
                    </td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Vendodhja</label></tr><tr>
                            <input type = "text" id = "vendodhja" name="vendodhja" type = "text"  class = "form-control" />
                            </tr></td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Sasia e vendeve</label></tr><tr>
                            <input type = "text" id = "Sasia" name="Sasia" type = "text"  class = "form-control" />
                            </tr></td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Sezoni</label></tr><tr>
                            <input type = "text" id = "Sezoni" name="Sezoni" type = "text"  class = "form-control" />
                            </tr></td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Pershkrimi</label></tr><tr>
                            <input type = "text" id = "Pershkrimi" name="Pershkrimi" type = "text"  class = "form-control" />
                            </tr></td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Cmimi</label></tr><tr>
                            <input type = "text" id = "cmimi" name="cmimi"  type = "text"  class = "form-control" />
                            </tr></td>
                        </div>
                        <div class = "form-group">
                            <td><tr>
                            <label>Data e nisjes</label></tr><tr>
                            <input type = "date" id = "data" name="data"  type = "text"  class = "form-control" />
                            </tr></td>
                        </div>

                        <div class = "form-group">
                            <td><tr>
                            <label>Numri i diteve</label></tr><tr>
                            <input type = "text" id = "ditet" name="ditet"  type = "text" class = "form-control" />
                            </tr></td>
                        </div>
                         <div class = "form-group">
                            <td><tr>
                            <label>LLoji i Turizmit</label></tr><tr>
                            <select  id="llojTurizmi" name="lloji"  class = "form-control" />
                            <option>Select a kind of tourisms</option>
                               <?php 
                                $sql = "SELECT  * FROM turizmi";
                                $run = $mysqli->query($sql);
                                while ($rows=$run->fetch_array()) 
                                {
                                    $tid = $rows['TurizmiID'];
                                    $tll = $rows['Lloji'];
                                    echo "<option value='$tid'>$tll</option>";
                                }
                                ?></select>
                                </tr></td>
                        </div>

                        <div class="form-group">
                        <td><tr>
                        <label>Choose Photo</label></tr><tr>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </tr></td>
                        </div>

                        <td><tr>
                         <input  type="submit" id="ruajPakete" value = "Save Package" name="ruaj" class="btn btn-primary btn-lg"></input>
                         </tr></td>
                        </form>
                        </table>
                        </div>
                        </div>

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
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
        <script src="bootstrap/js/dataTables.js"></script>
        <script src="bootstrap/js/dataTables2.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
<?php
 
$llojii = "";
if(isset($_POST['ruaj']))
{

        $emri  = $_POST['emri'];
        $vendodhja  = $_POST['vendodhja'];
        $sasia = $_POST['Sasia'];
        $sezoni = $_POST['Sezoni'];
        $pershkrimi = $_POST['Pershkrimi'];
        $cmimi = $_POST['cmimi'];
        $data = $_POST['data'];
        $dite = $_POST['ditet'];
        $lloji = $_POST['lloji'];
        

$target = "Foto/"+basename($_FILES['foto']['name']);
$image = $_FILES['foto']['name'];

            

        $count =0;


    move_uploaded_file($_FILES['foto']['tmp_name'], $target);


        $query = "SELECT * FROM paketa where EmriP = '$emri'";
        $res = $mysqli->query($query,$conn);
        $count  = mysqli_num_rows($res);
                if($count>0)
                {
                    ?>
                    <script type="text/javascript">
                        alert("This package exists!");
                    </script>
                    <?php
                }
                else
                {

                    $insert_user = "insert into paketa (EmriP,Vendodhja,Sasia_e_vendeve,Sezoni,Pershkrimi,Cmimi,Data_Nisjes,Nr_i_diteve,Foto,UserID,TurizmiID) values 
                        ('$emri','$vendodhja','$sasia','$sezoni','$pershkrimi','$cmimi','$data','$dite','$image','$userid','$lloji')";

                    $insert = $mysqli->query($insert_user,$conn);
                    if($insert)
                    {
                         echo "<script>alert('Package has been registered with success!')</script>";
                          echo "<script>window.open('paketa.php','_self')</script>";

                    }
                    else 
                    {
                         echo "<script>alert('Package has  not been registered!')</script>".mysql_error();
                          header('location: paketa.php');
                    }


                }
}


?>