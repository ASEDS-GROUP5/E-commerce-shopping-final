<?php
if (isset($_POST['cart'])){
    if(!isset($_COOKIE['userid'])){
        header('Location: login.html');
    }else{
        header('Location: shoppingCart.php');
    }
}
if(isset($_POST['logout'])){
       
    setcookie('userid','',time()-700000);
    session_destroy();
    header('Location:login.html');
}
if(isset($_POST['orders'])){
    if(isset($_COOKIE['userid'])){
        header("Location: orders.php");
       
    }else{
        header("Location: login.html");
    }
}
if(isset($_POST['editP'])){
    if(!isset($_COOKIE['userid'])){
        header('Location:login.html');
    }else{
        header('Location:Edit_profile.php');
    }
}
if(isset($_POST['edit'])){
    if(!empty($_POST["fuser"]) && !empty($_POST["fadress"]) && !empty($_POST["fphone"]) && !empty($_POST["femail"]) && !empty($_POST["fmobile"])){
        if(!isset($_COOKIE['userid'])){
            header('Location:login.html');
            echo "<script>alert('Sesseion expired')</script>";
        }else{
            include 'database.php';
            global $db;
            $username1=$_POST["fuser"];
            $adress=$_POST["fadress"];
            $phone=$_POST["fphone"];
            $email=$_POST["femail"];

            try {
            
                $sql = "UPDATE users SET username='$username1', address='$adress', contact='$phone', email='$email' WHERE user_id=".$_COOKIE['userid']."";
            
                // Prepare statement
                $stmt = $db->prepare($sql);
            
                // execute the query
                $stmt->execute();
            
            
                // echo a message to say the UPDATE succeeded
                header("Refresh:0; url=Edit_profile.php");
                echo "your profile UPDATED successfully";
                
            } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
            }
            
            $db = null;
        }


    }
}
if(isset($_POST['fsend'])){
    if(!empty($_POST["fpass"]) && !empty($_POST["fpass1"]) && !empty($_POST["fpass"]) ){
        if(!isset($_COOKIE['userid'])){
            header('Location:login.html');
            echo "<script>alert('Sesseion expired')</script>";
        }else{
             include 'database.php';
             global $db;
             
             

             $actualPassword=$_POST["fpass"];
             $newPassword=$_POST["fpass1"];
             $conNewPassword=$_POST["fpass2"];
             

             try {
                 

                 if($newPassword==$conNewPassword){
                     $sql = "UPDATE users SET password='$newPassword' WHERE user_id=".$_COOKIE['userid']."";
             
                     // Prepare statement
                     $stmt = $db->prepare($sql);
                 
                     // execute the query
                     $stmt->execute();
                     header("Location:Change_password.php");
                     echo "your passwword UPDATED successfully";

                 }else{
                     echo "Error";
                 }
             
             
             } catch(PDOException $e) {
                 echo $sql . "<br>" . $e->getMessage();
             }
             
             $db = null;
         }


     }
}
if(isset($_POST["buy"])){
    if(!isset($_COOKIE["userid"])){
        header('Location:login.html');
    }else{
        include 'database.php';
        global $db;
        try{
            
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
$id=$_GET['idbutton'];
if(isset($_POST['remove'])){
    include 'database.php';
    global $db;
    try {
        
        $remove=$db->prepare("DELETE FROM basket where basket_id=".$id."");
        $remove->execute();
        header('Location:shoppingCart.php');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
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