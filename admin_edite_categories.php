<?php
    $servername = "localhost"; $dbname = "ecommdb"; $user = "group5"; $pass = "webproject";
	$conn = mysqli_connect($servername,$user,$pass,$dbname);
 
    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from category where category_id=$id ");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Basic MySQLi Commands</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="admin_update_categories.php?id=<?php echo $id; ?>">
		<label>category_name:</label><input type="text" value="<?php echo $row['category_name']; ?>" name="category_name">
		<input type="submit" name="submit">
		<a href="admin_categories.php">Back</a>
	</form>
</body>
</html>