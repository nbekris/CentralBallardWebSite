<!DOCTYPE html>
<html lang="en">
<?php
	include "data_save.php";
?>
<head>
  <title>Bootstrap Example</title>
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
      <a class="navbar-brand" href="#myPage">Central Ballard Residents Association</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#events">EVENTS</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#issues">ISSUES</a></li>
		<li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#events">Events</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li> 
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Containter (About us Section) -->
<div id="about" class="container text-center">
  <h3>ENTER ISSUES AND EVENTS</h3>
  <br>
  <p><em>Welcome to the Central Ballard Residents Association Admin Page</em></p>
  <p>On this page you may enter Issues to be posted to the main web page. Everything
  you type will be posted to the main site as is.</p>
  <br>
  </div>
<!-- Issues section -->
<div id="issues" class="bg-1">
  <br>
  <div class="container">
    <h3 class="text-center">Issues</h3>
	<br>
	<p class="text-center">In this section, enter issues related to CBRA. Be aware anything you
	type into these text fields will replace issues previously entered into the main website.</p>
	<br>
	<div class="row text-center form-group">
	  <div class="col-md-4">
	  <form action="data_save.php" method="post" id="myform">
	  <input type="hidden" name="id" value="1">
	   </div>
	   
		<div class="container bg-1 col-md-4 form-group">
		<label for="title">Enter Title:</label>
		<input type="text" class="form-control" name="title" id="title">
		<input type="submit" value="SUBMIT" name="titleBtn">
		<br>
		<label for="comment">Enter Text for Issues Below:</label>
		<textarea class="form-control" form="myform" rows="5" name="textBody" id="textBody"></textarea>
		<input type="submit" value="SUBMIT" name="textBtn">
	</form>
	   </div>
	<div class="col-md-4"></div>
	</div>
	<div class="row text-center form-group">
	  <div class="col-md-4">
	  <form action="data_save.php" method="post" id="myform2">
	  <input type="hidden" name="id" value="2">
	   </div>
	   
		<div class="container bg-1 col-md-4 form-group">
		<label for="title">Enter Title:</label>
		<input type="text" class="form-control" name="title" id="title">
		<input type="submit" value="SUBMIT" name="titleBtn">
		<br>
		<label for="comment">Enter Text for Issues Below:</label>
		<textarea class="form-control" form="myform2" rows="5" name="textBody" id="textBody"></textarea>
		<input type="submit" value="SUBMIT" name="textBtn">
	</form>
	</div>
	<div class="col-md-4"></div>
	</div>
	<div class="row text-center form-group">
	  <div class="col-md-4">
	  <form action="data_save.php" method="post" id="myform3">
	  <input type="hidden" name="id" value="3">
	   </div>
	   
		<div class="container bg-1 col-md-4 form-group">
		<label for="title">Enter Title:</label>
		<input type="text" class="form-control" name="title" id="title">
		<input type="submit" value="SUBMIT" name="titleBtn">
		<br>
		<label for="comment">Enter Text for Issues Below:</label>
		<textarea class="form-control" form="myform3" rows="5" name="textBody" id="textBody"></textarea>
		<input type="submit" value="SUBMIT" name="textBtn">
	</form>
	</div>
</div>
</div>
</div>
<!-- Add Google Maps And Events-->
<div id="events" class="container">
	<br>
    <h2 class="text-center">Upcoming Events!</h2>
	<br>
 <div class="row">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
  <form action="data_save.php" method="post" id="eventform">
  <input type="hidden" name="id" value="1">
  
  <label for="title">Enter Event Title:</label>
  <input type="text" class="form-control" name="eventTitle" id="eventTitle">
  <br>
  <input type="submit" value="SUBMIT" name="eventTitleBtn">
  <br>
  
  <label for="title">Enter Start Date:</label>
  <input type="text" class="form-control" name="startDate" id="startDate">
  <label for="title">Enter End Date:</label>
  <input type="text" class="form-control" name="endDate" id="endDate">
  <br>
  <input type="submit" value="SUBMIT" name="dateBtn">
  <br>
  
  <label for="title">Enter Location Name:</label>
  <input type="text" class="form-control" name="locationName" id="locationName">
  <label for="title">Enter Location Address:</label>
  <input type="text" class="form-control" name="locationAddress" id="locationAddress">
  <label for="title">Enter Location Coordinates:</label>
  <input type="text" class="form-control" name="locationCoordinates" id="locationCoordinates">
  <br>
  <input type="submit" value="SUBMIT" name="locationBtn">
  <br>
  
  <label for="title">Enter Event Description:</label>
  <input type="text" class="form-control" name="eventDescription" id="eventDescription">
  <br>
  <input type="submit" value="SUBMIT" name="descriptionBtn">
  <br>
  <input type="submit" value="SUBMIT ALL EVENT DATA" name="eventBtn">
  </form>
  <!--
	<h3 class="text-center">Monthly Membership Meeting</h3>
    <p><strong>When</strong>	Thursday July 13 at 7pm</p>
	<p><strong>Description</strong>		Monthly general meeting of the CBRA. All interested persons are invited to attend.</p>
	<p><strong>Where: Location of Event is below.</strong></p>
	<br>
	-->
  </div>
  <div class="col-md-4">
    <div id="googleMap"></div>
  </div>
 </div>
 <div class="row">
  <div class="col-md-4">
  <form action="data_save.php" method="post" id="eventform">
  <input type="hidden" name="id" value="2">
  
  <label for="title">Enter Event Title:</label>
  <input type="text" class="form-control" name="eventTitle" id="eventTitle">
  <br>
  <input type="submit" value="SUBMIT" name="eventTitleBtn">
  <br>
  
  <label for="title">Enter Start Date:</label>
  <input type="text" class="form-control" name="startDate" id="startDate">
  <label for="title">Enter End Date:</label>
  <input type="text" class="form-control" name="endDate" id="endDate">
  <br>
  <input type="submit" value="SUBMIT" name="dateBtn">
  <br>
  
  <label for="title">Enter Location Name:</label>
  <input type="text" class="form-control" name="locationName" id="locationName">
  <label for="title">Enter Location Address:</label>
  <input type="text" class="form-control" name="locationAddress" id="locationAddress">
  <label for="title">Enter Location Coordinates:</label>
  <input type="text" class="form-control" name="locationCoordinates" id="locationCoordinates">
  <br>
  <input type="submit" value="SUBMIT" name="locationBtn">
  <br>
  
  <label for="title">Enter Event Description:</label>
  <input type="text" class="form-control" name="eventDescription" id="eventDescription">
  <br>
  <input type="submit" value="SUBMIT" name="descriptionBtn">
  <br>
  <input type="submit" value="SUBMIT ALL EVENT DATA" name="eventBtn">
  </form>
  <div class="col-md-4">
    <div id="googleMap1"></div>
  </div>  
 </div>
</div>
<script>
function myMap() {
	var myCenter = new google.maps.LatLng(47.675191, -122.391505);
	var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
	var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
	var marker = new google.maps.Marker({position:myCenter});
	marker.setMap(map);

	var myCenter1 = new google.maps.LatLng(47.667968, -122.378528);
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
		  <input class="form-control" id="email" placeholder="Email" type="email" required>
		  <br>
		  <div class="row">
		    <div class="col-md-12 form-group">
			  <button class="btn pull-right" type="submit">Send</button>
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