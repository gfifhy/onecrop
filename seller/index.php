<?php
	include '../include/conn.php';
	include '../include/functions.php';
	session_start();
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
            $user_id = selectData("seller", "seller_id", "email", $email);
			$firstname = selectData("seller", "first_name", "email", $email);
			$lastname = selectData("seller", "last_name", "email", $email);
			if(selectData("seller","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
        }
        else if($_SESSION['user_type'] == "Buyer"){
        	header('location: ../marketplace');
        	
        }
        
        else{
            $_SESSION['othererror'] = "Log in first";
            header("location: ../user/"); 
        }
    }







?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="icon" href="style/images/logo-center.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="style/uikit.min.css" />
	   <link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="js/app.js" type="text/javascript"></script>

<body>
</body>
	<div class="pre-loader">
		
	</div>
	<nav class="fixed-navbar scrolled" id="scrolled"  uk-navbar> 
		<div class="uk-navbar-left">
			<!-- LOGO -->
			<a href="../seller">
				<div class="container">
					<img src="style/images/logo-circle.png" class="logo" alt="logo">
					<div class="line"></div>
					<div class="name"> ONE<span>CROP</span></div>
				</div>
			</a>
		</div>


		<div class="uk-navbar-right uk-margin-right">	
			<div class="uk-inline uk-margin-right">
				<div class="info-box account-info-box" type="button">
				<span uk-icon="icon: user;"  class="icon account-icon"></span>
				<span class="account-name"> <?php echo ucfirst($firstname) ." ". ucfirst($lastname);?></span>
				</div>
				<div uk-dropdown="mode: click;">
					<ul class="uk-nav uk-dropdown-nav">
						<li>
							<a href="#">
								<span uk-icon="icon: cog;" class="dropdown-icon"></span>
								<span>Shop Profile</span>
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
			</div>
			<div class="uk-inline">
				<div class="info-box">
					<span uk-icon="icon: comments; ratio: 1.176;" class="icon message-icon"></span>
					<span class="account-name"> Messages</span>
				</div>
			</div>
			<div class="menu">
				<span uk-toggle="target: #offcanvas-nav" uk-icon="icon: menu; ratio: 1.5" class="menu-icon"></span> 
			</div>
		</div>
	</nav>


<!-- OFF CANVAS CONTENT -->
<div id="offcanvas-nav" class="offcanvas" uk-offcanvas="overlay: true; mode: slide;" >
	<div class="uk-offcanvas-bar">

		<ul class="uk-nav uk-nav-default">
			<div class="uk-flex">
				<img src="style/images/overview.png" class="off-canvas-menu-icon">
				<li class="uk-nav-header font-bold">Overview</li>
			</div>
			<li>
            	<a href="../seller" class="off-canvas-sub-item-active">
            		Overview
          		</a>
          	</li>
			<div class="uk-flex">
				<img src="style/images/orders.png" class="off-canvas-menu-icon">
				<li class="uk-nav-header font-bold">ORDERS</li>
			</div>
            <li>
            	<a href="order.php" class="off-canvas-sub-item">
            		All Orders
          		</a>
          	</li>
          	<div class="uk-flex">
				<img src="style/images/product.png" class="off-canvas-menu-icon">
				<li class="uk-nav-header font-bold">PRODUCTS</li>
			</div>
            <li>
            	<a href="product.php" class="off-canvas-sub-item">
            		All Products
          		</a>
          	</li>
          	<li>
            	<a href="new-product.php" class="off-canvas-sub-item">
            		Add New Product
          		</a>
          	</li>
          	<div class="uk-flex">
				<img src="style/images/finance.png" class="off-canvas-menu-icon">
				<li class="uk-nav-header font-bold">FINANCE</li>
			</div>
            <li>
            	<a href="#" class="off-canvas-sub-item-disabled uk-disabled">
            		My Balance
          		</a>
          	</li>
          	<li>
            	<a href="#" class="off-canvas-sub-item-disabled uk-disabled">
            		Bank Accounts
          		</a>
          	</li>
          	<li>
            	<a href="#" class="off-canvas-sub-item-disabled uk-disabled" >
            		Payment Settings
          		</a>
          	</li>
          	<div class="uk-flex">
				<img src="style/images/settings.png" class="off-canvas-menu-icon">
				<li class="uk-nav-header font-bold">SETTINGS</li>
			</div>
            <li>
            	<a href="#" class="off-canvas-sub-item-disabled uk-disabled">
            		My Addresses
          		</a>
          	</li>
          	<li>
            	<a href="#" class="off-canvas-sub-item">
            		Shop Settings
          		</a>
          	</li>

			
		</ul>

	</div>
</div>

<div class="product-panel">
	<div class="uk-flex-center" uk-grid>
		<div class="uk-width-3-4@m  card" >
			<div class="uk-text-left">
				<div class="uk-h3 font-bold uk-margin-remove-bottom">Overview </div>
				<div class="uk-margin-remove-top uk-h4 font-light uk-margin-bottom">Things you need to do</div>
			</div>
			<div class="uk-flex-center uk-text-center uk-padding"  uk-grid>
				<div class="uk-width-1-4@m">
					<a href="order.php">
						<div class="overview-info bar">
							<div class="uk-h5 uk-margin-remove font-bold uk-text-primary">
								<?php echo rowNumber("orders", "seller_id", $user_id, "payment_type", "COD"); ?>
							</div>
							<div class="uk-h6 uk-margin-remove font-light ">Unpaid</div>
						</div>
					</a>
				</div>
				<div class="uk-width-1-4@m">
					<a href="order.php">
						<div class="overview-info bar">
							<div class="uk-h5 uk-margin-remove font-bold uk-text-primary">
								<?php echo rowNumber("orders", "seller_id", $user_id, "status", "To-Ship"); ?>
							</div>
							<div class="uk-h6 uk-margin-remove font-light ">To-Process Shipment</div>
						</div>
					</a>
				</div>
				<div class="uk-width-1-4@m">
					<a href="order.php">
						<div class="overview-info bar">
							<div class="uk-h5 uk-margin-remove font-bold uk-text-primary">
								<?php echo rowNumber("orders", "seller_id", $user_id, "status", "shipping"); ?>
							</div>
							<div class="uk-h6 uk-margin-remove font-light ">Shipping</div>
						</div>
					</a>
				</div>
				<div class="uk-width-1-4@m">
					<a href="order.php">
						<div class="overview-info">
							<div class="uk-h5 uk-margin-remove font-bold uk-text-primary">
								<?php echo rowNumber("products", "seller_id", $user_id, "stock", "0"); ?>
							</div>
							<div class="uk-h6 uk-margin-remove font-light "> Sold-Out Products</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	
</div>

</html>