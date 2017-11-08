
<?php
$mysqli = new mysqli("localhost", "root", "", "promotealbania");
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" >
<style>
  .modal-backdrop.in
  {
    display: none
  }
</style>
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="csslayout.css" rel="stylesheet" type="text/css">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript">
  function mos()
  {
    alert("Ju duhet te jeni te rregjistruar qe te beni nje Kerkese");
    alert("Ju faleminderit");
  }
</script>



<!--script type="text/javascript">
	var map,info,marker ;
	function add(lat,lng,adrese)
	{
		var pt = new google.maps.LatLng(lat,lng);
	marker = new google.maps.Marker(
		{
			position:pt,
			map:map
		});
marker.addListener('mouseover',function()
{
	info = new google.maps.InfoWindow(
	{
		position:pt,
		content:"Adresa: "+adrese,
		map:map
	});
});

	}
	function initMap()
	{
		map = new google.maps.Map(
			document.getElementById("map"),
			{
				center:new google.maps.LatLng(41.36,19.82),
				zoom:7
			});
		<?php 
    /*
$query = mysql_query("SELECT * FROM 	user");
while($row = mysql_fetch_array($query))
{
	$lat = $row['lat'];
	$lng = $row['lng'];
	$adres = $row['Address'];
	if($lat != 0 && $lng != 0)
	echo "add($lat,$lng,'$adres');";
  
}
*/
		?>
	}
</script>


<script type="text/javascript">
      var map;

      function initMap()
      {
        var startlocation = new google.maps.LatLng(41.3275, 19.8187);

        var customization= 
        {
          center: startlocation,
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          disableDefaultUI: true,
          fullscreenControll: false
        }

        map = new google.maps.Map(document.getElementById("map"), customization);

        <?php merrTeDhena(); ?>

      }

      function createMarkers(vendodhja)
      {
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({address: vendodhja}, function(results, status)
        {
          if(status == 'OK')
          {
            var marker_location = results[0].geometry.location;
            
            var marker = new google.maps.Marker(
            {
              position: marker_location,
              map: map
            });
          
          marker.addListener('mouseover',function()
{
	info = new google.maps.InfoWindow(
	{
		position:marker_location,
		content:"Adresa: "+vendodhja,
		map:map
	});
});
      }
      else
        alert("nuk exe "+vendodhja );
  

        });
      }

      <?php
        
        //query per te marre vendodhjet e userave nga databaza

    /*    function merrTeDhena()
        {
          $address_query = mysql_query("SELECT * FROM user");

          while ($row = mysql_fetch_array($address_query))
          {        
   
            $location_string = $row['Address'];

            echo "createMarkers('$location_string');";
          }
        }*/
        ?>
        
      
      //google.maps.event.addDomListener(window, 'load', initMap);
  </script>
  -->

<title>Promote Albania</title>
</head>

<body style="padding-top: 60px">
<?php include_once('headeri.html'); ?>
<div id="carousel1" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
    <li data-target="#carousel1" data-slide-to="3"></li>
    <li data-target="#carousel1" data-slide-to="4"></li>
    <li data-target="#carousel1" data-slide-to="5"></li>
    <li data-target="#carousel1" data-slide-to="6"></li>
    <li data-target="#carousel1" data-slide-to="7"></li>
    <li data-target="#carousel1" data-slide-to="8"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
  <div class="item active"><img src="Foto/Albania1.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
  <div class="item "><img src="Foto/pamje.jpg" alt="Third slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item "><img src="Foto/mal.jpg" alt="First slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/berat.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/debore.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    
    <div class="item"><img src="Foto/det.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/lure.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/ujesia.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    <div class="item"><img src="Foto/liqeni_p.jpg" alt="Second slide image" class="center-block">
      <div class="carousel-caption">
         <h2>Albania Place</h2>
      <h3>Visit Albania and you will not regret !!</h3>
      </div>
    </div>
    
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a></div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
  <section class="container">
  <div class="row">
    <figure class="col-sm-6">
     <a href="t_kulturor1.php"> <p>Turizmi Kulturor</p></a>
    <a href="t_kulturor1.php"><img src="Foto/butrint.jpg" alt="foto"></a>
    </figure>
    <figure class="col-sm-6">
      <a href="malore.php"><p>Turizmi malor</p></a>
      <a href="malore.php"><img src='Foto/mali.jpg'></a>
    </figure>
  </div>
  <div class="row"> 
    <figure class="col-sm-6">
      <a href ="Turizmi.php"><p>Turizmi blu</p></a>
   <a href="Turizmi.php"><img src="Foto/ujesi.jpg"></a>
    </figure>
    <figure class="col-sm-6">
      <a href="marxhens.php"><p>Turizmi Kulinar</p></a>
    <a href="marxhens.php"><img src="Foto/ushqim5.jpg"></a>
    </figure>
  </div>
</section>
<div id="p" style=" display: flex">
<section class="container" style="padding-left: 100px">
<h4>Dergo nje mesazh</h4>
 <form method="POST">
<div class = "form-group">
  <textarea  name="fusha" id= "fusha" rows="10" cols="80" ></textarea>
 <a class = "btn btn-success" onclick="mos()" value ="dergo " name="dergo" ><span class = "glyphicon glyphicon-send"></span> Send</a>
  </div>
  </form>
</section>
<section class="container">
<h4>Klientet</h4>
<div id="map" style="width: 650px;height: 230px">
	<h3>Ckemi</h3>
</div>

</section>
</div>
<footer class="container">
  <div class="row">
    <p class="col-sm-4">&copy; 2016 OM 4</p>
    <ul class="col-sm-8">
      <li class="col-sm-1"></li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-sm-1">  <img src=""></li>
  <li class="col-md-1">  <img src=""></li>
   
    </ul>
  </div>
</footer>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.js"></script>
 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDo-QFawJpNxw6yCdvvGe4rGLwnOumw1A&callback=initMap"
  type="text/javascript"></script>
</body>
</html>