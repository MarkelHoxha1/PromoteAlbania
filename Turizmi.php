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
 <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  function mos()
  {
    alert("Ju duhet te jeni te rregjistruar qe te beni blerje");
    alert("Ju faleminderit");
  }
</script>

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
        location.href="Turizmi.php?search="+document.getElementById("src").value;
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
            <h1>Turizmi Blu </h1>
            <p>Përkatësisht turizmi pranë detit i përqendruar në perëndim të vendit dhe veçanërisht në Velipojë, Shën Gjin, Durrës, Vlorë, Rivierë dhe Sarandë, Ksamili është mese i frekuentuar. Këto qytete ofrojnë dhe një numër të madh shërbimesh, hotele dhe restorante, duke tërhequr vitet e fundit vëmendjen e turistëve të huaja.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Vlora</h2>
              <p>Vlorë is a coastal city and municipality in southern Albania. It is the second largest port city of Albania, after Durrës. It is where the Albanian Declaration of Independence was proclaimed on November 28, 1912... </p>
              <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">See More</button>
             <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModall">See Places</button>
  <div id="myModall" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <div id="map"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
              

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
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Vlora1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Vlora2.jpg" alt="...">
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
              <h2>Pogradec</h2>
              <p>Pogradec is a city and municipality in central Albania, situated on the shores of one of Europe's deepest and oldest lakes, the Ohrid lake. It is located in the County of Korçë.This city is surrounded by hills... </p>
               <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">See More</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Places</button>

         
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
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Pogradec1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Pogradec2.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Pogradec3.jpg" alt="...">
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
              <h2>Shkoder</h2>
              <p>Shkodër ([ˈʃkɔdəɾ]; definite Albanian form: Shkodra [ˈʃkɔdɾa], for other names see the etymology section), is a city and municipality in northwestern Albania and the seat of the county with the same name... </p>
           <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal3">See More</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Places</button>

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
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Shkoder1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Shkoder3.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Shkoder4.jpg" alt="...">
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
              <h2>Velipoje</h2>
              <p>Velipojë (definite Albanian form: Velipoja) is a village and a former municipality in Shkodër County, northwestern Albania. At the 2015 local government reform it became a subdivision of the municipality Shkodër... </p>
               <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal4">See More</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Places</button>

  <!-- Modal -->
   <div class="modal fade col-xs-12" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Velipoje</h4>
        </div>
        <div class="modal-body">
          <p>Velipojë is a village and a former municipality in Shkodër County, northwestern Albania. At the 2015 local government reform it became a subdivision of the municipality Shkodër.[1] The population at the 2011 census was 5,031.Velipojë is situated on the estuary of the Buna river (the only navigable river of Albania), where it flows into the Adriatic Sea while constituting the natural border with Montenegro. The Commune (i.e. the administrative unit) of Velipojë has a population of around 10,000, spread over several small settlements, the largest of which is the town of Velipojë itself.

Its economy is based on agriculture (arable land and livestock, sheep and cattle), some fishing, and chiefly tourism. The scenery is largely unspoilt: a mixture of sea-coast, river estuary, heathland, thick pine woods, farmland, and high mountains. </p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Velipoje.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Velipoje1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Velipoje2.jpg" alt="...">
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
              <h2>Durres</h2>
              <p>Durrës (Albanian pronunciation: [ˈdurəs]), historically also known as Durazzo (Italian pronunciation: [duˈrattso]) and Dyrrachium, is the second largest city and a municipality of Albania... </p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal5">See More</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Places</button>
 
  <!-- Modal -->
   <div class="modal fade col-xs-12" id="myModal5" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Durres</h4>
        </div>
        <div class="modal-body">
          <p>Durrës (Albanian pronunciation: [ˈdurəs]), historically also known as Durazzo (Italian pronunciation: [duˈrattso]) and Dyrrachium, is the second largest city and a municipality of Albania, and one of the world's oldest continuously inhabited cities. Geographically, it is central on the coast, about 33 km (21 mi) west of the capital Tirana.

It is one of the most ancient and economically significant cities of Albania. Durrës is home to Albania's main port, the Port of Durrës. The city is at one of the narrower points of the Adriatic Sea, opposite the Italian ports of Bari and Brindisi. The port is also the 10th largest cargo port on the Adriatic Sea that handle more than 3.4 million tonnes of cargo per year.</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Durres.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Durres1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Durres2.jpg" alt="...">
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
              <h2>Saranda</h2>
              <p>Saranda or Sarandë (Greek: Άγιοι Σαράντα, Agioi Saranda, Italian: Santiquaranta) is a town and municipality in Vlorë County, southern Albania. It is one of the most important tourist attractions of the Albanian Riviera ... </p>
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal6">See More</button>
 <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">See Places</button>
  
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
          <p>Saranda or Sarandë (Greek: Άγιοι Σαράντα, Agioi Saranda, Italian: Santiquaranta) is a town and municipality in Vlorë County, southern Albania. It is one of the most important tourist attractions of the Albanian Riviera. It is situated on an open sea gulf of the Ionian Sea in the central Mediterranean, about 14 km (8.7 mi) east of the north end of the Greek island of Corfu.

Near Sarandë are the remains of the ancient city of Butrint, a UNESCO World Heritage site. Sarandë has a Greek minority and is considered one of the two centers of the Greek community in Albania.[1]</p>
        </div>
        <div class="modal-footer">
        
        <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
     <img class="img-responsive" src="images/Saranda.jpg" alt="...">
      <div class="carousel-caption">
        Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Saranda1.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
     <div class="item">
      <img class="img-responsive" src="images/Saranda2.jpg" alt="...">
      <div class="carousel-caption">
         Image
      </div>
    </div>
    <div class="item">
      <img class="img-responsive" src="images/Saranda3.jpg" alt="...">
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
             $cat_sql = 'SELECT * FROM paketa'; 
            $cat = $mysqli->query($cat_sql);
            $cat_query = $cat->fetch_assoc();
           // $paketaiID = $cat_query['paketaiID'];
            ?>
            <p><?php  
            do
            {  ?>
            <a href="Turizmi.php?paketaID=<?php echo $cat_query['paketaID']; ?>"  value ="<?php echo $cat_query['paketaID']; ?>"  class="list-group-item">
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

        $sql = "SELECT * FROM paketa where EmriP LIKE '%$se%' OR Vendodhja LIKE '%$se%' "; 
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
                 <a href ="Turizmi.php?paketaID=<?php echo $search['paketaID']; ?>"  value ="<?php echo $search['paketaID']; ?>" > <?php echo $search['EmriP']?></a><br>

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

  
  <script>
  var info,marker,infoWindow,map;
      function initMap() {
        var pikat = [{emer:"a",lat:40.362765,lng:19.497299},{emer:'b',lat:40.4636666,lng:19.489059},{emer:'c',lat:40.285811,lng:19.833755},{emer:'d',lat:40.24966,lng:19.56047},{emer:'f',lat:40.3279,lng:19.4791},{emer:'e',lat:40.293929,lng:19.523048}];
        var uluru = {lat: 40.46366, lng: 19.4890}
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 10,
          center: uluru,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        });
infoWindow = new google.maps.InfoWindow({content:""});
for(var i =0; i<pikat.length;i++)
{


         marker = new google.maps.Marker({
          position: {lat:pikat[i].lat,lng:pikat[i].lng},
          animation:google.maps.Animation.DROP,
          map: map
        });



google.maps.event.addListener(map,'click',function(event)
{ 
  Shto(map,event.latLng);

});


var person = prompt("Cfare e karakterizon kete vend!", "");
function Shto(map,location)
{
  


  var markerr = new google.maps.Marker({position:location,
    map:map});

  var infoWindow = new google.maps.InfoWindow({
    content:person
  });
}
        google.maps.event.addListener(marker,'click',function()
        {
          shtoButton();
        });

      }



    
    function shtoButton()
    {
      info = new google.maps.InfoWindow(
      {
        content:"<button type='button' class='btn-xs btn-success'  onclick='HiqMarker()'>Hiq Vendodhjen</button>"
      });
      info.open(map,marker);

    }
}
    function HiqMarker()
    {
      marker.setMap(null);
      //info.close();
    }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCri768vzzL10snLEvagy1vvoFw9esS7VY&callback=initMap">
    </script>
  <script>
  $("#myModall").on("shown.bs.modal", function () {
    google.maps.event.trigger(map, "resize");
});</script>
 
  </body>
</html>
