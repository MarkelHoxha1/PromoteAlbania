<?php
require('session.php');
require('dbcon.php');
require('user_name.php');
?>
<nav class="navbar navbar-default navbar-fixed-top col-lg-12">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button"  class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a id = "titulli" class="navbar-brand" href="bootstrap1.php">Promote Albania</a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul  id = "#elem" class=" nav navbar-nav ">
        <li><a  href="bootstrap1.php" id="ele">Home<span class="sr-only">(current)</span></a></li>
       <li><a href="#pjesa e ornesit" id="ele">Challenge<span class="sr-only">(current)</span></a></li>
       <li><a href="#Contact Us" id="ele">Contact<span class="sr-only">(current)</span></a></li>
       <li><a  id = "ele" href="#about us">About Us<span class="sr-only">(current)</span></a></li>
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
         <li><a class="col-sm-1" href="logout.php">Logout</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>