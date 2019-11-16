<!DOCTYPE html>
<html>
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width = device-width,initial-scale = 0.2">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pet trainers near me</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lexend+Deca|Muli&display=swap&subset=vietnamese">
  <link rel="stylesheet" type="text/css" href="../layout/randomname.css">
  <link rel="stylesheet" type="text/css" href="../layout/side_bar_style.css">
  <link rel="stylesheet" type="text/css" href="trainer_style.php">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  
  <script src="https://kit.fontawesome.com/57217439de.js" crossorigin="anonymous"></script>
  <script src="../layout/menu.js"></script>
  
  
</head>

<body>

  <header>

    <a href="../index.html">
      <img src="../images/logo.png">
      <div>
        <h1>Destination</h1>
        <h2>Kennel</h2>
        <h4>We are your helping paws 🐾</h4>
      </div>
    </a>

  </header>

  
  <div id = "main">
    <img src="../images/menu.png" onclick= "openSlideMenu()">
    <h3> ⇛ Pet Trainers near me</h3>
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
            <li><a href="../findahome/findahome.html" ><i class="fas fa-home"  ></i> Find a Home</a></li>
            
            <li><a href="../temporarykennel/temporarykennel.html" ><i class="fas fa-home"  ></i> Temporary Kennels</a></li>
            
            <li><a href="../adopt/adopt.html" ><i class="fas fa-paw"  ></i> Adopt</a></li>
            
            <li><a href="../rescue/rescue.html" ><i class="fas fa-first-aid"  ></i> Rescue</a></li>
            
            <li><a href="../storesnearme/storesnearme.html" ><i class="fas fa-shopping-cart"  ></i> Pet Stores near me</a></li>
            
            <li><a href="../trainer/trainer.html" ><i class="fas fa-user"  ></i> Pet Trainer</a></li>
            
            <li><a href="../vet/vet.html" ><i class="fas fa-user-md" ></i> Contact A Vet</a></li>
            
            <li><a href="../generalcare/generalcare.html" ><i class="fas fa-paw" ></i> General Pet Care</a></li>
 
            
            <li><a href="../donate/donate.html" ><i class="fas fa-hand-holding-usd"></i> Donate</a></li>
            
            <li><a href=""  onclick="closeSlideMenu()"><i class="far fa-list-alt"></i> trainers</a></li>
            
            <li><a href="../goodbye/goodbye.html" ><i class="fas fa-sad-tear"></i> Saying Goodbye</a></li>
            
            <li><a href="../contact/contact.html" ><i class="fas fa-address-book" ></i> Name For Pet?</a></li>

    </ul>
      
  </div>



<?php   
 //load_data_select.php 

 $connect = mysqli_connect("localhost", "root", "");  
 function fill_city($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM `cities`.`city`";  
      $result = mysqli_query($connect, $sql) ;  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '<option value="'.$row["city_id"].'">'.$row["city_name"].'</option>';  
      }  
      return $output;  
 }  

 function fill_trainer($connect)  
 {  
      $output = '';  
      $sql = "SELECT * FROM `trainers`.`trainer_data`";  
      $result = mysqli_query($connect, $sql);  
      while($row = mysqli_fetch_array($result))  
      while($row = mysqli_fetch_array($result))  
      {  
        $output .= 
           ' <div id="area-for-trainers">' .
              '<div class="my-event-card">' . 
                '<div class="card" style="width: 100rem;">'.

                  '<div class="card-body">'.
                      '<h2 class="card-title">'.$row["name"].'</h2>' .
                  '</div>'.

                  '<ul class="list-group list-group-flush">'.
                      '<li class="list-group-item">'.$row["address"].'</li>'.
                      '<li class="list-group-item">'.$row["city"].'</li>'.
                      '<li class="list-group-item">'.$row["contact"].'</li>'.
                  '</ul>'.

                '</div>'.
            '</div>'.
            '</div>' ;           
               }   
      return $output;  
 }  


 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
            
                <h3>  
                     <select name="city" id="city">  
                          <option value="">Trainers across all cities</option>  
                          <?php echo fill_city($connect); ?>  
                     </select>  
                     <br /><br />  
                     <div class="row" id="show_trainer">  
                          <?php echo fill_trainer($connect);?>  
                     </div>  
                </h3>  
           
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#city').change(function(){  
           var city_id = $(this).val();  
           $.ajax({  
                url:"trainer_data.php",  
                method:"POST",  
                data:{city_id:city_id},  
                success:function(data){  
                     $('#show_trainer').html(data);  
                }  
           });  
      });  
 });  
 </script>  