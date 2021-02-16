<?php include 'conns.php'; ?>
<?php
	$conn = $pdo->open();
    if(isset($_GET['product_id'])){

	$product_id = $_GET['product_id'];

	try{
		 		
	    $stmt = $conn->prepare("SELECT *, product_name AS prodname, category_name AS catname, product_id AS prodid FROM products P LEFT JOIN category C ON C.category_id=P.category_id WHERE product_id= :product_id");
	    $stmt->execute(['product_id' => $product_id]);
	    $product = $stmt->fetch();
		
	}
	catch(PDOException $e){
		echo "There is some problem in connection: " . $e->getMessage();
	}
}
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>check products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>E-SHOP</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;800&display=swap" rel="stylesheet">
    <link  rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src=""></script>

</head>

<body style="background-color: #003049;">
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
                    echo "<form method='POST' action='cookiecheck.php'><button id='nav' type='submit' class='btn btn-primary' name='cart'><span class='glyphicon glyphicon-shopping-cart'></span><b>Basket</b></button></form>
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
    <hr>
    <div id="background">
        <div id=part style="margin-left:50px;margin-right: 50px;color:#E0FFFF ">
            <h1>YOUR PRODUCT:</h1>
            <hr>
            <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<div class="callout" id="callout" style="display:none">
	        			<button type="button" class="close"><span aria-hidden="true">&times;</span></button>
	        			<span class="message"></span>
	        		</div>
		            <div class="row">
		            	<div class="col-sm-6">
		            		<img src="<?php echo (!empty($product['photo'])) ? ''.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
							<form method="POST" class="navbar-form navbar-left" action="login.html">
		            		
							<div class="form-group"> 
							<div class="input-group col-sm-5"> 
								<span class="input-group-btn"> 
								      <button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
								</span>
								      <input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
								<span class="input-group-btn"> 
								      <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i> </button> 
							   </span> 
								<input type="hidden" value="<?php echo $product['prodid']; ?>" name="id"> 
								</div> 
								<button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to bag</button>
							</div>
		            			
							    
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $product['product_name']; ?></h1>
							
                            <h2>price : <?php echo htmlspecialchars($product['price']); ?> DH</h2>
		            		<br>
							<h4> Marque : E-Shop </h4>
							
								<i class="fa fa-star" ></i>
								<i class="fa fa-star" ></i>
								<i class="fa fa-star" ></i>
								<i class="fa fa-star" ></i>
								<i class="fa fa-star" ></i>

		            		<h3><b>Description:</b></h3>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
		            </div>
		            <br>
				    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $product_id; ?>" data-numposts="10" width="100%"></div> 
	        	</div>
	        	
	        </div>
	      </section>
 
		  <?php include 'repetetive/footer.php'; ?>
    
    




</body>
</html>