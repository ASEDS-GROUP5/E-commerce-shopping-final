<?php
   
if(isset($_POST['remove'])){
    include 'database.php';
    global $db;
    try {
        
        $remove=$db->prepare("DELETE FROM basket where basket_id=".$_GET['idbutton']."");
        $remove->execute();
        header('Refresh:0; url=shoppingCart.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
   
?>