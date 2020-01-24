<!doctype html>
<?php
require('session.php');
require('dbcon.php');
require('user_name.php');
?>
 
<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"  crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/offcanvas.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<style>
  .modal-backdrop.in{
    display: none
  }
</style>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script type="text/javascript" src ="js/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $(".ajax").click(function(){
        $(".div").load("ajax.php");
    });
});
 
</script>

<script type="text/javascript">
  function mos()
  {
    alert("Ju duhet te jeni te rregjistruar qe te beni nje Kerkese");
    alert("Ju faleminderit");
  }
</script>
<title>Promote Albania</title>
</head>

<body style="padding-top: 50px">

<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a id = "titulli" class="navbar-brand" href="bootstrap1.php">Promote Albania</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" style="padding-left:30%;" id="topFixedNavbar1">
      <ul  id = "#elem" class=" nav navbar-nav ">
        <li><a  href="bootstrap1.php" id="ele">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="#Contact Us" id="ele" data-toggle="modal" data-target="#myModal7">About Us<span class="sr-only">(current)</span></a></li>

        <div class="modal fade col-xs-12" id="myModal7" role="dialog">
         <div class="modal-dialog">
    
               <!-- Modal content-->
             <div class="modal-content">
                 <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">About Us</h4>
             </div>
              <div class="modal-body">
                <pre>Ky projekt u realizua nga studentet e deges se informatikes viti 3 grupi C1,
            Pjesmarres :
            1:
            2:
            3:
            4:
            5:</pre>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
            </div>
          </div>
          
          </div>
            </div>


       
       <li><a  id = "ele" href="#about us" data-toggle="modal" data-target="#myModal8" >Contact<span class="sr-only">(current)</span></a></li>
       <div class="modal fade col-xs-12" id="myModal8" role="dialog">
        <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact</h4>
        </div>
        <div class="modal-body">
          <pre>Per te na kontaktuar :
          
          </pre>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
            </div>
          </div>
          
          </div>
       
      </ul>
      </ul>
        <form class="navbar-form navbar-left" action="search.php" method="POST" role="search">
          <div id = "forma" class="form-group">
            <input type="text" id="src" class="form-control" name="search" placeholder="Search">
          </div>
        
         <a class="btn btn-success" onclick="redirect();">Search</a>
        
    <script >
      function redirect()
      {
        location.href="Turizmi1.php?search="+document.getElementById("src").value;
      }
    </script>
      <!-- Modal content-->

   
  
      </form>
      <ul class=" loget nav navbar-nav navbar-right">
        <li><h5 class="col-sm-1">
      <?php
  
    echo "Hi:".$name;
  
  ?>
  </h5></li>
         <li><a class="col-sm-1" style="padding-top: 8px;" href="logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

    <div class="container">
    <!-- Custom styles for this template -->

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1 class="ajax">Turizmi Blu </h1>
            <p>Përkatësisht turizmi pranë detit i përqendruar në perëndim të vendit dhe veçanërisht në Velipojë, Shën Gjin, Durrës, Vlorë, Rivierë dhe Sarandë, Ksamili është mese i frekuentuar. Këto qytete ofrojnë dhe një numër të madh shërbimesh, hotele dhe restorante, duke tërhequr vitet e fundit vëmendjen e turistëve të huaja.</p>
            <div class="div"></div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Vlora</h2>
              <p>Vlorë is a coastal city and municipality in southern Albania. It is the second largest port city of Albania, after Durrës. It is where the Albanian Declaration of Independence was proclaimed on November 28, 1912... </p>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">See More</button>

  <!-- Modal -->
  <div class="modal fade col-xs-12" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Vlora</h4>
        </div>
        <div class="modal-body">
          <p>Vlora is a coastal city and municipality in southern Albania. It is the second largest port city of Albania, after Durrës. It is where the Albanian Declaration of Independence was proclaimed on November 28, 1912. Vlorë was briefly the capital of Albania.

Founded as an ancient Greek colony in the 6th century BC by the name of Aulon and continuously inhabited for about 26 centuries, Vlorë is home to the Port of Vlorë and University of Vlorë as the most important economical and cultural city of southwestern Albania.</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Vlora.jpg" alt="...">
      <div class="carousel-caption">
        Vlora
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Vlora1.jpg" alt="...">
      <div class="carousel-caption">
         Vlora
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Vlora2.jpg" alt="...">
      <div class="carousel-caption">
         Vlora
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    </div>
  </div>
</div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
   
  </div>
            </div><!--/.col-xs-6.col-lg-4-->


            <div class="col-xs-6 col-lg-4">
              <h2>Pogradec</h2>
              <p>Pogradec is a city and municipality in central Albania, situated on the shores of one of Europe's deepest and oldest lakes, the Ohrid lake. It is located in the County of Korçë.This city is surrounded by hills on the southern and western side... </p>
               <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">See More</button>

  <!-- Modal -->
   <div class="modal fade col-xs-12" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Pogradeci</h4>
        </div>
        <div class="modal-body">
          <p>Pogradec is a city and municipality in central Albania, situated on the shores of one of Europe's deepest and oldest lakes, the Ohrid lake. It is located in the County of Korçë.

This city is surrounded by hills on the southern and western side. The lake is in the eastern and northern side of the city. The highway linking to Tirana, Elbasan and Korçë passes through the city. It is located southeast of Elbasan, southwest of Ohrid in the Republic of Macedonia, north of Korçë and northwest of Florina in Greece.</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Pogradec.jpg" alt="...">
      <div class="carousel-caption">
        Pogradec
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Pogradec1.jpg" alt="...">
      <div class="carousel-caption">
         Pogradec
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Pogradec2.jpg" alt="...">
      <div class="carousel-caption">
         Pogradec
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Pogradec3.jpg" alt="...">
      <div class="carousel-caption">
         Pogradec
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    </div>
  </div>
</div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
   
  </div>
  
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Shkoder</h2>
              <p>Shkodër ([ˈʃkɔdəɾ]; definite Albanian form: Shkodra [ˈʃkɔdɾa], for other names see the etymology section), is a city and municipality in northwestern Albania and the seat of the county with the same name... </p>
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">See More</button>

  <!-- Modal -->
  
   <div class="modal fade col-xs-12" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Shkoder</h4>
        </div>
        <div class="modal-body">
          <p>Shkodër ([ˈʃkɔdəɾ]; definite Albanian form: Shkodra [ˈʃkɔdɾa], for other names see the etymology section), is a city and municipality in northwestern Albania and the seat of the county with the same name. It is one of the oldest and most historic places in Albania and also in the Balkans, as well as an important cultural and economic centre. In ancient times, Shkodër was known under the name Scodra and was the capital of the Labeates, an old Illyrian tribe.</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Shkoder.jpg" alt="...">
      <div class="carousel-caption">
        Shkoder
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Shkoder1.jpg" alt="...">
      <div class="carousel-caption">
         Shkoder
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Shkoder3.jpg" alt="...">
      <div class="carousel-caption">
         Shkoder
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Shkoder4.jpg" alt="...">
      <div class="carousel-caption">
         Shkoder
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>
    </div>
  </div>
</div>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
   
  </div>
            </div><!--/.col-xs-6.col-lg-4-->

          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Paketa</a>
           <?php  $mysqli = new mysqli("localhost", "root", "", "promotealbania");  ?>

            <?php
             $cat_sql = 'SELECT * FROM paketa'; 
            $cat = $mysqli->query($cat_sql);
            $cat_query = $cat->fetch_assoc();
           // $paketaiID = $cat_query['paketaiID'];
            ?>
            <p><?php  
            do
            {  ?>
            <a href="Turizmi1.php?paketaID=<?php echo $cat_query['paketaID']; ?>"  value ="<?php echo $cat_query['paketaID']; ?>"  class="list-group-item">
                 <?php echo $cat_query['EmriP']; ?></a>

              <?php
                }
                 while($cat_query = $cat->fetch_assoc())



            ?>
          </div>
          <a href="#" style="display:none" class="list-group-item" id="modalOpen" data-toggle="modal" data-target="#myModal"></a>
          <a href="#" style="display:none" class="list-group-item" id="modalOpen1" data-toggle="modal" data-target="#myModalii"></a>
        </div><!--/.sidebar-offcanvas-->
  <?php 
  
if(isset($_GET['paketaID']))
{?>   
<?php

  $paketa_sql =" SELECT * From paketa where paketaID =".$_GET['paketaID'];

  if($paketa_query = $mysqli->query($paketa_sql))
  {
    $paketa_rs = $paketa_query->fetch_assoc();
    ?>
             
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php  echo $paketa_rs['EmriP']; ?></h4>
        </div>
        <div class="modal-body">
          <table class="pull-left col-md-8 ">


    <tbody>
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
                    <?php 
              $mysqli = new mysqli("localhost", "root", "", "promotealbania");

            $sq = "SELECT * FROM paketa where  paketaID =".$_GET['paketaID'];
            $result = $mysqli->query($sq);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
            {   ?>
         
             <img src="Foto/<?php echo  $row['Foto']; ?>" alt="teste" class="img-thumbnail" >
        <?php    
      }




                    ?>
                       
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <a type="button" href="bli.php?paketaID=<?php echo $paketa_rs['paketaID'];?>"  class="btn btn-default" >Bli</a>

        </div>
        </div>
        </div>
        </div>
        </p>
        <script>
             document.getElementById("modalOpen").click();
           </script>

    <?php

  }
 //$paketa = $_GET['paketaID'];
}
?>



<?php 
  
if(isset($_GET['search']))
{
  $se =$_GET['search'];
  $se = preg_replace("#[^0-9a-z]#i", "", $se);

        $sql = "SELECT * FROM paketa where EmriP LIKE '%$se%' OR Vendodhja LIKE '%$se%' "; 
        $sql1 = $mysqli->query($sql);
        $count = $sql1->num_rows;
  

  ?>
  <div class="modal fade" id="myModalii" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Rezultatet</h4>
        </div>
        <div class="modal-body">
          <?php if($count==0){ ?><h4>No Results</h4><?php } 
          else {
          while($search = $sql1->mysql_fetch_assoc())
           {
            
               ?>
                 <a href ="Turizmi1.php?paketaID=<?php echo $search['paketaID']; ?>"  value ="<?php echo $search['paketaID']; ?>" > <?php echo $search['EmriP']?></a><br>

            <?php
          }?>                     
                    </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
        </div>
        </div>
        </div>
        </div>
        </p>
        <script>
             document.getElementById("modalOpen1").click();
           </script>

    <?php

  }
 //$paketa = $_GET['paketaID'];
}
?>
         
            </div>
            </div>
            
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; OM<sup>4</sup>.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
  </body>
</html>
