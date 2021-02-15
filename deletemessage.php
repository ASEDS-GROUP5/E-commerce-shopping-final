<?php
	$id=$_GET['id'];
    $servername = "localhost"; $dbname = "ecommdb"; $user = "group5"; $pass = "webproject";
            
    try{
        $dbco = new PDO("mysql:host=$servername;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sth = $dbco->prepare("delete from messages where id_message=$id ");
        $sth->execute();
        header('location:admin_messages.php');
    } catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
?>