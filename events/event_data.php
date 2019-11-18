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
                      '<li class="list-group-item">'.$row["address"].'</li>'.
                      '<li class="list-group-item">'.$row["city"].'</li>'.
                      '<li class="list-group-item">'.$row["date"].'</li>'.
                  '</ul>'.

                '</div>'.
            '</div>'.
            '</div>';
  }  
      echo $output;  
 }  
 ?>  