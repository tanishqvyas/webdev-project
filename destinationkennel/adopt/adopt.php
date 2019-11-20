<!DOCTYPE html>
<html>
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width = device-width,initial-scale = 0.2">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Adopt a Pet</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca|Muli&display=swap&subset=vietnamese">
	<link rel="stylesheet" type="text/css" href="../layout/randomname_style.php">
	<link rel="stylesheet" type="text/css" href="../layout/side_bar_style.css">
	<link rel="stylesheet" type="text/css" href="adopt_style.php">

	<script type="text/javascript" src = "adopt.js"></script>
	<script src="../layout/menu.js"></script>

	<script src="https://kit.fontawesome.com/57217439de.js" crossorigin="anonymous"></script>

	
	
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
		<h3> ⇛ Adopt A Pet</h3>
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

			<li><a href=""  onclick="closeSlideMenu()"><i class="fas fa-paw" ></i> Adopt a Pet</a></li>

            <li><a href="../findahome/form.php" ><i class="fas fa-home"  ></i> Find a Home</a></li>
            
            <li><a href="../temporarykennel/temporarykennel.html" ><i class="fas fa-home"></i> Temporary Kennels</a></li>
            
            <li><a href="../rescue/rescue.html" ><i class="fas fa-first-aid"  ></i> Rescue</a></li>
            
            <li><a href="../storesnearme/petstore_data_select.php" ><i class="fas fa-shopping-cart"></i> Pet Stores near me</a></li>
            
            <li><a href="../trainer/trainer_data_select.php" ><i class="fas fa-user"  ></i> Pet Trainer</a></li>
            
            <li><a href="../vet/vet_data_select.php" ><i class="fas fa-user-md" ></i> Contact A Vet</a></li>
            
            <li><a href="../generalcare/generalcare.html" ><i class="fas fa-paw" ></i> General Pet Care</a></li>
             
            <li><a href="../donate/donate.html" ><i class="fas fa-hand-holding-usd"></i> Donate</a></li>

			<li><a href="../events/event_data_select.php" ><i class="fas fa-user-md" ></i>Events</a></li>
                    
                                   
            <li><a href="../contact/contact.html" ><i class="fas fa-address-book" ></i> Name For Pet?</a></li>

		</ul>
			
	</div>

	

	   	  
	<div class="info-card">
		<div class="header-info">


			<img src="../images/dogup.jpg" onerror="this.src='../images/dogup.jpg';">
			<div class="header-text">
				<h2 class="owner-name">Peter Parker</h2>
				<h5 class="pet-name"><span>🐕</span> Caesar</h3>
				<h5 class="pet-age"><span>🎂</span> 3 Years Old</h4>
				<h5 class="owner-address"><span>📍</span>  Bangalore, India</h3>
			</div>


		</div>
		
			<div class="description">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>				

			</div>

			<button class="button">Request Adopt</button>

	</div>
	 
	
<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM `findahome`.`formdata`";

if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){


        
		while($row = mysqli_fetch_array($result))
		{
	     	echo '<div class="info-card">';
				echo '<div class="header-info">';
						echo '<div class="header-text">';
							echo'<h2 class="owner-name">' .$row['ownerName']. '</h2>';
							echo'<h5 class="pet-name"><span>🐕 </span>' .$row['petName']. '</h3>';
							echo'<h5 class="pet-age"><span>🎂 </span>'. $row['petAge']. '<span> Years Old</span></h4>';
							echo '<h5 class="owner-email"><span>📧 </span>'  .$row['ownerEmail']. '</h3>';
						echo '</div>';

				echo '</div>';

						echo '<div class="description">';
							echo '<p>' .$row['petDescription'].'</p>';
						echo '</div>';	

				echo '<button class ="button">Request Adopt</button>';

			echo '<span id="successful-submit">';
			echo '<p> Your adopt request has been sent successfully !</p>';
			echo '<img src="../images/verified1.png">';
			echo '</span>';

			echo '</div>';
}
		



        // Free result set
        mysqli_free_result($result);
    }

    else
    {
        echo "No records matching your query were found.";
    }
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>


</body>	
</html>

