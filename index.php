<?php
 session_start();
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>E-SHOP</title>
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
    
    img#P {
        width: 200px;
        height: 200px;
        border-radius: 5px 5px 5px 5px;
    }
    
    /* img#P:hover {
        /* transform: scale(1.1); */
    
    a#nav {
        text-decoration: none;
    }
    
    a#gender:hover,
    a#gender:active {
        color: lightseagreen;
        text-decoration: none;
        transition: 0.3s;
    }
    
    a#nav:hover,
    a#nav:active {
        color: lightgrey;
        transition: 0.3s;
    }
   
    ul.n {
    list-style-type: none;
    display : inline;
    }
    li#nav{
        display : inline;
    }
    .overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #cccccc;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container1:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}
.container1 {
  position: relative;
  width: 100%;
  
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
hr{
    border: 1px solid rgb(7, 7, 6)
}
.caption1{
    color:black;
}
</style>

<body style="background-color: snow;">
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
                    <div class='col-xs-4'>";
                    echo "<form method='POST' action='cookiecheck.php'><button id='nav' type='submit' class='btn btn-primary' name='cart'><span class='glyphicon glyphicon-shopping-cart'></span><b>Basket</b></button><form>
                    </div>
                    <div class='col-xs-4'>
                    <form method='POST' action='cookiechek.php'><button id='nav' type='submit' class='btn btn-danger' name='logout'><b>Log out</b></button><form>
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

    <hr>

    <div class="container">
        <div>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators ">
                    <li data-target="#myCarousel " data-slide-to="0 " class="active "></li>
                    <li data-target="#myCarousel " data-slide-to="1 "></li>
                    <li data-target="#myCarousel " data-slide-to="2 "></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active text-center">
                        <img src="img/icons/home-headimg.jpeg" alt=" " style="width:750px;height: 350px;border-radius: 0 5px 5px 0;border: black 2px solid ;margin-left: 100px;">
                    </div>
                    <div class="item text-center ">
                        <img src="img/icons/home-headimg1.jpeg" alt=" " style="width:750px;height: 350px;border-radius: 0 5px 5px 0;border: black 2px solid;margin-left: 100px; ">
                    </div>

                    <div class="item text-center ">
                        <img src="img/pexels-karolina-grabowska-5706273.jpg" alt=" " style="width:750px;height: 350px;border-radius: 0 5px 5px 0;border: black 2px solid;margin-left: 100px;">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <form  method="POST" class="navbar-form navbar-left" action="search.php">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" placeholder="Search" style="width: 400px;margin-left: 250px;border-radius: 5px 5px 5px 5px;border: black 2px solid; ">
                <!-- <div class="input-group-btn"> -->
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
                <!-- </div> -->
            </div>
        </form>
    </div>
    <div class="container-fluid text-center">
        <h2 style="color: black;font-family:Arial, Helvetica, sans-serif  "><b>Women's clothes</b></h2>
        <hr>

        <dl style="color: oldlace; ">
            <div class="col-sm-3 " style="border:2px solid black;background-color: rgba(241, 240, 240, 0.863);border-radius: 0 5px 5px 0; ">
                <a id="gender" href="shop.php?category=Women s fashion">
                    <img src="img/icons/home-img10.png " alt="">
                    <div class="caption "><b>Women's Fashion</b></div>
                </a>
            </div>
            <?php
            include 'database.php';
            global $db;
                $products=$db->prepare("SELECT P.photo, P.description, P.product_name,P.price from products P , category C where P.category_id=C.category_id and C.category_name='Women s fashion' LIMIT 3");
                $products->execute();
                foreach($products as $row){
                    $photo=$row['photo'];
                    $pname=$row['product_name'];
                    $description=$row['description'];
                    $price=$row['price'];
                    echo "
                    <div class='col-sm-3 '>
                        <div class='container1'>
                            <img id='P'src='".$photo." ' alt='' style='background-color: snow;'></img>
                            <div class='overlay'>
                                <div class='text'>".$description."<br>Price :".$price." DHS</div>
                            </div>
                        </div>
                        <div class='caption1 '>".$pname."<br>Price : ".$price." DHS</div>
                    </div>
                        "
                    ;
                }
            ?>
        </dl>
    </div>
    <br>
    <div class="container-fluid text-center ">
        <h2 style="color: black;font-family:Arial, Helvetica, sans-serif "><b>Men's clothes</b></h2>
        <hr>
        <dl style="color: oldlace; ">
            <div id="g" class="col-sm-3 " style="border:2px solid black;background-color: rgba(241, 240, 240, 0.863);border-radius: 0 5px 5px 0; ">

                <a id="gender" href=" shop.php?category=Men s fashion">
                    <img src="img/icons/home_imag11.png " alt=" ">
                    <div class="caption "><b>Men's Fashion</b></div>
                </a>

            </div>
            <?php
                $products=$db->prepare("SELECT P.photo, P.description, P.product_name,P.price from products P , category C where P.category_id=C.category_id and C.category_name='Men s fashion' LIMIT 3");
                $products->execute();
                foreach($products as $row){
                    $photo=$row['photo'];
                    $pname=$row['product_name'];
                    $description=$row['description'];
                    $price=$row['price'];
                    echo "
                    <div class='col-sm-3 '>
                        <div class='container1'>
                            <img id='P'src='".$photo." ' alt='' style='background-color: snow;'></img>
                            <div class='overlay'>
                                <div class='text'>".$description."<br>Price :".$price."</div>
                            </div>
                        </div>
                        <div class='caption1 '>".$pname."<br>Price : ".$price."</div>
                    </div>
                        "
                    ;
                }
            ?>
        </dl>
    </div>
    <br>
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
