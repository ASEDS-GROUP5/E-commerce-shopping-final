<?php 

	
	$conn = mysqli_connect('sql313.epizy.com', 'epiz_27871710', 'TC0YsyQK5l', 'epiz_27871710_ecommdb');

	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>