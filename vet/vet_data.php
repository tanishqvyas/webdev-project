<?php  
 //load_data.php  
 $connect = mysqli_connect("localhost", "root", "");  
 
 $output = '';  
 if(isset($_POST["city_id"]))  
 {  
      if($_POST["city_id"] != '')  
      {  
           $sql = "SELECT * FROM `vets`.`vet_data` WHERE city_id = '".$_POST["city_id"]."'";  
      }  
      else  
      {  
           $sql = "SELECT * FROM `vets`.`vet_data`";  
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
                        '<p class="card-text">' .$row["address"].'</p>'.
                        '<p class="card-text">'.'<small class="text-muted">'.$row["contact"] .'</small>'.'</p>'.
                        '<div class="shop-longitude">'. $row["Latitude"] .'</div>'.
                        '<div class="shop-lattitude">'.$row["Longitude"].'</div>'.
                '</div>'.
              '</div>'.
            '</div>';
    
       
      }   
      echo $output;  
 }  
 ?>  