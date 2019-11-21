<html>
<body>


<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "");  
 
 $output = '';  
 if(isset($_POST["city_id"]))  
 {  
      if($_POST["city_id"] != '')  
      {  
           $sql = "SELECT * FROM `petstores`.`petstores_data` WHERE city_id = '".$_POST["city_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM `petstores`.`petstores_data`";  
      }  
      $result = mysqli_query($connect, $sql);  

      while($row = mysqli_fetch_array($result))  
      {  
        $output .= 
           
           ' <div id="area-for-events">' .
              '<div class="card mb-3">' .

              	'<div class="my-shop-map">'.
		  			

		  		'</div>'. 

		  		'<div class="card-body">'.
					
			  		'<h2 class="card-title">'. $row["name"].'</h2>'.
			  		'<p class="card-text">'.'📍'.$row["address"].'</p>'.
				    '<p class="card-text">'.'<small class="text-muted">'.'☎'.$row["contact"] .'</small>'.'</p>'.
		

					'<div class="shop-lattitude">'.$row["Latitude"] .'</div>'.
				    '<div class="shop-longitude">'.$row["Longitude"].'</div>'.
					'<div class="centre-lattitude">'. $row["centre-latitude"] .'</div>'.
				    '<div class="centre-longitude">'.$row["centre-longitude"].'</div>'.
			'</div>'.
			'</div>'.
		'</div>';             
               }  
      echo $output;  
 }  
 ?>  
 <script>

function initMap(){
			 
			 var cards = document.querySelectorAll('.card');

			 
			 for(i=0;i<cards.length;i++)
			 {
				  var center_lat = cards[i].querySelector('.centre-lattitude').textContent;
				  var center_long = cards[i].querySelector('.centre-longitude').textContent;
				
				  var options = {
					   zoom : 12, 
					   center:{lat: parseFloat(center_lat) , lng: parseFloat(center_long)}
				  }    
				  var longitude = cards[i].querySelector('.shop-longitude').textContent;
				  var latitude = cards[i].querySelector('.shop-lattitude').textContent;
				  
				  var coords = {lat : parseFloat(latitude) , lng : parseFloat(longitude)};
				  
				  var maparea = cards[i].querySelector('.my-shop-map');
				  var map = new google.maps.Map(maparea,options);
				  var marker = new google.maps.Marker({position: coords , map : map });
			 }	
		}

	
	</script>
	
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA9p52wyN1peD4pir5roFPNgyG1F-dG9c&callback=initMap">
    </script>

</body>	
</html>