<!DOCTYPE html>
<html>
<head>
	<title>firstjob</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/insert.js"></script>
    <script src="js/validation.js"></script>
</head>
<body>
 
<script>  
function validateform(){  
var fname=document.registration.Fname.value;  
var lname=document.registration.Lname.value; 
var x=document.myform.useremail.value;  
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");   

if (fname==null || fname==""){  
  alert("first Name can't be blank");  
  return false;  

}else if (lname==null || lname==""){  
  alert("last Name can't be blank");  
  return false; 

}else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
  return false;  
  }  
}  
</script>

<script type="text/javascript" language="javascript">
    function checkform()
    {
        var f = document.forms["registration"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }

        if (cansubmit) {
            document.getElementById('submitbutton').disabled = false;
        }
    }

</script> 


<script type="text/javascript" language="javascript">
    function checkform2()
    {
        var f = document.forms["registration2"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }

        if (cansubmit) {
            document.getElementById('next2').disabled = false;
        }
    }
</script> 

<script type="text/javascript" language="javascript">
    function checkform3()
    {
        var f = document.forms["registration3"].elements;
        var cansubmit = true;

        for (var i = 0; i < f.length; i++) {
            if (f[i].value.length == 0) cansubmit = false;
        }

        if (cansubmit) {
            document.getElementById('next3').disabled = false;
        }
    }
</script> 
<script>
$(document).ready(function(){
    $("#button1").click(function(){
        $("#applydiv").toggle();
        
    });
    $("#previous1").click(function(){
    	$("#second").hide();
    	$("#applydiv").show();
    });
    $("#previous2").click(function(){
    	$("#third").hide();
    	$("#second").show();
    });
    $("#tclose").click(function(){
       $("#applydiv").hide();
    });
    $("#tclose2").click(function(){
       $("#second").hide();
    });
    $("#tclose3").click(function(){
       $("#third").hide();
    });
});
</script>




	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="index.php"><img src="images/firstlogo.png"></a>
				</div>
				<div class="col-md-9">
					<div class="navigation">
					   <nav>
						  <ul>
							<li><a href="">Jobs</a></li>
						    <li><a href="">Recrutors</a></li>
							<li><a href="login.php">Admin panel</a></li>
							<li><button id="button1">Apply Jobs</button></li>
						  </ul>
					   </nav>
					</div>	
				</div>	
			</div>
		</div>
	</header>
	<section>
			<div class="container"> 
  				 <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
                 <!-- Indicators -->
   					<ol class="carousel-indicators">
      					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      					<li data-target="#myCarousel" data-slide-to="1"></li>
      					<li data-target="#myCarousel" data-slide-to="2"></li>
    				</ol>
   				 <!-- Wrapper for slides -->
   				 <div class="carousel-inner">
      				<div class="item active">
        				<img src="images/image1.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>

      				<div class="item">
        				<img src="images/image2.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>
    
      				<div class="item">
        				<img src="images/image3.jpg"  style="width:100%; height: 620px;" class="img-responsive">
      				</div>
    			</div>
                <!-- Left and right controls -->
    			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
     				 <span class="glyphicon glyphicon-chevron-left"></span>
      				 <span class="sr-only">Previous</span>
    			</a>
    			<a class="right carousel-control" href="#myCarousel" data-slide="next">
      				 <span class="glyphicon glyphicon-chevron-right"></span>
      				 <span class="sr-only">Next</span>
   			 	</a>
  			   </div>
		    </div>
<div id="applydiv">	
	<div class="apply">
		<h1>Apply jobs</h1>
	<form method="post" name="registration" onsubmit="return validateform()" >
			<div class="fields">
					<h5>Firstname:</h5>
					<input type="text" datavalidation="required" class="textfield" name="Fname" id="Fname" onKeyup="checkform()" />
		    </div>
		    <div class="fields">
					<h5>Lastname:</h5>
					<input type="text" class="textfield" name="Lname" id="Lname" onKeyup="checkform()" />
		    </div>
		    <div class="fields">
					<h5>Email:</h5>
					<input type="Email" class="textfield" name="Email" id="Email" datavalidation="email" onKeyup="checkform()" />
		    </div>
		    <div class="applybutton">
		    	<input type="button" id="submitbutton"  onclick="first_form();" disabled="disabled" name="nxtBtn" value="next">
		    </div>
        <input type="button" id="tclose" name="close" value="X">
	</form>
</div>
</div>
<div id="second">	
	<div class="apply">	
	<form method="post" name="registration2">
			<div class="fields">
					<h5>Age:</h5>
					<input type="text" class="textfield" name="age"     id="age" onkeyup="checkform2()"/>
		    </div>
		    <div class="fields">
					<h5>Location:</h5>
					<input id="location" class="controls textfield" name = "location" type="text" placeholder="Search Box">
    <div id="map" onkeyup="checkform2()"/></div>
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        // Create the search box and link it to the UI element.
        var input = document.getElementById('location');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUMmvToUtUWvQQTzlX9lIVO3aLhvFTjTw&libraries=places&callback=initAutocomplete"
         async defer></script>
		    </div>
		    <div class="fields">
					<h5>gender:</h5>
					<select id="gender" onkeyup="checkform2()"/>
  						<option value="male">male</option>
  						<option value="female">female</option>
  				
					</select>
		    </div>
		    <input type="hidden" id="last_id" value="">
		    <div class="applybutton">
		    	<input id="submitbutton2" type="button" disabled="disabled"  name="nxtBtn1" value="next" onclick="second_form();">
		    </div>
		    <div class="previousbutton">
		    	<input type="button"  name="Previousbtn" value="Previous" id="previous1">
		    </div>
        <input type="button" id="tclose2" name="close" value="X">
	</form>
</div>
</div>


<div id="third">	
	<div class="apply">
		
	<form method="post" name="registration3">
		    <div class="fields">
					<h5>Upload Image:</h5>
					<input type="file" id="File" onkeyup="checkform2()"/>
		    </div>
			<div class="fields">
					<h5>Education:</h5>
					 <?php
          require 'database/connection.php';

           function showdata(){
                 GLOBAL $conn;
    

               $query="SELECT * FROM `Education`";
               $run = mysqli_query($conn,$query);

              if($run == true){
              ?>
            <select id="education">
             <?php
                while($data = mysqli_fetch_assoc($run)){
              ?>
    
              <option><?php echo $data['name'];?></option>
              <?php
             }
            ?>
           </select><?php
             }else{
        echo "error!";
                  }
           }
    ?>   
    <?php showdata();
        ?>
			</div>
		    <div class="fields">
					<h5>Skills:</h5>
					<select id="skills" multiple onkeyup="checkform2()"/>
  						<option value="java">JAVA</option>
  						<option value="php">PHP</option>
  						<option value="C">C</option>
  						<option value="Swift">SWIFT</option>
					</select>
		    </div>
		    <div class="submitbutton" >
		    	<input type="button"  name="submitBtn"  value="Submit" disabled="disabled" onclick="third_form();" id="next2">
		    </div>
		    <div class="previousbutton3">
		    	<input type="button"  name="Previousbtn" value="Previous" id="previous2">
		    </div>
        <input type="button" id="tclose3" name="close" value="X">
        	</form>
</div>
</div>

   </section>
   <footer>
	<div class="footer">		
		 <div class="container">
 					<div class="row">
						<div class="col-md-4">
					    	<div class="sections">
					     	<nav>
 								<ul>
                                 <h4>USEFUL LINKS</h4>
 								<li><a href="#">Home</a></li>
 								<li><a href="#">About us</a></li>
 								<li><a href="#">contact us</a></li>
 								<li><a href="#">Admin</a></li>
 								</ul>
 							</nav>
				  		    </div>
                	    </div>


				   <div class="col-md-4">
					  <div class="followus">
 							<ul>
                               <h4>Follow Us</h4><br>
                                <li>
 								   <div class="footer3">
									<a href="https://www.facebook.com/"><img src="images/facebook.png"></a>
									<a href="https://twitter.com/login?lang=en"><img src="images/twitter.png"></a>
									<a href="https://plus.google.com/discover"><img src="images/google.png"></a>
									<a href="https://www.linkedin.com/m/login/"><img src="images/linkdin.png"></a>
									<a href="https://in.pinterest.com/"><img src="images/pintrest.png"></a>
                                  </div>
                              </li>
  							</ul>
					  </div>					
				   </div>

				<div class="col-md-4">
					<div class="sections">
						<a href="index.php"><img src="images/firstlogo.png"></a><br>
	                       <h5>Lorem Ipsum dolor sit amet, consectetur adipiscing<br> elit. sed do euismod tempor.incididunt ut labore et<br> dalore magna aliqiua</h5>
	                       <h5>1-667-125-132277</h5>
	                       <h5>3rd Floor, Link Arcade Model Town, USA</h5>  
					</div>
				</div>
			</div>
		</div>
</div>
		<div class="disclaimer">
			<h6>All rights reserved &copy 2018 Info Edge (India) Ltd.</h6>	
		</div>
</footer>


</body>
</html>