	<?php

	
	include("database.php");
	
	$codigo= $_POST ["cod_prod"];
	$nombre= $_POST ["nom_prod"];
	$cantidad= $_POST ["cantidad"];
	
	$sql ="INSERT INTO productos (codigo_prod,nombre_prod,cantidad) VALUES 
	('$codigo','$nombre',$cantidad)"; 
	
	
	if ($conn->query($sql)===TRUE){
		
		echo "producto registrado con exito.<br>";
		echo "<br><a href ='index.php'<regresar</a<";
		
		
	}
	  else {
		  
		  echo "Error: ".$sql ."<br>". $conn->error;
		  
	  }
	
	
	
  ?>