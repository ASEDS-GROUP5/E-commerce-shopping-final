<!DOCTYPE html>
<html lang="en">
<head>
    <title>check products</title>
    <meta charset="utf-8">
    <meta name="viewport"content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="stylePravite.css">
    <link rel="stylesheet" href="TopBottom.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src=""></script>

</head>

<body style="background-color: #003049;">
    <header class="navbar" style="background-color:rgb(172, 13, 13);text-align:center; ">
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
    </header>
    <hr>
    <div id="background">
        <div id=part style="margin-left:50px;margin-right: 50px;">
            <h1>ITEM'S FULL NAME</h1>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <img src="" alt="">
                    <img src="" alt="" style="height: 100px;width: 100px;">
                    <img src="" alt=""style="height: 100px;width: 100px;">
                    <img src="" alt=""style="height: 100px;width: 100px;">
                    <h3>Price:</h3>
                    <p>99.99$</p>

                </div>
                <div class="col-sm-6">
                    <form action="info.php">
                        <label for="fcolor">Color:</label><br>
                        <input type="color" name="fcolor" id="fcolor" value=""><br>
                        <label for="fsize">Size:</label><br>
                        <input type="radio" name="s" id="fsize"value="S">
                        <label for="s">S</label>
                        <input type="radio" name="xs" id="fsize"value="XS">
                
                        <label for="xs">XS</label>
                        <input type="radio" name="m" id="fsize"value="M">  
                        <label for="m">M</label>
                        <input type="radio" name="l" id="fsize" value="L">
                        <label for="l">L</label>
                        <input type="radio" name="xl" id="fsize">
                        <label for="xl">XL</label>
                        <input type="radio" name="xxl" id="XXL">
                
                        <label for="xxl">XXL</label><br><br>
                    
                
                
                    
                    
                    
                        <label for="quantity">Quantity (between 1 and 5):</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="5">
                        <input type="submit" value="Submit"><br><br>
                        <input type="submit" value="Add to bag">
                
                    </form>
                    <?php 
                        include "includes/database.php";
                        

                        ?>
    
    
                </div>
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