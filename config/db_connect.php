<?php

	// connect to database
	$conn = mysqli_connect('localhost', 'tanya', 'tanya132', 'ninja_pizza');

	// connection check
	if(!$conn){
		echo 'Connection Error: ' . mysqli_connect_error();
	}	
	
?>