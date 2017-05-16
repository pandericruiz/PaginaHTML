<?php
	$idioma=$_GET["idioma"];
	setcookie("idiomaTriat",$idioma,time()+1000000);
	
	if ($idioma=="ang") {
		header ("Location:idiang.html");
	}
	
	if ($idioma=="cas") {
		header("Location:idicas.html");
	}
	
	if ($idioma=="jap") {
		header("Location:idijap.html");
	}
	
?> 
