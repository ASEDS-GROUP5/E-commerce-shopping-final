<?php 

	
	$conn = mysqli_connect('localhost', 'group5', 'webproject', 'ecommdb');

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>