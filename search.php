<?php
include('dbcon.php');

if(isset($_POST['search']))
{
			$se = $_POST['search'];
			$se = preg_replace("#[^0-9a-z]#i", "", $se);

				$sql = "SELECT * FROM paketa where EmriP LIKE '%$se%' OR Vendodhja LIKE '%$se%' "; 
				$sql1 = $mysqli->query($sql);
				$count = $sql1->num_rows;
		 if($count == 0)
			{
		 	 echo "<p>No results found</p>";
			}
			else
				{
		 			 while($search = $sql1->fetch_assoc())
		 			 {
		   				 ?>
		   					 <a href ="Turizmi1.php?paketaID=<?php echo $search['paketaID']; ?>"  value ="<?php echo $search['paketaID']; ?>" > <?php echo $search['EmriP']?></a><br>

						<?php
					}

				}
}

?>




