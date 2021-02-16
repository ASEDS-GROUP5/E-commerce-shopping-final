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



?>