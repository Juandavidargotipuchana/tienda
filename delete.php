


<?php
include("database.php");
	$id= $_GET['id'];
	$cod = $_GET['cod'];
	
	//echo $id."<br>";
	//echo $cod;
 
 
  $sql ="DELETE FROM productos WHERE id =$id";
 
 $conn->query($sql);

 echo "<script language='javascript'>alert('producto  eliminado con exito')</script>";
		echo "<br><a href ='index.php'<regresar</a<";
		
		
		header("Refresh:0, url=index.php");
 
 
 
 
?>