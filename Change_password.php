<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change password</title>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylePravite.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src=""></script>
</head>
<body style="background-color: #003049;" >
    <!-- <header class="navbar" style="background-color:rgb(172, 13, 13);text-align:center; ">
        <a id="logo" class="col-sm-4 " href="home.html" alt="Home "><span class="glyphicon glyphicon-leaf "></span><b> E-SHOP</b></a>
        <nav class="col-sm-4" style="color:rgb(7, 7, 6);padding: 20px;font-size:large; ">
            <div class="navbar-header " style="color: mintcream; ">
                <a id="nav" href="home.html">Home</a> |
                <a id="nav" href=" ">Shop</a> |
                <a id="nav" href="Contact_us.html">Contact us</a> |
                <a id="nav" href="Help.html">Help</a>
            </div>
        </nav>
        <div class="col-sm-4 " style="padding: 19px;font-size: 20px; ">
            <div class="col-sm-6 ">
                <a id="nav" href="login.html"> <span class="glyphicon glyphicon-log-in "></span><b> Log in</b></a>
            </div>
            <div class="col-sm-6 ">
                <a id="nav" href="shoppingCart.html"> <span class="glyphicon glyphicon-shopping-cart "></span><b> Basket</b></a>
            </div>
        </div>
    </header> -->
    <?php
    include 'repetetive/header.php';
    ?>
    <hr>
    <div id="background">
        <div class="row">
            <div id="part2" class="col-sm-4  ">
                <ul>
    
                <li><img src="icons\iconfinder_SEO_cogwheels_setting_969265.png" alt="settings"style="float:left;width: 30px;height: 30px"><h3>My account</h3></li>
                    <hr style="color: black;size: 10px;">
                    <li><a href="Edit_profile.php"><h4><span class='glyphicon glyphicon-user'></span> <b>Edit profile</b></h4></a></li><br>
                    <li><a href="Edit_profile.php"><h4><span class='glyphicon glyphicon-user'></span> <b>Edit payment info</b></a></h4></a></li>
                    <li><a href="Change_password.php"><h4><span class='glyphicon glyphicon-user'></span> <b>Change password</b></a></h4></a></li>  
      
                </ul>
            </div>
            <div id="part" class="col-sm-8">
        
                <h1>Edit profile</h1>
                <p>Edit your account information and apply changes</p>
        
                <form action="cookiecheck.php" method="POST">
                    
                    <input type="password" name="fpass" placeholder="Actual password" id="label"><br><hr>
                    
                    <input type="password" name="fpass1"  placeholder="New password" id="label"><br><hr>
                    
                    <input type="password" name="fpass2"   placeholder="Comfirm new password" id="label"><br>
                    <hr>
                    <input type="submit" name="fsend" value="Apply changes" style="float: left;"><br>
                    
                    
                    
                </form>
               

                
                
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

</body>
</html>