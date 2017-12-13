<?php

	$modelos = $_POST["sel"]; 

	//recorremos el array de modelos seleccionados. No olvidarse que la primera posición de un array es la 0 
	for ($i=0; $i<count($modelos); $i++)    
	{     
	echo "<br> Modelo " . $i . ": " . $modelos[$i];    
	} 
?>
