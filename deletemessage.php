<?php
	$id=$_GET['id'];
    $servername = "sql313.epizy.com"; $dbname = "epiz_27871710_ecommdb"; $user = "epiz_27871710"; $pass = "TC0YsyQK5l";
            
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