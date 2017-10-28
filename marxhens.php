<!doctype html>

<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="offcanvas.css" rel="stylesheet" type="text/css">
<style>
  .modal-backdrop.in
  {
    display: none
  }
</style>

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<title>Promote Albania</title>
</head>

<body style="padding-top: 70px">
<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a id = "titulli" class="navbar-brand" href="bootstrap.php">Promote Albania</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul  id = "#elem" class=" nav navbar-nav ">
        <li><a  href="bootstrap.php" id="ele">Home<span class="sr-only">(current)</span></a></li>
       <li><a href="ornes.php" id="ele">Challenge<span class="sr-only">(current)</span></a></li>
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
            1:Markel Hoxha
            2:Mario Margegaj
            3:Mario Coku
            4:Ornes Gjoka
            5:Marxhens Kumuria.</pre>
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
          Markel Hoxha (markel.hoxha@fshnstudent.info) Nr celular:0692676041
          Mario Margegaj (mario.margegaj@fshnstudent.info)  Nr celular:0674428368
          Mario Coku(mario.coku@fshnstudent.info)   Nr celular:0665425987
          Ornes Gjoka (ornes.gjoka@fshnstudent.info)  Nr celular:0684596123
          Marxhens Kumuria(marxhens.kumuria@fshnstudent.info)  Nr celular:0682549684
          </pre>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      
            </div>
          </div>
          
          </div>
       
      </ul>
      <form class="navbar-form navbar-left" action="search.php" method="POST" role="search">
          <div id = "forma" class="form-group">
            <input type="text" id="src" class="form-control" name="search" placeholder="Search">
          </div>
        <a class="btn btn-success" onclick="redirect();">Search</a>
        
    <script >
      function redirect()
      {
        location.href="marxhens.php?search="+document.getElementById("src").value;
      }
    </script>
      </form>
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
            <h1>Turizmi Kulinar </h1>
            <p>Kulinaria eshte zemra e cdo lloj turizmi. Per te mare me te miren nga shqiperia ju duhet patjeter te shijoni kete forme te shijuari pushimesh. Shqiperia ka cte ofroje kshu qe nuk do mbeteni te zhgenjyer.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Embelsira</h2>
              <p>Nuk mund te thoni se e keni shijuar nje vend qe keni vizituar pa ndjere shijen e embelsirave tradicionale qe ai vend origjine realisht ka...</p>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">See More</button>

  <!-- Modal -->
  <div class="modal fade col-xs-12" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Embelsira</h4>
        </div>
        <div class="modal-body">
          <p>Nuk mund te thoni se e keni shijuar nje vend qe keni vizituar pa ndjere shijen e embelsirave tradicionale qe ai vend ka.
          Embelsirat traditcionale jane nga  me te shumllojshmet ne varsi te trevave ku ato me se shumti gatuhen. Nqs Kaloni ne Diber mos harroni te provoni Shendetlijen nje ushqim  vertete tradicional dhe tipik shqiptar. Per te vazhduar me ne jug me qytetin e Elbasanit ku do te gjeni nje nga embelsirat me te vecanta ne bote. Ballokumja qe eshte tipike e vetem ketij qyteti si dhe eshte simbol i dites se veres. feste zyrtare ne shqiperi. Per ta mbyllur me nje embelsire qe gatuhet ne gjithe shqiperine ng jugu ne veri. Kjo embelsire eshte Bakllavaja por do tu sugjeroja te vizitonit shqiperine sidomos gjate festave te fundvitit.  </p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="shendetlije.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="ushqim4.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="bakllava.jpg" alt="...">
      <div class="carousel-caption">
         Image
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
              <h2>Tradita</h2>
              <p>Vendi yne eshte nje nga vendet me te lashta ne bote dhe si e tille ka edhe nje nga guzhinat traditcionale me te pasura dhe me te larmishme ne bote.  
                        </p>
               <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">See More</button>

  <!-- Modal -->
   <div class="modal fade col-xs-12" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Gatime Traditcionale</h4>
        </div>
        <div class="modal-body">
                        
<p>Vendi yne eshte nje nga vendet me te lashta ne bote dhe si e tille ka edhe nje nga guzhinat traditcionale me te pasura dhe me te larmishme ne bote. Klima eshte e pershtatshme per nje larmi te madhe ushqimesh. Ju ftojme ti shijoni kto shumllojmshmeri ushqimesh qe zor se mdo i gjeni ne ndonje vend tjeter ne bote.</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="marxhens.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="ushqim5.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="ushqim6.png" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="koran.jpg" alt="...">
      <div class="carousel-caption">
         Image
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
              <h2>Brumrat</h2>
              <p>Persa i perket brumrave guzhina shqiptare eshte ndikuar se teprmi nga ajo orientale  po persa i perket shumllojmshemire jemi nje vend unik... </p>
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">See More</button>

  <!-- Modal -->
  
   <div class="modal fade col-xs-12" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Brumrat</h4>
        </div>
        <div class="modal-body">
          <p>Persa i perket brumrave guzhina shqiptare eshte ndikuar se teprmi nga ajo orientale po persa i perket shumllojmshemire jemi nje vend unik. Zonat qe shquhen me se shumti per gatimin e brumrave jane kryesisht Korca,teper e famshme per lakrorin Kuksi, i famshem per fline e zona te tjera ku gatuhen te gjitha llojet e piteve(byrekeve) qe do keni mundesi ndonjehere te shijoni...</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="ushqim1.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="lakror.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="byrek.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="byrek2.jpg" alt="...">
      <div class="carousel-caption">
         Image
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
           <?php    

           $mysqli = new mysqli("localhost", "root", "", "promotealbania");
              ?>


            <?php
             $cat_sql = 'SELECT * FROM paketa where TurizmiID= 4'; 
            $cat = $mysqli->query($cat_sql,$conn);
            $cat_query = $cat->fetch_assoc();
           // $paketaiID = $cat_query['paketaiID'];
            ?>
            <p><?php  
            do
            {  ?>
            <a href="marxhens.php?paketaID=<?php echo $cat_query['paketaID']; ?>"  value ="<?php echo $cat_query['paketaID']; ?>"  class="list-group-item">
                 <?php echo $cat_query['EmriP']; ?></a>

              <?php
                } while($cat_query = $cat->fetch_assoc())



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
                        <img src="Foto/<?php echo $paketa_rs['Foto'];?>" alt="teste" class="img-thumbnail">  
                    </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
           <a type="button" onclick="mos()" href="#"  class="btn btn-default" >Bli</a>

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
}
?>
<?php 
  
if(isset($_GET['search']))
{
  $se =$_GET['search'];
  $se = preg_replace("#[^0-9a-z]#i", "", $se);

        $sql = "SELECT * FROM paketa where TurizmiID = 4 and EmriP LIKE '%$se%' OR Vendodhja LIKE '%$se%' "; 
        $sql1 = $mysqli->query($sql);
        $count = mysqli_num_rows($sql1);
  

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
          while($search = $sql1->fetch_assoc())
           {
            
               ?>
                 <a href ="marxhens.php?paketaID=<?php echo $search['paketaID']; ?>"  value ="<?php echo $search['paketaID']; ?>" > <?php echo $search['EmriP']?></a><br>

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
