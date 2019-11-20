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
           $sql = "SELECT * FROM `all_events`.`events` WHERE city_id = '".$_POST["city_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM `all_events`.`events`";  
      }  
      $result = mysqli_query($connect, $sql);  

      while($row = mysqli_fetch_array($result))  
      {  
		$output .= 
           ' <div id="area-for-events">' .
              '<div class="my-event-card">' . 
                '<div class="card" style="width: 100rem;">'.

                  '<div class="card-body">'.
                      '<h2 class="card-title">'.$row["name"].'</h2>' .
                      '<p class="card-text">' .$row["details"].'</p>' .
                  '</div>'.

                  '<ul class="list-group list-group-flush">'.
                      '<li class="list-group-item">'.'📍'.$row["address"].'</li>'.
                      '<li class="list-group-item">'.'🏙️'.$row["city"].'</li>'.
                      '<li class="list-group-item">'.'📆'.$row["date"].'</li>'.
                  '</ul>'.

                '</div>'.
            '</div>'.
            '</div>'; 
  }  
      echo $output;  
 }  
 ?>  
 <script>

		function initMap(){
			var options = {
                zoom : 12, 
                center:{lat: 12.9716 , lng:77.5946 }
            }    
			var cards = document.querySelectorAll('.card');


			for(i=0;i<cards.length;i++)
			{
				var longitude = cards[i].querySelector('.shop-longitude').textContent;
				var latitude = cards[i].querySelector('.shop-lattitude').textContent;
				var coords = {lat : parseFloat(latitude) , lng : parseFloat(longitude)};
				var maparea = cards[i].querySelector('.my-shop-map');
				var map = new google.maps.Map(maparea,options);
				var marker = new google.maps.Marker({position: coords,animation:google.maps.Animation.BOUNCE ,map: map });
			}	
		}

	
	</script>
	
	<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDA9p52wyN1peD4pir5roFPNgyG1F-dG9c&callback=initMap">
    </script>

</body>	
</html>