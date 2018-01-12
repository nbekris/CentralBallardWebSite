<!DOCTYPE html>
<html lang="en">
<?php
include ('conn.php');
include ('data_load.php');
include ('mail.php');

?>
<head>
  <title>CBRA Website</title>
  <link rel="stylesheet" href="styles.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">CBRA</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#myPage">HOME</a></li>
        <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#events">EVENTS</a></li>
        <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#about">ABOUT US</a></li>
        <li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#issues">ISSUES</a></li>
		<li><a data-toggle="collapse" data-target=".navbar-collapse.in" href="#contact">CONTACT</a></li>
		<!-- More DropDown
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#events">Events</a></li>
            <li><a href="#">Meetings</a></li>
            <li><a href="#">Discussions</a></li> 
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="Ballard Bell Tower.JPG" alt="BellTower" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ballard</h3>
          <p>Welcome to the CBRA website!</p>
        </div>      
      </div>

      <div class="item">
        <img src="Ballard4.JPG" alt="Ballard4" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ballard Sea Gate</h3>
          <p>Boat Parks inside Ballard Sea Gate!</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="guls.JPG" alt="Guls" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Ballard Lake View</h3>
          <p>Gorgeous View of Lake Union!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<br>
<!-- Containter (About us Section) -->
<div id="about" class="container text-center">
  <h3>ABOUT US</h3>
  <br>
  <p><em>Welcome to the Central Ballard Residents Association</em></p>
  <p>Central Ballard Residents Association (CBRA) was formed in February of 2012 by Ballard residents
     to provide a public forum for discussion of community issues and to serve as a voice of Central 
	 Ballard with the community, government and other organizations. CBRA advocates on behalf of its 
	 members to promote a healthy, livable, walkable, and safe community in the neighborhood's historic core.</p>
  <br>
  </div>
<!-- Issues section -->
<div id="issues" class="bg-1">
  <br>
  <div class="container">
    <h3 class="text-center">Issues</h3>
	<br>
	<p class="text-center">In this section find issues related to CBRA.</p>
	<br>
	<div class="row text-center">
	  <div class="col-md-4">
	   <div class="thumbnail">
	    <img src="ballardmarkers1.jpg" alt="ballard marker" width="400" height="300">
	    </div>
	   </div>
		<div class="container bg-1 col-md-4">
		<h2><span class="label label-default">1</span><strong>  <?php echo htmlspecialchars($title) ?></strong></h2>
		<br>
		<?php echo htmlspecialchars($text) ?>
		</p>
	   </div>
	<div class="col-md-4"></div>
	</div>
	<div class="row text-center">
	  <div class="col-md-4">
	    <div class="thumbnail">
		<img src="ballardpark.jpg" alt="park" width="400" height="300">
		</div>
	  </div>
	  <div class="container col-md-4">
	    <h2><span class="label label-default">2</span><strong>  <?php echo htmlspecialchars($title2) ?></strong></h2>
		<p><?php echo htmlspecialchars($text2) ?>
		</p>
   </div>
   <div class="col-mid-4"></div>
  </div>
  <div class="row text-center">
    <div class="col-md-4">
	  <div class="thumbnail">
	  <img src="ballardpar2.jpg" alt="par2" width="400" height="300">
	  </div>
	</div>
	<div class="col-md-4">
	<h2><span class="label label-default">3</span><strong>  <?php echo htmlspecialchars($title3) ?></strong></h2>
	<p><?php echo htmlspecialchars($text3) ?>
	</p>
	</div>
	<div class="col-md-4"></div>
  </div>
 </div>
</div>
<!-- Add Google Maps And Events-->
<div id="events" class="container-fluid">
	<br>
    <h2 class="text-center">Upcoming Events!</h2>
	<br>
 <div class="row">
  <div class="col-md-4">
	<h3 class="text-center"><?php echo htmlspecialchars($eventTitle) ?></h3>
    <p><strong>When</strong>	Event starts at <?php echo htmlspecialchars($startDate) ?> and ends at <? echo htmlspecialchars($endDate) ?> </p>
	<p><strong>Description</strong>		<?php echo htmlspecialchars($eventDescription) ?></p>
	<p><strong>Address</strong>   Event will take place at <?php echo htmlspecialchars($locationName) ?> located at <?php echo htmlspecialchars($locationAddress) ?></p>
	<br>
  </div>
  <div class="col-md-8">
    <div class="thumbnail" id="googleMap"></div>
  </div>
 </div>
 <div class="row">
  <div class="col-md-4">
	<h3 class="text-center"><?php echo htmlspecialchars($eventTitle2) ?></h3>
    <p><strong>When</strong>	Event starts at <?php echo htmlspecialchars($startDate2) ?> and ends at <? echo htmlspecialchars($endDate2) ?> </p>
	<p><strong>Description</strong>		<?php echo htmlspecialchars($eventDescription2) ?></p>
	<p><strong>Address</strong>   Event will take place at <?php echo htmlspecialchars($locationName2) ?> located at <?php echo htmlspecialchars($locationAddress2) ?></p>
	<br>
  </div>
  <div class="col-md-8">
    <div class="thumbnail" id="googleMap1"></div>
  </div>  
 </div>
</div>
<script>
function myMap() {
	var myCenter = new google.maps.LatLng(<?php echo htmlspecialchars($locationCoordinates)?>);
	var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);

	var myCenter1 = new google.maps.LatLng(<?php echo htmlspecialchars($locationCoordinates2)?>);
	var mapProp1 = {center:myCenter1, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map1 = new google.maps.Map(document.getElementById("googleMap1"), mapProp1);
	var marker1 = new google.maps.Marker({position:myCenter1});
	marker1.setMap(map1);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjr0Kucs3GRCyRhlih2S8o7sQy3eUTgBc&callback=myMap"></script>
<!-- Contact Section -->
<div id="contact" class="container">
  <div class="container-fluid">
    <h3 class="text-center">CONTACT</h3>
	<div class="row">
	  <div class="col-md-4">
	  <p>If you would like to be on our email list, enter your email.</p>
	    <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
		<br>
	</div>
	<div class="col-md-8">
	  <div class="row">
	    <div class="col-sm-6 form-group">
		<form action="mail.php" method="post">
		  <input class="form-control" name="email" id="email" placeholder="Email" type="email" required>
		  <br>
		  <div class="row">
		    <div class="col-md-12 form-group">
			  <input class="btn pull-right" type="submit" value="Send" name="mailBtn">
			  </form>
		  </div>
		 </div>
		</div>
	   </div>
	  </div>
	 </div>
    </div>
  </div>
<!-- Footer -->
<footer class="container-fluid text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Contact information goes here <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">nikobekris@gmail.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>