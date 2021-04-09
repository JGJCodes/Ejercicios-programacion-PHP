<?php
	
	include("secuencias_adn.php");
	
	$adn1 = "";
	$adn2 = "";
	$result="";

	if(ISSET($_GET['submit'])){
		$adn1 = $_GET['formadn1'];
		$adn2 = $_GET['formadn2'];
		
		$bases=bases_adyacentes($adn1,$adn2);
		
		$result= "el conjunto ordenado de bases adyacentes es: ".$bases;
		
	}
?>