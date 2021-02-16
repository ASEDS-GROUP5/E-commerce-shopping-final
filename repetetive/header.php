<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePravite.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheete.css">
    <title>E-SHOP</title>
</head>
<body>
    <div class="fluid-container">
        <header class="navbar" style="background-color:rgb(172, 13, 13);text-align:center; ">
            <a id="logo" class="col-sm-3 " href="index.php" alt="Home "><span class="glyphicon glyphicon-leaf "></span><b> E-SHOP</b></a>
            <nav class="col-sm-5" style="color:rgb(7, 7, 6);padding: 20px;font-size:large; ">
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
            <?php
                if(isset($_COOKIE['userid'])){
                    echo "
                    <div class='col-sm-4' style='padding: 19px;font-size: 20px;'>
                        <div class='col-xs-4'>
                            <p style='color: rgb(243, 242, 242);margin-left: -60px;'>✔️Connected</p>
                        </div>
                        <div class='col-xs-4'>
                        <form method='POST' action='cookiecheck.php'><button id='nav' type='submit' class='btn btn-primary' name='cart'><span class='glyphicon glyphicon-shopping-cart'></span><b>Basket</b></button></form>
                        </div>
                        <div class='col-xs-4'>
                        <form method='POST' action='logout.php'><button id='nav' type='submit' class='btn btn-danger' name='logout'><b>Log out</b></button></form>
                        </div>
                       
                    </div>
                    ";
                }else{
                    echo "
                    <div class='col-sm-4 ' style='padding: 19px;font-size: 20px; '>
                        <div class='col-sm-12 '>
                            <a id='nav' href='login.html' target='blanck'> <span class='glyphicon glyphicon-log-in '></span><b> Log in</b></a>
                        </div>
                    </div>
                        ";
                }

            ?>
        </header>
    </div>