<?php
	session_start();

	include '../include/conn.php';
	include '../include/functions.php';
	//REDIRECT
	if(empty($_GET['id'])){
		header("location: index.php"); 
	}
	else{
		$product_id = $_GET['id'];
	}
	if(isset($_SESSION['user_email'])){
        $email = $_SESSION['user_email'];
        if(rowNumber1("buyer", "email", $email)>0){
            $_SESSION['user_type'] = "Buyer";
        }
        if(rowNumber1("seller", "email",$email)>0){
            $_SESSION['user_type'] = "Farmer";
        }

        if($_SESSION['user_type'] == "Farmer"){
            header('location: ../seller');
            if(selectData("seller","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
            
        }
        else if($_SESSION['user_type'] == "Buyer"){
        	$user_id = selectData("buyer", "buyer_id", "email", $email);
            if(selectData("buyer","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
        }
        
        else{
            $_SESSION['othererror'] = "Log in first";
            header("location: ../user/"); 
            $user_id = selectData("buyer", "id", "email", $email);
        }
    }


    //selecting all the image and general information from database 
	$image1 = selectData("products", "image1", "product_id", $product_id);
	$image2 = selectData("products", "image2", "product_id", $product_id);
	$image3 = selectData("products", "image3", "product_id", $product_id);
	$image4 = selectData("products", "image4", "product_id", $product_id);
	$image5 = selectData("products", "image5", "product_id", $product_id);
	$product_name = selectData("products", "product_name", "product_id", $product_id);
	$price = selectData("products", "price", "product_id", $product_id);
	$description = selectData("products", "product_description", "product_id", $product_id);
	$stock = selectData("products", "stock", "product_id", $product_id);
	
	//adding to cart 
	if(isset($_POST['add-to-cart'])){
		//Check if the user's input exceeds the amount of stock available.
		if($_POST['quantity'] > $stock ){
			$_SESSION['order_error'] = "You can't buy more than the stock provided.";
		}
		else{
			//putting the data into a variable
			$quantity =$_POST['quantity'];
			$new_stock = $stock - $quantity;
			//updating the amount of stock available.
			$result1 = $conn->query("UPDATE products SET stock='$new_stock' WHERE product_id='$product_id'");
			$result2 = $conn->query("SELECT quantity FROM cart  WHERE buyer_id='$user_id' AND product_id='$product_id'");
			if($result2->num_rows > 0){
				$row = $result2 -> fetch_assoc();
				$cart_quantity = $row['quantity'];
				$new_quantity = $cart_quantity+$quantity;
				$update_cart_query = $conn->query("UPDATE cart SET quantity='$new_quantity' WHERE product_id='$product_id'");
			}
			else{
				$result = $conn->query("INSERT INTO cart(buyer_id, product_id,quantity) VALUES('$user_id', '$product_id','$quantity')");
			}
			header("location: cart.php");

		}
	}

?>







<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Information</title>
	<link rel="icon" href="style/images/logo-center.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="style/uikit.min.css" />
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="js/app.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
	<nav class="fixed-navbar scrolled" id="scrolled"  uk-navbar> 
		<div class="uk-navbar-left">
			<!-- LOGO -->
			<a href="">
				<div class="container">
					<img src="style/images/logo-circle.png" class="logo" alt="logo">
					<div class="line"></div>
					<div class="name"> ONE<span>CROP</span></div>
				</div>
			</a>
		</div>
		<div class="uk-navbar-center">
			<ul class="uk-navbar-nav">
				<li><a href="../">Home</a></li>
				<li class=""><a href="index.php">Marketplace</a></li>
				<li>
					<a href="#">Category</a>
					<div class="uk-navbar-dropdown">
						<ul class="uk-nav uk-navbar-dropdown-nav">
							<li><a href="#">Grain</a></li>
							<li><a href="#">Fruits</a></li>
							<li><a href="#">Vegetables</a></li>
						</ul>
					</div>
				</li>
				<li>
					<a href="orders.php">My Purchase</a>
				</li>
			</ul>
		</div>

		<div class="uk-navbar-right uk-margin-right">
			<div class="account-dropdown">
			   <a href="account.php">
				<svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav" viewBox="0 0 64 64"><path class="cls-1" d="M35 39.84v-2.53c3.3-1.91 6-6.66 6-11.41 0-7.63 0-13.82-9-13.82s-9 6.19-9 13.82c0 4.75 2.7 9.51 6 11.41v2.53c-10.18.85-18 6-18 12.16h42c0-6.19-7.82-11.31-18-12.16z"></path></svg>
				</a>
				<ul class="dropdown-content">
					<li>
						<a href="profile.php">
							<span uk-icon="icon: cog;" class="dropdown-icon"></span>
							<span>Profile</span>
						</a>
					</li>
					<li>
						<a href="../logout.php">
							<span uk-icon="icon: sign-out;" class="dropdown-icon"></span>
							<span>Logout</span>
						</a>
					</li>
				</ul>
			</div>
			
			<a href="">
				<svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav"viewBox="0 0 64 64"><path class="cls-1" d="M47.16 28.58A18.58 18.58 0 1 1 28.58 10a18.58 18.58 0 0 1 18.58 18.58zM54 54L41.94 42"></path></svg>
			</a>
			<a href="cart.php">
				<svg aria-hidden="true" focusable="false" role="presentation" class="icon-nav" viewBox="0 0 64 64"><path class="cls-1" d="M14 17.44h46.79l-7.94 25.61H20.96l-9.65-35.1H3"></path><circle cx="27" cy="53" r="2"></circle><circle cx="47" cy="53" r="2"></circle></svg>
			</a>
		</div>
	</nav>


	<div class="uk-flex-center top" uk-grid>
		<div class="uk-width-3-4@s  card uk-flex">
			<div class="uk-width-1-2">
				<div class="slider">
					<?php
					if(!empty($image1)){
						echo "<div><img src=\"".$image1."\" alt=\"\"></div>";
					}
					if(!empty($image2)){
						echo "<div><img src=\"".$image2."\" alt=\"\"></div>";
					}
					if(!empty($image3)){
						echo "<div><img src=\"".$image3."\" alt=\"\"></div>";
					}
					if(!empty($image4)){
						echo "<div><img src=\"".$image4."\" alt=\"\"></div>";
					}
					if(!empty($image5)){
						echo "<div><img src=\"".$image5."\" alt=\"\"></div>";
					}

					?>
				</div>
				<div class="slider-nav">
					 <?php
						if(!empty($image1)){
							echo "<div><img src=\"".$image1."\" alt=\"\"></div>";
						}
						if(!empty($image2)){
							echo "<div><img src=\"".$image2."\" alt=\"\"></div>";
						}
						if(!empty($image3)){
							echo "<div><img src=\"".$image3."\" alt=\"\"></div>";
						}
						if(!empty($image4)){
							echo "<div><img src=\"".$image4."\" alt=\"\"></div>";
						}
						if(!empty($image5)){
							echo "<div><img src=\"".$image5."\" alt=\"\"></div>";
						}

					?>
				</div>
			</div>
			<div class="uk-width-1-2 right-element">
				<div class="header-header">
					<div class="header-product-name">
						
						<?php echo $product_name ?>
					</div>

					<div class="header-price">
						<span>₱</span><?php echo $price ?>.00
					</div>
				</div>
				<form action="" method="post">
					<div class="header-form">
						<div class="input-group">
	    				<?php
	    					if(isset($_SESSION['order_error'])){

	    						echo "<div class=\"uk-alert-danger\" uk-alert><a class=\"uk-alert-close\" uk-close></a><p style=\"font-size: 14px;\">".$_SESSION['order_error'];
							echo"</p></div>";
							unset($_SESSION['order_error']);
	    					}
	    				?>
						<label for="quantity">Quantity (kg)</label>
						<input type="text" name="quantity" required=""> (<?php echo $stock ?> kg/s left)
						</div>
						<input type="submit" value="Add To Cart" name="add-to-cart">
						<div class="product-details">
							<div class="header-details">Product Details</div>
							<div class="details"><?php echo $description ?></div>
						</div>      
					</div>
				</form>
			</div>
		</div>
	</div>
	<script>
		//Slick slider initialize
		$('.slider').slick({
			arrows: false,
			dots: false,
			infinite: true,
			speed: 500,
			autoplay: false,
			autoplaySpeed: 3000,
			slidesToShow: 1,
			slidesToScroll: 1
		});
		//On click of slider-nav childern,
		//Slick slider navigate to the respective index.
		$('.slider-nav > div').click(function() {
			$('.slider').slick('slickGoTo', $(this).index());
		})
	</script>
</body>

</html>