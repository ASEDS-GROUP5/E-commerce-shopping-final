<?php
	$id=$_GET['id'];
    $servername = "localhost"; $dbname = "ecommdb"; $user = "admin"; $pass = "admin";
            
    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbco->prepare("delete from products where product_id=$id ");
        $sth->execute();
        header('location:admin_Products.php');
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>