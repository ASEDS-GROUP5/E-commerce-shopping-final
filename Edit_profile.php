<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit profile</title>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylePravite.css">
    <link rel="stylesheet" href="stylesheete.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src=""></script>
</head>

<body style="background-color: #003049;">
   
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
    <hr>
    
    <div  id="background">
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
                <main id=main class="center">
                    <h1>Edit profile</h1> <hr color="black">
                <p>Edit your account information and apply changes</p>
                <form action="cookiecheck.php" method="POST">
                    <div class="col-sm-4">
                        
                            <label for="fname">First name: </label><br>
                            <input type="text" id="fname" name="fname" ><br>
                            <label for="fuser">Username:</label><br>
                            <input type="text" name="fuser" id="fuser"><br>
                            <label for="fadress">Adress:</label><br>
                            <input type="text" name="fadress" id="fadress"><br>
                            <label for="fphone">Phone number:</label><br>
                            <input type="text" name="fphone" id="fphone" ><br>


        
                    </div>
                    <div class="col-sm-4">
                        
                            <label for="flname">Last name:</label><br>
                            <input type="text" name="flname" id="flname" ><br>
                            <label for="femail">Email adress:</label><br>
                            <input type="email" name="femail" id="femail" ><br>
                            <label for="fzip">Zipcode:</label><br>
                            <input type="text" name="fzip" id="fzip" ><br>
                            <label for="fmobile">Mobile number:</label><br>
                            <input type="text" name="fmobile" id="fmobile"><br>
                        
                        
                        
                    </div><br>
                    <hr>
        
                    
                        <input type="submit" value="Apply changes" name="edit"  style="border: 5px solid black;">
                </form>
               
                </main>
                
                
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