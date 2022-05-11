<?php
	session_start();
	//includes
	include '../include/conn.php';
	include '../include/functions.php';
	//REDIRECT
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



	

	$new_quantity = "";	
	//if the checkout button has been clicked
	if(isset($_POST['checkout'])){
	//obtain the user's cart information from the cart table
	$result = $conn->query("SELECT * FROM `cart` WHERE buyer_id = '$user_id'");
		//We can get the information in each query return using a loop.
		while($row = $result->fetch_array()){
			$product_id = $row['product_id'];
			$result_diff_table = $conn->query("SELECT * FROM products WHERE product_id = '$product_id'");
			//Using again a loop, we can obtain the information of the product from the product table. 
			while ($row1 = $result_diff_table->fetch_array()) {
				$cart_id = $row['cart_id'];
				$quantity = $row['quantity'];
				$buyer_id = $user_id;
				$seller_id = selectData("products", "seller_id", "product_id", $product_id);
				$status = "To ship";
				$payment_type = "COD";
				date_default_timezone_set("Asia/Manila");
				$order_creation_date = date("Y-m-d h:i:s");
				$product_name =  selectData("products", "product_name", "product_id", $product_id);;
				$product_price = selectData("products", "price", "product_id", $product_id);
				$product_subtotal = intval($quantity) * intval($product_price);
				//default shipping price
				$shipping_price = 90;
				$grand_total = $product_subtotal + $shipping_price;
				$receiver_name = selectData("buyer", "first_name", "buyer_id", $user_id). " " . selectData("buyer", "last_name", "buyer_id", $user_id);
				$buyer_name =  $receiver_name;
				//getting the data of user from buyer table
				$phone_number = selectData("buyer", "cellphone", "buyer_id", $user_id);
				$address = selectData("buyer", "address", "buyer_id", $user_id) ;
				//inserting the cart information to order table
				$result_insert_order = $conn->query("INSERT INTO orders (buyer_id, seller_id, status, payment_type, order_creation_date, product_name, product_id, quantity, product_price, product_subtotal, shipping_price, grand_total, buyer_name, receiver_name, phone_number, delivery_address) VALUES ('$buyer_id', '$seller_id', '$status', '$payment_type', '$order_creation_date', '$product_name', '$product_id', '$quantity', '$product_price', '$product_subtotal', '$shipping_price', '$grand_total', '$buyer_name', '$receiver_name', '$phone_number', '$address')");
				//then removing them from the cart.
				$result_delete_cart = $conn->query("DELETE FROM cart WHERE cart_id = '$cart_id'");

			}
		}



	}








?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cart</title>
	<link rel="icon" href="style/images/logo-center.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="style/uikit.min.css" />
	   <link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="js/app.js" type="text/javascript"></script>

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
	<div class="top">
		<div class="card top">
	<div class="uk-flex-center" uk-grid>
		<div class="uk-width-3-4@m  card">
		  <div class="uk-h2 font-bold uk-margin-medium-bottom">CART <?php
		 

		  ?></div>
			<table class="uk-table uk-table-divider">
				<thead>
					<tr>
						<th></th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$result = $conn->query("SELECT * FROM cart WHERE `buyer_id` = '$user_id'");
					$grand_total = 0;
						while($row = $result->fetch_array()){
							$product_id = $row['product_id'];
							$result_diff_table = $conn->query("SELECT * FROM products WHERE product_id = '$product_id'");
							
							while ($row1 = $result_diff_table->fetch_array()) {

								echo "<tr><td><div class=\"uk-flex\">";
								echo "<img src=\"".$row1['cover_photo']."\">";
								echo "<div class=\"product-info-cart\"><div class=\"product-name-cart\">".$row1['product_name'];
								echo "</div><div class=\"product-price-cart\"><span>₱</span>".$row1['price']. ".00</div>";
								echo "<a href=\"delete-cart.php?id=". $row['cart_id']."\" class=\"uk-button-danger\">Remove</a>";
								echo "</div></div></td><td><form method=\"post\"> <input type=\"text\" name=\"quantity\"  value=\"".$row['quantity']." Kg\" disabled><input type=\"hidden\"name=\"cart_id\" value=\"".$row['cart_id']." \">";
								echo "</form></td><td><div class=\"total\"><span>₱ </span>".$row['quantity']*$row1['price'] .".00</div></div></td></tr>";
								$grand_total = $grand_total + $row['quantity']*$row1['price'];
							}
							
						}
					?>
							

								
								
							
					<tr>
						<td></td>
						<td>Subtotal</td>
						<td><span class="currency">₱ </span><?php echo $grand_total;?>.00</td>
					</tr>
				</tbody>
			</table>
			<form method="post">
				<div class="checkout-buttons">
					<div class="terms-and-condition">
						<label class="terms "><input class="uk-checkbox" type="checkbox" required=""> I AGREE WITH THE TERMS AND CONDITION</label>
					</div>
					
				<input type="submit" value="Checkout" name="checkout" class="bottom-margin" style="width: 170px !important; padding: 20px 10px; margin-top: 30px;">
			</form>

		</div>
	</div>
</div>
	</div>

	
</body>
	
</html>