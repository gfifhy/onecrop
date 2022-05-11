<?php
    session_start();

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
            
        }


    }
?>






<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Order</title>
	<link rel="icon" href="style/images/logo-center.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="style/uikit.min.css" />
	   <link rel="stylesheet" type="text/css" href="style/style.css">
	<script src="js/uikit.min.js"></script>
	<script src="js/uikit-icons.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="js/app.js" type="text/javascript"></script>
	<style type="text/css">
		.uk-table>tbody>tr>td:last-child, .uk-table>thead>tr>th:last-child{
			text-align: center !important;

		}
		.uk-table>tbody>tr:last-child>td{
			font-family: gotham !important;
			color: black;
		}
		.uk-table>tbody>tr>td{
			color: #666 !important;

		}
		.uk-table>tbody>tr:last-child>td:nth-child(2){
			text-align: center; !important
		}
	</style>

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
	<div class="product-panel">
		<div class="uk-flex-center" uk-grid>
			<div class="uk-width-3-4@m  card" >
				<table class="uk-table uk-table-divider">
				    <thead>
				        <tr>
				            <th>Product Name</th>
				            <th>Status</th>
				            <th>Quantity</th>
				            <th>Total</th>
				        </tr>
				    </thead>
				    <tbody>
				        <tr>
				        	<?php 
						        $result = $conn->query("SELECT * FROM `orders` WHERE buyer_id = '$user_id'");
					        	while($row = $result->fetch_array()){
					        		echo "<tr>";
					        		echo "<td>" . $row['product_name'] . "</td>";
					        		echo "<td>" .  ucfirst($row['status']). " </td>";
					        		echo "<td>" . $row['quantity'] . "</td>";
					        		echo "<td>P " . $row['grand_total'] . ".00</td>";
					        		echo "</tr>";
					        	}
					        ?>
				        </tr>
				    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>

	
</body>
	
</html>