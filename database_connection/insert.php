<html>
<body>


<?php

//create connection
$con = mysqli_connect("localhost","root","");

if (!$con){

  die('Could not connect: ' . mysql_error());
}


mysqli_select_db($con,'findahome');

//if (isset($_POST['ownerName']) && isset($_POST['petName']) && isset($_POST['petAge'])  && isset($_POST['ownerEmail']) && isset($_POST['petDescription']) )

	// Instructions if $_POST['value'] exist

	$sql = "INSERT INTO formdata (ownerName, petName,petAge,ownerEmail,petDescription ) VALUES ('$_POST[ownerName]','$_POST[petName]','$_POST[petAge]','$_POST[ownerEmail]','$_POST[petDescription]')"; 

	if(mysqli_query($con, $sql)){
	    echo "Records added successfully.";
	} else{
	    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
	}


 
mysqli_close($con)

?>

</body>
</html>