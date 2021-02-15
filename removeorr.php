<?php
   
     if(isset($_POST['removeorr'])){
      include 'database.php';
      global $db;
        try {
           $removeorr=$db->prepare("DELETE FROM orders where order_id=".$_GET['idorder']."");
           $removeorr=$db->prepare("DELETE FROM order_details where order_id=".$_GET['idorder']."");
           $removeorr->execute();
           header('Refresh:0; url=orders.php');
        } catch (PDOException $e) {
           echo $e->getMessage();
        }
    }
?>