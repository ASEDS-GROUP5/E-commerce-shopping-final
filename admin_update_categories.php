<?php
	$servername = "sql313.epizy.com"; $dbname = "epiz_27871710_ecommdb"; $user = "epiz_27871710"; $pass = "TC0YsyQK5l";
	$conn = mysqli_connect($servername,$user,$pass,$dbname);
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$id=$_GET['id'];
 
	$firstname=$_POST['category_name'];
 
	mysqli_query($conn,"update category set category_name='$firstname' where category_id=$id ");
	header('location:admin_categories.php');
?>