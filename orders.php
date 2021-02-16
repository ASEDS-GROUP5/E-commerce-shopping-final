<?php
session_start();
if(!isset($_COOKIE['userid'])){
    header('Refresh:0; url:login.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>My Orders</title>
</head>
<style>
    a {
        color: black;
    }
    
    a#logo:link,
    a#logo:visited {
        background-color: rgb(14, 12, 12);
        color: aliceblue;
        width: 20%;
        padding: 10px;
        margin-top: 10px;
        margin-left: 50px;
        font-size: 19px;
        text-decoration: none;
        border-radius: 5px 5px 5px 5px;
    }
    
    a#logo:hover,
    a#logo:active {
        color: rgb(10, 9, 9);
        background-color: snow;
        transition: 0.5s;
    }
    
    a#nav:hover,
    a#nav:active {
        color: lightgrey;
        transition: 0.3s;
    }
    
    a#nav {
        text-decoration: none;
    }
    
    img#P {
        width: 50px;
        height: 50px;
        border-radius: 5px 5px 5px 5px;
    }
</style>


<body style="background-image:url(img/signUp-background.jpeg);">
    <header class="navbar" style="background-color:rgb(172, 13, 13);text-align:center;">
        <a id="logo" class="col-sm-3" href="index.php" alt="Home"><span class="glyphicon glyphicon-leaf"></span><b> E-SHOP</b></a>
        <nav class="col-sm-5" style="color:rgb(7, 7, 6);padding: 20px;font-size:large;">
        <div class="navbar-header " style="color: mintcream;">
                <ul class="n">
                    <li id="nav"><a id="nav" href="index.php">Home </a></li>|
                    <li id="nav"class="dropdown"><a id="nav" class="dropdown-toggle" data-toggle="dropdown" href="">Shop<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.php?category=Women s fashion">Women's Fashion</a></li>
                            <li><a href="shop.php?category=Men s fashion">Men's Fashion</a></li>
                        </ul>
                    </li> |
                    <li id="nav"><a id="nav" href="Contact_us.html">Contact us </a></li>|
                    <li id="nav"><a id="nav" href="Help.php"> Help</a></li>
                </ul>
            </div>
        </nav>
        <div class='col-sm-4' style='padding: 19px;font-size: 20px;'>
            <div class='col-xs-4'>
                <p style='color: rgb(243, 242, 242);margin-left: -60px;'>✔️Connected</p>
            </div>
            <div class='col-xs-4'>
            <form method='POST' action='cookiecheck.php'><button id='nav' type='submit' class='btn btn-primary' name='cart'><span class='glyphicon glyphicon-shopping-cart'></span><b>Basket</b></button><form>
            </div>
            <div class='col-xs-4'>
            <form method='POST' action='cookiechek.php'><button id='nav' type='submit' class='btn btn-danger' name='logout'><b>Log out</b></button><form>
            </div>
            
        </div>
    </header>
   
    <h1 style="text-align: left;margin-left: 20px;color: snow;"><b> MY ORDERS</b></h1>
    <hr>
    <div class="container" style="width: 80%;">
        
        <?php
            include 'database.php';
            global $db;
            $qt=$db->prepare("SELECT D.order_id,O.status,B.quantity,P.photo,P.product_name FROM basket B,products P,order_details D,orders O where P.product_id=B.product_id and D.order_id=O.order_id and D.product_id=P.product_id and B.user_id=".$_COOKIE['userid']."");
            $qt1=$db->prepare("SELECT D.order_id,O.status,B.quantity,P.photo,P.product_name FROM basket B,products P,order_details D,orders O where P.product_id=B.product_id and D.order_id=O.order_id  and D.product_id=P.product_id and B.user_id=".$_COOKIE['userid']."");
            $qt->execute();
            $qt1->execute();
            $count=$qt->rowCount();
            if($count==0){
                echo "<h2 class='text-danger' style='margin:150px auto'>NOTE : You have no orders yet !</h2> ";
            }else{
                $result=$qt->fetch();
                $order_id=$result['order_id'];
                echo "
                <div class='panel panel-default'>
                <div class='panel-heading' style='background-color: orange;'>
                    <b>Order ID : ".$order_id."</b>
                    <form method='POST' action='removeorr.php?idorder=".$order_id."'>
                       <button type='submit' id=".$order_id." name='removeorr' class='btn btn-danger'>
                               <span class='glyphicon glyphicon-remove'></span>Cancel the order
                       </button>
                    </form>
                </div>
                <div class='panel-body '>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>Picture</th>
                                <th>Label</th>
                                <th>Quantity</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                    ";
               while($results=$qt1->fetch()){
                  
                   if($results['order_id']!=$order_id){
                       echo "
                                   </tbody>
                               </table>
                           </div>
                       </div>
                       <div class='panel panel-default'>
                           <div class='panel-heading' style='background-color: orange;'>
                               <b>Order ID : ".$results['order_id']."</b>
                               <form method='POST' action='cookiecheck.php?idorder=".$results['order_id']."'>
                                   <button type='submit' id=".$results['order_id']." name='removeorr' class='btn btn-danger'>
                                           <span class='glyphicon glyphicon-remove'></span>Cancel the order
                                   </button>
                               </form>
                           </div>
                           <div class='panel-body '>
                               <table class='table'>
                                   <thead>
                                       <tr>
                                           <th>Picture</th>
                                           <th>Label</th>
                                           <th>Quantity</th>
                                           <th>Status</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                           ";
                       $order_id=$results['order_id'];
                   }else{
                       $photo=$results['photo'];
                       $pname=$results['product_name'];
                       $quantity=$results['quantity'];
                       $status=$results['status'];
                       echo "      
                       <tr>
                           <td><img id='P' src='".$photo."' alt=''></td>
                           <td>".$pname."</td>
                           <td>".$quantity."</td>
                           <td>".$status."</td>
                       </tr>
                       ";
                   }
               }
                           
            }
            
        ?>
                    </tbody>
                </table>
            </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- <footer class="container" style="background-color:rgb(172, 13, 13);width:100%;border-top: snow solid 3px;marging-bottom:0px;">
        <div class="col-sm-6 ">
            <a id="nav" href=" "><b> Our group<br>Learn more about us</b></a>
        </div>
        <div class="col-sm-6 ">
            <h4 style="text-decoration-line: underline;color: snow; "><b>Find us</b></h4>
            <li>
                <a id="nav" href=""><img src="img/icons/Twitter.png " height="25 " width="25 "><b> Twitter</b></a>
            </li>
            <li>
                <a id="nav" href=""><img src="img/icons/facebook.png " height="25 " width="25 " alt=" "><b>Facebook</b></a>
            </li>
            <li>
                <a id="nav" href=""><img src="img/icons/instagram.png " height="25 " width="25 " alt=" "><b>Instagram</b></a>
            </li>

        </div>
    </footer> -->
            <?php include 'repetetive/footer.php';?>

<!-- </body>

</html> -->
