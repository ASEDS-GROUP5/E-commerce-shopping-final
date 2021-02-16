<?php
$id=$_GET['idorder'];
   include 'database.php';
    global $db;
     if(isset($_POST['removeorr'])){
      
        try {
           $removeorr=$db->prepare("DELETE FROM orders where order_id=".$id.";");
           $removeorr=$db->prepare("DELETE FROM order_details where order_id=".$id.";");
           $removeorr->execute();
           header('Refresh:0; url=orders.php');
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
    }
?>