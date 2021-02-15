<?php
    if(isset($_POST['logout'])){
       
        setcookie('userid','',time()-700000);
        session_destroy();
        header('Location:login.html');
    }
    include('repetetive/conn.php');

$reference = $category = $sub_category = $name = $size = $price = $quantity = $path = $keyWords = '';
$errors = array('reference' => '', 'category' => '', 'sub_category' => '', 'name' => '', 'size' => '', 'price' => '', 'path' => '', 'keyWords' => '');
	
	if(isset($_POST['submit'])){
	
		if(empty($_POST['reference'])){
			$errors['reference'] = 'A reference is required';
		} else{
			$reference = $_POST['reference'];
			if(!is_numeric($reference)){
				$errors['reference'] = 'Reference must be numbers only';
			}
        }


        
        if(empty($_POST['category'])){
			$errors['category'] = 'A category is required';
		} else{
			$category = $_POST['category'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $category)){
				$errors['category'] = 'invalid category, enter "Women s fashion" or "Men s fashion"';
			}
        } 

        if(empty($_POST['sub_category'])){
			$errors['sub_category'] = 'A sub category is required';
		} else{
			$sub_category = $_POST['sub_category'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $sub_category)){
				$errors['sub_category'] = 'Category must be letters and spaces only "shoes"or"clothings"';
			}
        } 

        
		if(empty($_POST['name'])){
			$errors['name'] = 'A name is required';
		} else{
			$name = $_POST['name'];
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
				$errors['name'] = 'Name must be letters and spaces only';
			}
		}
		
		if(empty($_POST['size'])){
			$errors['size'] = 'At least one size must be indicated';
		} else{
			$size = $_POST['size'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $size)){
				$errors['size'] = 'Sizes must be a comma separated list';
			}
        }

        if(empty($_POST['price'])){
			$errors['price'] = 'Price must be indicated';
		} else{
			$price = $_POST['price'];
			if(!is_numeric($price)){
				$errors['price'] = 'Price must be a number separated by .';
			}
        }

        if(empty($_POST['path'])){
			$errors['path'] = 'A path is required';
		} else{
			$path = 'images/'.$_POST['path'];
        } 
        


        if(empty($_POST['keyWords'])){
			$errors['keyWords'] = 'Enter one key word at least';
		} else{
			$keyWords = $_POST['keyWords'];
			if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $keyWords)){
				$errors['keyWords'] = 'Key words must be a comma separated list';
			}
        }
        
        $quantity = $_POST['quantity'];


		if(array_filter($errors)){
			// echo 'errors in form';
		} else {
            //echo 'form is valid';
            
			// header('Location: index.php');
            
            // escape sql chars
			$reference = $_POST['reference'];
			$category =$_POST['category'];
            $sub_category= $_POST['sub_category'];
            $name =$_POST['name'];
            $size = $_POST['size'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];
            $path = 'images/'.$_POST['path'];
            $keyWords =$_POST['keyWords'];


            
			// create sql
            $q1="SELECT category_id from category where category_name='".$category."'";
            $q2="SELECT sub_category_id from subcat where sub_category='".$sub_category."'";
            $result1=mysqli_query($conn, $q1);
            $result2=mysqli_query($conn, $q2);
            $q11 = mysqli_fetch_assoc($result1);
            $q22 = mysqli_fetch_assoc($result2);
            print_r($q11);
			$sql = "INSERT INTO products(product_id, category_id, sub_category_id, product_name, keyo, price, photo, quantity, size) VALUES('$reference' ,".$q11['category_id']." ,".$q22['sub_category_id'].",'$name','$keyWords','$price','$path','$quantity','$size')";

			// save to db and check
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: admin_dashboard.php');
			} else {
				echo 'query error: '. mysqli_error($conn);
			}


		}

	} // end POST check
    

?>