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
    //checking if submit button has been clicked
	if(isset($_POST['submit'])){
		//declaring image 2 to 5.
		$image2 = "";
		$image3 = "";
		$image4 = "";
		$image5 = "";
		//getting the user id
		$seller_id = selectData("seller", "seller_id", "email", $email);
		//getting the information from form
		$product_name = $conn->real_escape_string($_POST['product_name']);
		$description = $conn->real_escape_string($_POST['description']);
		$stock = $conn->real_escape_string($_POST['stock']);
		$category = $conn->real_escape_string($_POST['category']);
		$price= $conn->real_escape_string($_POST['price']);
		//upload file directory
		$uploaddir = '../uploads/images/';
		//check if the image is valid
		if( ($_FILES["cover_photo"]["type"] == "image/jpeg") || ($_FILES["cover_photo"]["type"] == "image/jpg") ||  ($_FILES["cover_photo"]["type"] == "image/png")){
			$temp = explode(".", $_FILES["cover_photo"]["name"]);
			$extension = end($temp);
			$newfilename = md5($user_id."cover".microtime()). "." . $extension;
			$cover_photo = $uploaddir . $newfilename;
			if (move_uploaded_file($_FILES["cover_photo"]["tmp_name"], $uploaddir . $newfilename)){} 
			else {
			    echo "Possible file upload attack!\n";
			}
		}
		else{
			echo "invalid image";
		}



		//check if the image is valid
		if( ($_FILES["image1"]["type"] == "image/jpeg") || ($_FILES["image1"]["type"] == "image/jpg") ||  ($_FILES["image1"]["type"] == "image/png")){
			$temp = explode(".", $_FILES["image1"]["name"]);
			$extension = end($temp);
			$newfilename = md5($user_id."1".microtime()). "." . $extension;
			$image1 = $uploaddir . $newfilename;
			if (move_uploaded_file($_FILES["image1"]["tmp_name"], $uploaddir . $newfilename)){} 
			else {
			    echo "Possible file upload attack!\n";
			}
		}
		else{
			echo "invalid image";
		}
		//check if the image is valid
		if(isset($_FILES["image2"])){
			if( ($_FILES["image2"]["type"] == "image/jpeg") || ($_FILES["image2"]["type"] == "image/jpg") ||  ($_FILES["image2"]["type"] == "image/png")){
				//split the filename and get the file extension.
				$temp = explode(".", $_FILES["image2"]["name"]);
				$extension = end($temp);
				//make a unique file name in every image.
				$newfilename = md5($user_id."2".microtime()). "." . $extension;
				$image2 = $uploaddir . $newfilename;
				//upload file
				if (move_uploaded_file($_FILES["image2"]["tmp_name"], $uploaddir . $newfilename)){} 
				else {
				    echo "Possible file upload attack!\n";
				}
			}
			else{
				echo "invalid image";
			}
		}
		else{
			$image2 = "";
		}
		//check if the image is valid
		if(isset($_FILES["image3"])){
			if( ($_FILES["image3"]["type"] == "image/jpeg") || ($_FILES["image3"]["type"] == "image/jpg") ||  ($_FILES["image3"]["type"] == "image/png")){
				$temp = explode(".", $_FILES["image3"]["name"]);
				$extension = end($temp);
				$newfilename = md5($user_id."3".microtime()). "." . $extension;
				$image3 = $uploaddir . $newfilename;
				if (move_uploaded_file($_FILES["image3"]["tmp_name"], $uploaddir . $newfilename)){} 
				else {
				    echo "Possible file upload attack!\n";
				}
			}
			else{
				echo "invalid image";
			}
		}
		else{
			$image3 = "";
		}

		//check if the image is valid
		if(isset($_FILES["image4"])){
			if( ($_FILES["image4"]["type"] == "image/jpeg") || ($_FILES["image4"]["type"] == "image/jpg") ||  ($_FILES["image4"]["type"] == "image/png")){
				$temp = explode(".", $_FILES["image4"]["name"]);
				$extension = end($temp);
				$newfilename = md5($user_id."4".microtime()). "." . $extension;
				$image4 = $uploaddir . $newfilename;
				if (move_uploaded_file($_FILES["image4"]["tmp_name"], $uploaddir . $newfilename)){} 
				else {
				    echo "Possible file upload attack!\n";
				}
			}
			else{
				echo "invalid image";
			}
		}
		else{
			$image4 = "";
		}

		//check if the image is valid
		if(isset($_FILES["image4"])){
			if( ($_FILES["image5"]["type"] == "image/jpeg") || ($_FILES["image5"]["type"] == "image/jpg") ||  ($_FILES["image5"]["type"] == "image/png")){
				$temp = explode(".", $_FILES["image5"]["name"]);
				$extension = end($temp);
				$newfilename = md5($user_id."5".microtime()). "." . $extension;
				$image5	 = $uploaddir . $newfilename;
				if (move_uploaded_file($_FILES["image5"]["tmp_name"], $uploaddir . $newfilename)){} 
				else {
				    echo "Possible file upload attack!\n";
				}
			}
			else{
				echo "invalid image";
			}
		}
		else{
			$image5 = "";
		}

		$result = $conn->query("INSERT INTO products(seller_id, product_name,product_description,stock,category,price,cover_photo,image1,image2,image3,image4,image5) VALUES('$seller_id', '$product_name', '$description', '$stock', '$category', '$price', '$cover_photo', '$image1', '$image2', '$image3', '$image4', '$image5')");


	header("location: product.php");
	}
?>





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add New Product</title>
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
            	<a href="product.php" class="off-canvas-sub-item">
            		All Products
          		</a>
          	</li>
          	<li>
            	<a href="new-product.php" class="off-canvas-sub-item-active">
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


<form method="post" enctype="multipart/form-data">
<div class="new-product-panel top-panel" id="basic">
	<div class="left-center" uk-grid>
		<div class="uk-width-3-4@m  card">
			<div class="uk-h4 font-bold uk-margin-medium-bottom">Basic Information</div>
				<div class="input-group">
					<label for="product_name">Product Name</label>
	            	<input type="text" name="product_name" required="">
            	</div>
            	<div class="input-group">
					<label for="description">Description</label>
	            	<textarea type="text" name="description" required="" class="text-area"> </textarea>
            	</div>
            	<div class="input-group uk-margin-bottom">
					<label for="category">Category</label>
	            	<select name="category" class="uk-select" id="form-stacked-select" required="">
						<option disabled selected value> -- select an option -- </option>
		                <option value="grain">Grain</option>
		                <option value="fruit">Fruit</option>
		                <option value="vegetable">Vegetable</option>
		            </select>
            	</div>
		</div>
	</div>
</div>
<div class="new-product-panel" id="sales">
	<div class="left-center" uk-grid>
		<div class="uk-width-3-4@m  card">
			<div class="uk-h4 font-bold uk-margin-medium-bottom">Sales Information</div>
				<div class="input-group">
					<label for="price">Price/kg</label>
	            	<span class="currency-sign">₱</span><input type="text" name="price" required="" class="width-60">
            	</div>
				<div class="input-group">
					<label for="stock">Stock (kgs)</label>
					<input type="text" name="stock" required="" class="width-60">
            	</div>
		</div>
	</div>
</div>
<div class="new-product-panel " id="media">
	<div class="left-center" uk-grid>
		<div class="uk-width-3-4@m  card">
			<div class="uk-h4 font-bold uk-margin-medium-bottom">Media Information</div>
				<div class="input-group">
					<label for="cover_photo">Cover Photo</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="cover_photo" required="">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
				<div class="input-group">
					<label for="cover-photo">Image 1</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="image1" required="">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
				<div class="input-group">
					<label for="cover-photo">Image 2</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="image2">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
				<div class="input-group">
					<label for="cover-photo">Image 3</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="image3">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
				<div class="input-group">
					<label for="cover-photo">Image 4</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="image4">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
				<div class="input-group">
					<label for="cover-photo">Image 5</label>
					<div uk-form-custom="target: true">
			            <input type="file" name="image5">
			            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        			</div>
            	</div>
		</div>
	</div>

</div>
<div class="new-product-panel uk-margin-xlarge-bottom publish" id="media">
	<div class="left-center" uk-grid>
		<div class="uk-width-3-4@m uk-first-column uk-padding-remove">
			<input type="submit" value="Publish" name="submit" class="publish">
		</div>
	</div>
</div>

</form>
<div class="fixed-tab">
    <ul class="uk-tab-right" uk-tab uk-scrollspy-nav="closest: li; scroll: true; offset: 140;">
        <li><a href="#basic">Basic Information</a></li>
        <li><a href="#sales">Sales Information</a></li>
        <li><a href="#media">Media Management</a></li>
    </ul>
</div>

</html>