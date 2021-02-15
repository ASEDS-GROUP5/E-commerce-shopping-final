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
    <meta name="viewport"content="width=device-width, initial-scale=1">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src=""></script>

</head>

<body style="background-color: #003049;">
    <header class="navbar" style="background-color:rgb(172, 13, 13);text-align:center; ">
        <a id="logo" class="col-sm-4 " href="home.html" alt="Home "><span class="glyphicon glyphicon-leaf "></span><b> E-SHOP</b></a>
        <nav class="col-sm-4" style="color:rgb(7, 7, 6);padding: 20px;font-size:large; ">
            <div class="navbar-header " style="color:#ffff ; ">
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
		            		<img src="<?php echo (!empty($product['photo'])) ? 'images/'.$product['photo'] : 'images/noimage.jpg'; ?>" width="100%" class="zoom" data-magnify-src="images/large-<?php echo $product['photo']; ?>">
		            		<br><br>
		            		<form class="form-inline" id="productForm">
		            			<div class="form-group">
			            			<div class="input-group col-sm-5">
			            				
			            				<span class="input-group-btn">
			            					<button type="button" id="minus" class="btn btn-default btn-flat btn-lg"><i class="fa fa-minus"></i></button>
			            				</span>
							          	<input type="text" name="quantity" id="quantity" class="form-control input-lg" value="1">
							            <span class="input-group-btn">
							                <button type="button" id="add" class="btn btn-default btn-flat btn-lg"><i class="fa fa-plus"></i>
							                </button>
							            </span>
							            <input type="hidden" value="<?php echo $product['prodid']; ?>" name="id">
							        </div>
			            			<button type="submit" class="btn btn-primary btn-lg btn-flat"><i class="fa fa-shopping-cart"></i> Add to bag</button>
			            		</div>
		            		</form>
		            	</div>
		            	<div class="col-sm-6">
		            		<h1 class="page-header"><?php echo $product['product_name']; ?></h1>
                            <h3>price : <?php echo htmlspecialchars($product['price']); ?> DH</h3>
		            		
		            		<p><b>Description:</b></p>
		            		<p><?php echo $product['description']; ?></p>
		            	</div>
		            </div>
		            <br>
				    <div class="fb-comments" data-href="http://localhost/ecommerce/product.php?product=<?php echo $slug; ?>" data-numposts="10" width="100%"></div> 
	        	</div>
	        	
	        </div>
	      </section>
          <script>
$(function(){
	$('#add').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		quantity++;
		$('#quantity').val(quantity);
	});
	$('#minus').click(function(e){
		e.preventDefault();
		var quantity = $('#quantity').val();
		if(quantity > 1){
			quantity--;
		}
		$('#quantity').val(quantity);
	});

});
</script
	     
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