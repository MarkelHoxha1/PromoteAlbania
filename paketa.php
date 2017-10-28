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

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style1.css">
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
                    
                    <form method = "POST"  enctype="multipart/form-data">
                        <div class = "form-group">
                            <label>Emri i paketes</label>
                            <input  id = "emri" type = "text" name="emri"  class = "form-control" />
                            <input  id = "PaketaID" type = "hidden" value = "<?php echo $acc_fetch['PaketaID']?>" class = "form-control" />
                        </div>
                        <div class = "form-group">
                            <label>Vendodhja</label>
                            <input type = "text" id = "vendodhja" name="vendodhja" type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Sasia e vendeve</label>
                            <input type = "text" id = "Sasia" name="Sasia" type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Sezoni</label>
                            <input type = "text" id = "Sezoni" name="Sezoni" type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Pershkrimi</label>
                            <input type = "text" id = "Pershkrimi" name="Pershkrimi" type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Cmimi</label>
                            <input type = "text" id = "cmimi" name="cmimi"  type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Data e nisjes</label>
                            <input type = "text" id = "data" name="data"  type = "text"  class = "form-control" />
                            
                        </div>

                        <div class = "form-group">
                            <label>Numri i diteve</label>
                            <input type = "text" id = "ditet" name="ditet"  type = "text" class = "form-control" />
                            
                        </div>
                         <div class = "form-group">
                            <label>LLoji i Turizmit</label>
                            <select   name="lloji"  class = "form-control" />
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
                           
                            
                        </div>

                        <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </div>

                       
                         <input  type="submit"  value = "Save Package" name="ruaj" class="btn btn-primary btn-lg"></input>
                        </form>
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
<a href="sfida.php">Shto sfida</a>


     



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