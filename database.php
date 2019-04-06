	<?php

	$severname="localhost";
	$username = "root";
	$password = "";
	$dbname= "tienda";
	// create connection to database 
	
	$conn = new mysqli($severname,$username,$password,$dbname);
	// cheking 
	if ($conn->connect_error){
		die ("connection failed ". $conn->connect_error);
		} else{
			echo "i am connected to tienda" ;
		}
	
  ?>