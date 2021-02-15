<?php

if(isset($_POST["buy"])){
    if(!isset($_COOKIE["userid"])){
        header('Location:login.html');
    }else{
        include 'database.php';
        global $db;
        try{
            // $user=$db->prepare("SELECT user_id FROM users where username='".$_COOKIE['username']."'");
            // $user->execute();
            // $id=$user->fetch();
            $orderid=random_int(60000000,80000000);
            $date=date("Y-n-j-g:i a"); 
            $orders=$db->prepare("INSERT INTO orders(order_id,user_id,order_date)
                            VALUES (:orderid,:userid,:orderdate)");
            $orders->bindParam(':orderid',$orderid);
            $orders->bindParam(':userid',$_COOKIE['userid']);
            $orders->bindParam(':orderdate',$date);
            $orders->execute();

                $q=$db->prepare("SELECT product_id FROM basket where user_id=".$_COOKIE['userid'].";");
                $q->execute();
                foreach($q as $row){
                    $order=$db->prepare("INSERT INTO order_details(order_id,product_id)
                        VALUES (:orderid,:pid)") ;
                    $order->bindParam(':orderid',$orderid);
                    $order->bindParam(':pid',$row['product_id']);
                    $order->execute();

                }
            header('Refresh:0; url=orders.php');

            
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}



?>
 