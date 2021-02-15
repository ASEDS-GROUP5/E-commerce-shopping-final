<?php 

	include('repetetive/conn.php');

	

if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}




if(isset($_GET['category'])){

    if(isset($_GET['sub_category'])){

        $category = mysqli_real_escape_string($conn, $_GET['category']);
        $sub_category = mysqli_real_escape_string($conn, $_GET['sub_category']);

        $sql1 = "SELECT * FROM products P,category C,subcat T WHERE P.category_id=C.category_id and P.sub_category_id=T.sub_category_id and C.category_name = '".$category."' AND T.sub_category = '".$sub_category."'";

	    $result1 = mysqli_query($conn, $sql1);

        $results_per_page = 6;

        $number_of_results = mysqli_num_rows($result1);


        $number_of_pages = ceil($number_of_results/$results_per_page);

        $this_page_first_result = ($page-1)*$results_per_page;

        $category = mysqli_real_escape_string($conn, $_GET['category']);
        $sub_category = mysqli_real_escape_string($conn, $_GET['sub_category']);
        
        $sql2= " SELECT * FROM products P,category C,subcat T WHERE P.category_id=C.category_id and P.sub_category_id=T.sub_category_id and C.category_name = '".$category."' AND T.sub_category = '".$sub_category."' LIMIT " . $this_page_first_result . ',' .  $results_per_page ;
        $result2 = mysqli_query($conn, $sql2);
        $products = mysqli_fetch_all($result2, MYSQLI_ASSOC);

    
    }    

}    
		




?>





<!DOCTYPE html>
<html lang="en">
<?php include('repetetive/header.php'); ?>    
    <div class="container" id="content">
    <div id="bgc">
        <?php 
        include('repetetive/search-box.php'); 
        ?>
       
        <div class="container">
            <div class="row ">
                <div class="col-lg-3">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul id="categories-list">
                                <li><a href="shop.php?category=<?php echo $category ?>"><?php echo $category?></a></li>
                                <li><a href="shopping.php?category=<?php echo $category; ?>&&sub_category=clothings&&page=1">clothings</a></li>
                                <li><a href="shopping.php?category=<?php echo $category; ?>&&sub_category=shoes&&page=1">shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <aside class="col-sm-12">
                            <img id="pub" src="images/pub1.png" alt="pub">
                        </aside>
                    </div> -->
                </div>
                <main class="col-lg-9 menu">
                    <div class="fluid-container gallery-container">
      
                        <div class="tz-gallery">
                    
                            <div class="row">
                                    
                                <?php foreach($products as $product): ?>
                                    

                                    <div class="col-sm-6 col-md-4">
                                        <a class="lightbox" data-toggle="modal" data-target="<?php echo "#check-product{$product['product_id']}" ;?>" href="../images/park.jpg">
                                            <img src="<?php echo htmlspecialchars($product['photo']); ?>" alt="Park" class="item-image">
                                        </a>
                                        <h4 class="price">Price : <?php echo htmlspecialchars($product['price']); ?> DH</h4>                              
                                    </div>


                                    
                                    <div class="modal" id="<?php echo "check-product{$product['product_id']}" ; ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <img src="<?php echo htmlspecialchars($product['photo']); ?>" alt="Sky" class="zoom-image">
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <h2 class="modal-title"><?php echo htmlspecialchars($product['product_name']); ?></h3>
                                                            <h3>price : <?php echo htmlspecialchars($product['price']); ?> DH</h3>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <form method="POST" action="shopping.php?category=<?php echo $category?>&&sub_category=<?php echo $sub_category?>">
                                
                                                                <label for="fsize">Size:</label><br>
                                                                <?php foreach(explode(',', $product['size']) as $size): ?>
                                                                    <input type="radio" name="size" id="<?php echo htmlspecialchars($size); ?>" value="<?php echo htmlspecialchars($size); ?>">
								                                    <label for="<?php echo htmlspecialchars($size); ?>"><?php echo htmlspecialchars($size); ?></label>
								                                <?php endforeach; ?>
                                                                <br>
                                                                <label for="quantity">Quantity :</label>
                                                                <input type="number" id="quantity" name="quantity" min="1" max="1000">
                                                                <br>   
                                                                <div class="row justify-content-center">
                                                                    <div class="col-sm-6 btna">
                                                                        <button type="submit" name="addbag<?php echo $product['product_id'] ?>" class="btn btn-primary">add to bag</button>
                                                                    </div>
                                                                </div>                    
                                                            </form>    
                                                            <?php
                                                                
                                                                if(isset($_POST['addbag'.$product['product_id'].''])){
                                                                    if(isset($_COOKIE['userid'])){
                                                                        $pid=$product['product_id'];
                                                                        $size=$_POST['size'];
                                                                        $quantity=$_POST['quantity'];
                                                                        $userid=$_COOKIE['userid'];
                                                                            $sql="INSERT INTO basket(user_id,product_id,size,quantity) VALUES ('$userid','$pid','$size','$quantity') ";     
                                                                            $result=mysqli_query($conn,$sql);
                                                                           
                                                                        
                                                                    }
                                                                    else{
                                                                        header('Location:login.html');
                                                                    }
                                                                }
                                                                
                                                                    
                                                            
                                                            
                                                            ?>                                     
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="fluid-container modal-footer">
                                                    <div class="row justify-content-center">
                                                        <div class="col-sm-6 btna">
                                                            <button type="button" class="btn btn-primary">add to bag</button>
                                                        </div>
                                                        <div class="col-sm-6 btna">
                                                            <button type="button" class="btn btn-primary">buy now</button>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                       
                                <?php endforeach; ?>
                                        
                            </div>         
                        </div>
                    
                    </div>
                    <div id="arrow">
                
                    <?php for ($page=1;$page<=$number_of_pages;$page++) {?>
                        <a class="btn btn-danger" href="shopping.php?category=<?php echo $category; ?>&&sub_category=<?php echo $sub_category; ?>&&page=<?php echo $page; ?>"> <?php echo $page; ?></a>                        
                    <?php } ;?>
                        
                    </div>
                </main>
            </div>
        </div>
        
    </div>
    </div>


    <br><br><br>
    <a href="add_product.php">add product</a>

    <?php include('repetetive/footer.php'); ?>
</html>
