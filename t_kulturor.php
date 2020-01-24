<?php 
include('dbcon.php');
include('session.php');
include('user_name.php'); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"  crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"  crossorigin="anonymous">
<!--link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"-->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/offcanvas.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"  crossorigin="anonymous"></script>
<script src="js/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
</script>
<title>Promote Albania</title>
</head>

<body style="padding-top: 70px">
<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a id = "titulli" class="navbar-brand" href="bootstrap1.php">Promote Albania</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1" style="padding-left:30%;">
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
        location.href="t_kulturor.php?search="+document.getElementById("src").value;
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
         <li><a class="col-sm-1" href="logout.php">Logout</a></li>
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
            <h1>Turizmi kulturor</h1>
            <p>Pasuria kulturore përkufizon identitetin e një bashkësie njerëzore dhe përben një resurs të çmuar i cili për vetë natyrën e tij të ndërlikuar, nuk është i rinovueshem dhe për këtë gjë ka nevoje të mbrohet dhe vlerësohet për t'i garantuar </p> 
            <input type="button" id="see_more" value="Me shume">
            <p id="hide">jetëgjatësinë dhe përfitimin në kohëzgjatje.Qytetet artistike ose historike, le të themi, janë gjithmonë e më të privilegjuarat nga pikëpamja e vëzhguesve dhe ruajtësve të artit dhe kulturës.</p>
            <script type="text/javascript">
            $('#hide').fadeOut(10);
            $('#see_more').click(function()
            {
              $(this).fadeOut(1000);
              $('#hide').fadeIn(1000);
            });
            </script>
          </div>
          <div class="row">




<div class="col-xs-6 col-lg-4">
  <h2>Teatri</h2>
  <p>Prania e ndertimeve te teatrove antike monumentale arkitektonike , në qendrat ilire si Apolloni, Butrint, Bylis (Hekal), Nikoia (Klos), Orik Foinika (Finiq)...</p>
   <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">See More</button>

<!-- Modal -->
<div class="modal fade col-xs-12" id="myModal4" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Teatri</h4>
</div>
<div class="modal-body">
<p>Drama dhe levizja teatrore rinisi ne kuadrin e levizjes se Rilindjes kombetare. Më 1874 Koto Hoxhi organizoi shfaqjen e pare teatrale me subject nga Dasma e Lunxherise me trupen e nxënësve te shkollës normale “Ta Zografia” të Qesaratit. Më 1899, u dha nga një grup shkollor në Korçë, vepra e Shekspirit, “Otello”.. Në vitin 1875, Sami Frashëri (1850-1904), botoi në turqisht dramën me subjekt shqiptar “Besa”. Kjo vepër u botua në shqip më 1901. Pas kësaj, më 1880, Leonard de Marlino (1830-1923), shkroi “Nata e Këshëndellave”. Më 1882, Pashk Babi shkroi “Biri i Çifutit”, Françesk Anton Santori shkroi “Ermira”, Gjergj Fishta “Shën Françeska e Azisit”, më 1909.</p>
</div>
<div class="modal-footer">

<div class="modal-dialog modal-lg">
<div class="modal-content">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">



<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img class="img-responsive" src="Foto/historiku.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/index1.jpeg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/index.jpeg" alt="...">
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
  <h2>Muzeume</h2>
  <p>Ne Shqiperi ekziston nje numer i madh muzesh pothuajse ne te gjitha qytetet. Kjo gje ka ardhur nga historia e Shqiperise nder vite. </p>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">See More</button>

<!-- Modal -->
<div class="modal fade col-xs-12" id="myModal5" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Muzeume</h4>
</div>
<div class="modal-body">
<p>Muzeu Historik Kombëtar.Muzeu Arkeologjik.Muzeu i Shkencave të Natyrës. Galera Kombëtare e Arteve Figurative. Muzeu Gjergj Kastrioti Skënderbeu. Muzeu Etnografik.
Amfitheatri i Durrësi. Muzeu i Ikonave të Onufrit. Muzeu i  Artit Mesjetar. Muzeu i Arsimit. Muzeu Prehistorik . Muzeu Historik i Shkodrës. Muzeu i Rozafës </p>
</div>
<div class="modal-footer">

<div class="modal-dialog modal-lg">
<div class="modal-content">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img class="img-responsive" src="Foto/Durres.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/Durres1.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/Durres2.jpg" alt="...">
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
  <h2>Arkeologjia</h2>
  <p>Territori i Shqiperise, si pasoje i pozicionit  te favorshem  ne pellgun e Mesdheut, i cili njihet si nje prej djepeve me te rendesishme te civilizimit boteror...</p>
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">See More</button>

<!-- Modal -->
<div class="modal fade col-xs-12" id="myModal6" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h4 class="modal-title">Saranda</h4>
</div>
<div class="modal-body">
<p>Qyteti i Durrësit daton në shek e VII para Kr., bazuar në dokumentat dhe burimet antike tradicionale në vitin 627. Qyteti modern është ndërtuar mbi rrënojat e Epidamnit ose Dyrrachion-it të lashtë, që më vonë u transformua në Dyrrachium-in e periudhës Romake.
Sipas Tukididit, qyteti u themelua nga Korkyras dhe Korintas, të cilët e quajtën qytetin Epidamn. Ai që e themeloi (oikisti) ishte Phalius, një Bakiad, i biri i Eratoklidit nga Korinti dhe pasardhës i Herkulit. Monedhat e para të Epidamnit në gjysmën e parë të shekullit V para Kr., qenë me simbole korintike, me Athinën dhe Pegasin dhe një epsilon arkaik. Sipas Apianit, një mbret jo-Grek, i cili jetonte në këtë vend përpara se grekët të vinin, me emrin Epidamn, ndërtoi qytetin e parë, të cilit i vuri emrin e tij. Dyrrahu, djali i vajzës së tij Melisa dhe thuhet edhe i Poseidonit, ndërtoi një port në qytet dhe e quajti Dyrrah. Gjatë viteve 435-404 Para Kr., Epidamni u përfshi në Luftën e Peloponezit, kur popullsia (demos-i) përzuri nga qyteti njerëzit me influencë (dynatoi) që nga ana tjetër u ndihmuan nga ilirët vendas dhe sulmuan përsëri qytetin.  </p>
</div>
<div class="modal-footer">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
<!-- Wrapper for slides -->
<div class="carousel-inner">
<div class="item active">
<img class="img-responsive" src="Foto/Saranda.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/Saranda1.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/Saranda2.jpg" alt="...">
<div class="carousel-caption">
Image
</div>
</div>
<div class="item">
<img class="img-responsive" src="Foto/Saranda3.jpg" alt="...">
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
            <a  class="list-group-item active">Evente</a>
             <?php    
                   $mysqli = new mysqli("localhost", "root", "", "promotealbania");
            ?>

            <?php
            $cat_sql = 'SELECT * FROM Event LIMIT 10'; 
            $cat =$mysqli->query($cat_sql);
            $cat_query = $cat->fetch_assoc();
           // $eventiID = $cat_query['eventiID'];
            ?>
            <p><?php  
            do
            {  ?>
            <a href="t_kulturor.php?EventId=<?php echo $cat_query['EventId']; ?>"  value ="<?php echo $cat_query['EventId']; ?>"  class="list-group-item">
                 <?php echo $cat_query['Emri']; ?></a>
              <?php
                } while($cat_query = $cat->fetch_assoc())
            ?>
          </div>
          <a href="#" style="display: none" class="list-group-item" id="modalOpen" data-toggle="modal" data-target="#myModal"></a>
          <a href="#" style="display:none" class="list-group-item" id="modalOpen1" data-toggle="modal" data-target="#myModalii"></a>
        </div><!--/.sidebar-offcanvas-->
  <?php 
  
if(isset($_GET['EventId']))
{?>   
<?php

  $event_sql =" SELECT * From Event where EventId =".$_GET['EventId'];

  if($event_query = $mysqli->query($event_sql))
  {
    $event = $event_query->fetch_assoc();
    ?>
             
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php  echo $event['Emri']; ?></h4>
        </div>
        <div class="modal-body">
          <table class="pull-left col-md-8 ">


    <tbody>
      <tr>
        <td class="h6"><strong>Emri i eventit</strong></td>
          <td> </td>
          <td class="h5"><?php  echo $event['Emri']; ?></td>
      </tr>
      <tr>
                   <td class="h6"><strong>Vendodhja</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $event['Qyteti']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Pershkrimi</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $event['Pershkrimi_eventit']; ?></td>
                             </tr>
                             
                             <tr>
                                 <td class="h6"><strong>Cmimi</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $event['Cmimi']; ?></td>
                             </tr>  

                             <tr>
                                 <td class="h6"><strong>Data e nisjes</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $event['Data_Nisjes']; ?></td>
                             </tr>                            

                             <tr>
                                 <td class="h6"><strong>Nr i diteve</strong></td>
                                 <td> </td>
                                 <td class="h5"><?php  echo $event['Nr_i_diteve']; ?></td>
                             </tr>

                         </tbody>
                    </table>
                             
                         
                    <div class="col-md-4"> 
                        <!--img src="shtepi.jpg" alt="teste" class="img-thumbnail"-->  
                    </div>
        </div>
        <div class="modal-footer">
           
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
  //$se = preg_replace("#[^0-9a-z]#i", "", $se);

        $sql = "SELECT * FROM event where Emri LIKE '%$se%' OR Qyteti LIKE '%$se%'; "; 
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
                 <a href ="t_kulturor.php?EventId=<?php echo $search['EventId']; ?>"  value ="<?php echo $search['EventId']; ?>" > <?php echo $search['Emri']?></a><br>
            <?php
          }?>                     
        </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
        <script>
             document.getElementById("modalOpen1").click();
             $('.close').on('click',function()
             {
              //duhet hequr id qe shtohet ne url 
             });
           </script>
    <?php
  }
}
?> 
            </div>
            </div>
            
      </div><!--/row-->

      <hr>

      <footer>
        <p style="text-align: center;">&copy; 2016 OM<sup>4</sup>.</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="offcanvas.js"></script>
    <script type="text/javascript" src="js.js"></script>
  </body>
</html>
