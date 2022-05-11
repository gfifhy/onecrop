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
    //check if id has a value
	if(isset($_GET['id'])){
		//obtaining the id value and store it in a variable
		$cart_id = $_GET['id'];
		$product_id = selectData("cart", "product_id", "cart_id", $cart_id);
		$quantity_removed = selectData("cart", "quantity", "cart_id", $cart_id);
		$original_quantity = selectData("products", "stock", "product_id", $product_id);
		$new_quantity = $original_quantity + $quantity_removed;
		//update the new value of stock.
		$query = "UPDATE `products` SET `stock` = '". $new_quantity ."' WHERE `product_id` = '".$product_id."'";
		$result = $conn->query($query);
		if($result){

			$result = $conn->query("DELETE FROM cart WHERE cart_id = '$cart_id'");
			header("location: cart.php");
		}
		else {
			echo "<br>error!";
		}
		
	}






?>