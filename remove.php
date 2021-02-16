<?php
$id=$_GET['idbutton'];
include 'database.php';
global $db; 
if(isset($_POST['remove'])){
    
    try {
        
        $remove=$db->prepare("DELETE FROM basket where basket_id=".$id."");
        $remove->execute();
        header('Location:shoppingCart.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
   
?>