<!DOCTYPE html>
<?php
include('dbcon.php');
include('session.php');
include('user_name.php');
?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body>
<div class="main_wrapper">
<div id="header">
    
</div>
<div id="right">



<div class  = "alert alert-warning">Insert Challenge</div>
            <div class = "row"> 
                <div class = "col-md-2 ">
                </div>
                <div class = "col-md-2">
                </div>
                <div class = "col-md-4">
                    
                    <form method = "POST"  enctype="multipart/form-data">
                        <div class = "form-group">
                            <label>Emri i Sfides</label>
                            <input  id = "emri" type = "text" name="emri"  class = "form-control" />
                            <input  id = "PaketaID" type = "hidden" value = "<?php echo $acc_fetch['PaketaID']?>" class = "form-control" />
                        </div>
                        <div class = "form-group">
                            <label>Pershkrimi</label>
                            <input type = "text" id = "vendodhja" name="vendodhja" type = "text"  class = "form-control" />
                            
                         <div class = "form-group">
                            <label>Data e nisjes</label>
                            <input type = "text" id = "data" name="data"  type = "text"  class = "form-control" />
                            
                        </div>
                       
                        </div>
                        <div class = "form-group">
                            <label>Data e Mbarimit</label>
                            <input type = "text" id = "Datam" name="Datam" type = "text"  class = "form-control" />
                            
                        </div>
                        <div class = "form-group">
                            <label>Destinacioni</label>
                            <input type = "text" id = "Destinacioni" name="Destinacioni" type = "text"  class = "form-control" />
                            
                        </div>
                       

                        
                        <div class="form-group">
                        <label>Choose Photo</label>
                        <input type="hidden" name="size" value="100000000">
                        <input type="file" name="foto">
                        </div>

                       
                         <input  type="submit"  value = "Save Challenge" name="ruaj" class="btn btn-primary btn-lg"></input>
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
<a href="sfid.php">Shto Sfida</a>


     



</div>
    



</div>

</body>
</html>
<?php
 
$llojii = "";
if(isset($_POST['ruaj']))
{

        $emri  = $_POST['emri'];
        $vendodhja  = $_POST['vendodhja'];
        $data = $_POST['data'];
        $dite = $_POST['Datam'];
        $destinacioni = $_POST['Destinacioni'];
        

$target = "Foto/"+basename($_FILES['foto']['name']);
$image = $_FILES['foto']['name'];

            

        $count =0;


    move_uploaded_file($_FILES['foto']['tmp_name'], $target);


        $query = "SELECT * FROM sfida where Emri = '$emri'";
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

                    $insert_user = "insert into sfida (Emri,Pershkrimi,Data_fillimit,Data_mbarimit,Destinacioni,Foto) values 
                        ('$emri','$vendodhja','$data','$dite','$destinacioni','$image')";

                    $insert = $mysqli->query($insert_user);
                    if($insert)
                    {
                         echo "<script>alert('Package has been registered with success!')</script>";
                          echo "<script>window.open('Admin_Agjensie.php','_self')</script>";

                    }
                    else 
                    {
                         echo "<script>alert('Package has  not been registered!')</script>".mysql_error();
                    }


                }
}


?>