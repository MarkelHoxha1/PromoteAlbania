<html lang="en">
<?php    
$mysqli = new mysqli("localhost", "root", "", "promotealbania");
?>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">#emri i paketes</h4>
        </div>
        <div class="modal-body">
          <table class="pull-left col-md-8 ">
          <?php
          $paketa_sql =" SELECT * From paketa where paketaID = 3 ";

$paketa_query = $mysqli->query($paketa_sql);
  
    $paketa_rs = $paketa_query->fetch_assoc();
   
  
       ?>                   <tbody>
                             <tr>
                                 <td class="h6"><strong>Emri i Paketes</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['EmriP']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Vendodhja</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Vendodhja']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Sasia_e_vendeve</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Sasia_e_vendeve']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Pershkrimi</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Pershkrimi']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Sezoni</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Sezoni']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Cmimi</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Cmimi']; ?></td>
                             </tr>  

                             <tr>
                                 <td class="h6"><strong>Data e nisjes</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Data_Nisjes']; ?></td>
                             </tr>                            

                             <tr>
                                 <td class="h6"><strong>Nr i diteve</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $paketa_rs['Nr_i_diteve']; ?></td>
                             </tr>

                         </tbody>
                    </table>
                             
                         
                    <div class="col-md-4"> 
                        <img src="shtepi.jpg" alt="teste" class="img-thumbnail">  
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <button type="button" class="btn btn-default" >Bli</button>

        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
