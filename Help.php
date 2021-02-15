<?php
session_start();
?>
<?php
    include 'repetetive/header.php';
?>
<!DOCTYPE html>
<html lang="en">

    
<hr>
    
 <div id="background">
        
    <div id="part" style="margin-left:50px;margin-right: 50px;margin-bottom: 80px;" >
    
        <h1 class="center">How can we help you ?</h1>
        <hr>
        <div class="row">
            <div class="col-sm-6">
            <h2>E_commerce</h2>
            <h3>shopping made</h3>
            <h4>Easy!</h4>
            </div>
            <div class="col-sm-6">
                <div class=" row">
                <form method="POST" action="cookiecheck.php"><button id='nav' type='submit' class='btn btn-default' name='orders'><b>My orders</b></button><form>
                        <?php
                            // if(isset($_POST['orders'])){
                            //     if(isset($_COOKIE['userid'])){
                            //         header("Location: orders.php");
                                   
                            //     }else{
                            //         header("Location: login.html");
                            //     }
                            // }
                        ?>
    
                </div><hr>
                <div class="row">
                    <a href="http://">Payment methodes</a>
                <p>All internationnal payment 
                card type are allowed</p>
                </div>
                <hr>
                <div class="row">
                    <form method='POST' ><button id='nav' type='submit' class='btn btn-default' name='editP'><b>Account Settings</b></button><form>
                        <?php
                            // if(isset($_POST['editP'])){
                            //     if(!isset($_COOKIE['userid'])){
                            //         header('Location:login.html');
                            //     }else{
                            //         header('Location:Edit_profile.php');
                            //     }
                            // }
                        ?>
                </div><hr>
        </div>
    
    </div>
    </div>
    <footer class="container" style="background-color:rgb(172, 13, 13);width:100%;border-top: snow solid 3px;">
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
    </footer>


        
        
    </div>
</div>
</body>
</html>