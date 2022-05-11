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
    
	if(isset($_GET['product_id'])){
		$product_id = $_GET['product_id'];
		$result = $conn->query("DELETE FROM products WHERE product_id = '$product_id'");
		header("location: product.php");
	}
?>