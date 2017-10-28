<!DOCTYPE html>
<?php


include('dbcon.php'); 
include('session.php');
include('user_name.php');
?>



<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/jquery.dataTables.css">

		 <!--pagination-->
	    <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
	    <script src="bootstrap/js/jquery.dataTables2.js"></script>


	</head>

	<style type="text/css">
		.navbar { margin-bottom:0px !important; }
		.carousel-caption { margin-top:0px !important }

		td.align-img {
			line-height: 3 !important;
		}
	</style>
</head>
<body>





<table id="myTable" class="table table-striped" >  
				<thead>
					<th>Emri I Paketes </th>
              <th>Pershkrimi</th>
               <th>Vendodhja</th>
                <th>Sasia e vendeve</th>
                 <th>Sezoni</th>
                  <th>Cmimi</th>
                  <th>Foto</th>
                 
                 
					<th><center>ACTION</center></th>
				</thead>
				<tbody>
					<?php
              $query =$mysqli->query("SELECT * FROM paketa where UserID = $userid ") or die(mysql_error());
              if(!$query)
              {
                echo "Nuk ka paketa te ketij admini";

              }
              else
              {
              while($f_query = mysqli_fetch_array($query)){
            ?>
            <tr>
              <td><?php echo $f_query['EmriP']?></td>
              <td><?php echo $f_query['Pershkrimi']?></td>
               <td><?php echo $f_query['Vendodhja']?></td>
                <td><?php echo $f_query['Sasia_e_vendeve']?></td>
                 <td><?php echo $f_query['Sezoni']?></td>
                  <td><?php echo $f_query['Cmimi']?></td>
                  <td class="align-img"><center><img src="<?php echo $f_query['Foto'] ?>" width="50" height="50"></center></td>
                  
                   
					<tr>
					
						<!--<td class="align-img"><center><img src="<?php echo $bimg; ?>" width="50" height="50"></center></td>
						<td class="align-img"><?php echo 'Php '.number_format($bPrice, 2); ?></td>
						<td class="align-img">-->
							<a class = "btn btn-success btn-xs" href="boatsupdate.php?editid=<?php echo $bid; ?>">
								Edit
								<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
							</a>
							<a class = "btn btn-danger  btn-xs" href="index.php?delid=<?php echo $bid; ?>&bimg=<?php echo $bimg; ?>">
								Delete
								<span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
							</a>
						
					</tr>
					</tr>
					<?php }
					} ?>

				</tbody>
			</table>

		 </div>

			
		<!-- main cntent -->

	</body>
 		<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
 		<script src="bootstrap/js/dataTables.js"></script>
 		<script src="bootstrap/js/dataTables2.js"></script>
 		<script src="bootstrap/js/bootstrap.js"></script>
 		    <!--pagination-->
    <link rel="stylesheet" href="bootstrap/css/jquery.dataTables.css"><!--searh box positioning-->
    <script src="bootstrap/js/jquery.dataTables2.js"></script>


    <script>
//script for pagination
$(document).ready(function(){
    $('#myTable').dataTable();
});
    </script>


</html>