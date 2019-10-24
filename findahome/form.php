

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width,initial-scale = 0.2">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Find A Home</title>

	<?php

	echo '<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca|Muli&display=swap&subset=vietnamese"/>';
	echo '<link rel="stylesheet" type="text/css" href="../layout/randomname.css"/>';
	echo '<link rel="stylesheet" type="text/css" href="../layout/side_bar_style.css"/>';
	echo '<link rel="stylesheet" type="text/css" href="findahome.css"/>'; 

	echo '<script src="https://kit.fontawesome.com/57217439de.js" crossorigin="anonymous"></script>';
	echo '<script type="text/javascript" src="../layout/menu.js"></script>';

	echo '<script type="text/javascript" src="findahome.js"></script>';

	?>
	
	
</head>


<body>

	<header>

		<img src="../images/logo.png">
		<div>
			<h1>Destination</h1>
			<h2>Kennel</h2>
			<h4>We are your helping paws 🐾</h4>
		</div>

	</header>

	
	<div id = "main">
		<img src="../images/menu.png" onclick= "openSlideMenu()">
		<h3> ⇛ Find A Home</h3>
	</div>


		
	


	<div id = "side-menu" class="side-nav">
		<a href="#" class = "btn-close" onclick="closeSlideMenu()">↩</a>
				
		<div id = "menu-header">
			<img src="../images/logo.png">
			<div>
				<h1>Destination</h1>
				<h2>Kennel</h2>
				<h4>We are your helping paws 🐾</h4>
			</div>
		</div>
		<hr style="background-color: black;">

		<ul>
            <li><a href="" class="btn" onclick="closeSlideMenu()"><i class="fas fa-home" ></i> Find a Home</a></li>
            
            <li><a href="../temporarykennel/temporarykennel.html" class="btn"><i class="fas fa-home"  ></i> Temporary Kennels</a></li>
            
            <li><a href="../adopt/adopt.html" class="btn"><i class="fas fa-paw"  ></i> Adopt</a></li>
            
            <li><a href="../rescue/rescue.html" class="btn"><i class="fas fa-first-aid"  ></i> Rescue</a></li>
            
            <li><a href="../storesnearme/storesnearme.html" class="btn"><i class="fas fa-shopping-cart"  ></i> Pet Stores near me</a></li>
            
            <li><a href="../trainer/trainer.html" class="btn"><i class="fas fa-user"  ></i> Pet Trainer</a></li>
            
            <li><a href="../vet/vet.html" class="btn"><i class="fas fa-user-md" ></i> Contact A Vet</a></li>
            
            <li><a href="../generalcare/generalcare.html" class="btn"><i class="fas fa-paw" ></i> General Pet Care</a></li>
            
            <li><a href="../volunteer/volunteer.html" class="btn"><i class="fas fa-hands-helping"></i> Volunteer</a></li>
            
            <li><a href="../donate/donate.html" class="btn"><i class="fas fa-hand-holding-usd"></i> Donate</a></li>
            
            <li><a href="../events/events.html" class="btn"><i class="far fa-list-alt"></i> Events</a></li>
            
            <li><a href="../goodbye/goodbye.html" class="btn"><i class="fas fa-sad-tear"></i> Saying Goodbye</a></li>
            
            <li><a href="../contact/contact.html" class="btn"><i class="fas fa-address-book" ></i> Name For Pet?</a></li>

		</ul>
			
	</div>



	<div class="container">
	
		<form action="insert.php" method="post" id="find-a-family-form">
			<div class="form-fields">
				<label id="your-name">Your Name<span>*</span></label>
				<input type="text" name="ownerName" onfocus="onFocus()" class="input-style" required  >
			</div>

			<div class="form-fields">
				<label id ="pet-name">Pet's Name<span>*</span></label>
				<input type="text" name="petName" onfocus="onFocus()" class="input-style" required >
			</div>


			<div class="form-fields">
				<label id ="pet-age">Pet's Age<span>*</span></label>
				<input type="number" name="petAge" min="1" max="17" onfocus="onFocus()" on class="input-style" required>
			</div>


			<div class="form-fields">
				<label id ="city-name">City Name<span>*</span></label>
				<input type="text" name="cityName" onfocus="onFocus()" class="input-style" required>
			</div>






			<div class="form-fields">
				<label id="owner-email">Your Email<span>*</span></label>
				<input type="email" name="ownerEmail" autocomplete="on" onfocus="onFocus()" class="input-style" required>
			</div>




			<div class="form-fields">
				<label id="pet-description">Description<span>*</span></label>
				<textarea name="petDescription" maxlength="700" autocomplete="on" onfocus="onFocus()" class="input-style" required>
					
				</textarea>
			</div>

			<div class="form-fields">
				<label id="pet-image">Pet Profile</label>
				<input id ="pet-image-input" type="file" accept=".jpeg, .png, .jpg" name="image" aria-label="File Browse Example" >
			</div>

			<button id="button">submit</button>
		</form>

	</div> 
	


</body>	


</html>

<!--
	<navbar id="main-navbar">
		<a href="#"> <img src="../images/menu.png"> </a>
		
		<a href="../aboutus/aboutus.html"> <h4 id ="aboutus">About Us</h4> </a>
		<a href="#"> <h4 id="stores">Stores</h4 > </a>
		<input type="checkbox" id="menu-toggle">
		 	<label id="trigger" for="menu-toggle"></label>
		  	<label id="burger" for="menu-toggle"></label>
		 	<ul id="menu">
		    	<li><a href="#">Home</a></li>
		 	   	<li><a href="#">About</a></li>
		    	<li><a href="#">Portfolio</a></li>
		    	<li><a href="#">Contact</a></li>
			</ul> 


	</navbar> -->