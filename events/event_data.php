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
$output .= '<div class="col-md-3">'.'<div style="border:1px solid #ccc; padding:20px; margin-bottom:20px;">'.$row["name"].''.$row["date"].''.$row["address"].''."<a href = ".$row["link"]."  >Click here for more info </a>  ".'</div>'.'</div>';  
      }  
      echo $output;  
 }  
 ?>  