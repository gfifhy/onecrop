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
        }
        else if($_SESSION['user_type'] == "Buyer"){
        	header('location: ../marketplace');
        	if(selectData("seller","verified", "email" , $email) == "No"){
                header('location: ../user/verify.php');
            }
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
	<title>Product</title>
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
				<a href="../seller" class="off-canvas-sub-item">
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
				<a href="product.php" class="off-canvas-sub-item-active">
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
			<ul uk-tab uk-switcher="animation: uk-animation-fade; connect: .switcher-container; ">
				<li><a href="#">All</a></li>
			</ul>
			<ul class="uk-switcher uk-margin switcher-container">
				<li class="uk-animation-fade">
					<div class="product-list-panel">
						<div class="product-info uk-flex">
							<div class="uk-h3 font-bold uk-margin-remove-bottom product-header">
								<?php
								if(isset($_GET['search'])){
									$query =  "SELECT * FROM products WHERE product_name LIKE '%". $_GET['search'] ."%'";

									$result = $conn->query($query);
									if(mysqli_num_rows($result) <= 0){
										$row = $result->num_rows;
										echo $row;
										echo " Results Found</div>";
									}
									else{
										//Pang plural lang hehe
										if(mysqli_num_rows($result) < 2){
											$row = $result->num_rows;
											echo $row;
											echo " Result Found</div>";
										}
										else{
											$row = $result->num_rows;
											echo $row;
											echo " Results Found</div>";
										}
										
									}

								}
								else{
									$result = $conn->query("SELECT * FROM products WHERE seller_id='$user_id'");
									$row = $result->num_rows;
									echo $row;
									echo " Product/s</div>";
								}
									
								?>


							 
							<div class="uk-margin-auto-left uk-flex uk-flex-middle">
								<a class="uk-button uk-button-default add-button" href="new-product.php">
									<svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="plus"><rect x="9" y="1" width="1" height="17"></rect><rect x="1" y="9" width="17" height="1"></rect></svg>
									Add New Product

								</a>
								<form class="uk-search uk-search-default" method="get">
									<span href="" class="uk-search-icon-flip" uk-search-icon></span>
										<input class="uk-search-input" type="search" name="search" placeholder="Search">
								</form>
							</div>
						</div>
						
					</div>

					<table class="uk-table uk-table-divider info-table">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Price</th>
								<th>Stock</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							<?php
								if(isset($_GET['search'])){
									$query =  "SELECT * FROM products WHERE product_name LIKE '%". $_GET['search'] ."%'";

									$result = $conn->query($query);
									if(mysqli_num_rows($result) <= 0){
										echo "<tr>";
										echo "<td colspan=\"4\">";
										echo "<div style=\"font-size: 1.7em; margin-top: 30px; display: flex; justify-content:center; width:100%;\">No Results Found :< </div>";
										echo "</tr>";
										echo "</td>";
									}
									while($row = $result->fetch_array()){
										echo "<tr>";
										echo "<td>" . $row['product_name'] . "</td>";
										echo "<td>P " . $row['price'] . ".00 </td>";
										echo "<td>" . ucfirst($row['stock']) . "</td>";
										echo "<td>";
										echo "<a href=\"edit.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: file-edit; ratio: 1.1;\"></a>";
										echo "<a href=\"delete.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: trash; ratio: 1.1;\"></a>";
										echo "</td>";
										echo "</tr>";
									}
								}
								else{
									$result = $conn->query("SELECT * FROM products WHERE seller_id='$user_id' ORDER BY product_name");
									while($row = $result->fetch_array()){
										echo "<tr>";
										echo "<td>" . $row['product_name'] . "</td>";
										echo "<td>P " . $row['price'] . ".00 </td>";
										echo "<td>" . ucfirst($row['stock']) . "</td>";
										echo "<td>";
										echo "<a href=\"edit.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: file-edit; ratio: 1.1;\"></a>";
										echo "<a href=\"delete.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: trash; ratio: 1.1;\"></a>";
										echo "</td>";
										echo "</tr>";

									}
								}
								

								
							?>
						</tbody>
					</table>
				</li>
				<!--
					<li class="uk-animation-fade">
						<div class="product-list-panel">
							<div class="product-info uk-flex">
								<div class="uk-h3 font-bold uk-margin-remove-bottom product-header">0 Product/s</div>
								<div class="uk-margin-auto-left"> 
									<a class="uk-button uk-button-default add-button" href="new-product.php">
										<svg width="18" height="18" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" data-svg="plus"><rect x="9" y="1" width="1" height="17"></rect><rect x="1" y="9" width="17" height="1"></rect></svg>
										Add New Product
									</a>
								</div>
							</div>
							
						</div>
						
						<table class="uk-table uk-table-divider info-table">
							<thead>
								<tr>
									<th>Product Name</th>
									<th>Price</th>
									<th>Stock</th>
									<th>Options</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									/*$result = $conn->query("SELECT * FROM products WHERE seller_id='$user_id' AND stock='0'");
									while($row = $result->fetch_array()){
										echo "<tr>";
										echo "<td>" . $row['product_name'] . "</td>";
										echo "<td> P " . $row['price'] . ".00</td>";
										echo "<td>" . ucfirst($row['stock']) . "</td>";
										echo "<td>";
										echo "<a href=\"edit.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: file-edit; ratio: 1.1;\"></a>";
										echo "<a href=\"delete.php?product_id=".$row['product_id']."\"class=\"uk-margin-small-right\" uk-icon=\"icon: trash; ratio: 1.1;\"></a>";
										echo "</td>";
										echo "</tr>";
			
									}
									*/
								?>
							</tbody>
						</table>
						
					</li>
				-->
				
			</ul>

		</div>
	</div>
</div>


</html> 