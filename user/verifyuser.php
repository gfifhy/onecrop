<?php
session_start();
include '../include/functions.php';

if(!empty($_GET['code'])){
	$code = $_GET['code'];
	$email = $_SESSION['user_email'];
	if(rowNumber1("seller", "email",$email)>0){
	    $_SESSION['user_type'] = "Farmer";
	}
	if(rowNumber1("buyer", "email", $email)>0){
	    $_SESSION['user_type'] = "Buyer";
	}


	if($_SESSION['user_type'] == "Farmer"){
		if(!checkDuplicate1("seller","vcode", $code)){
			$_SESSION['errormessage'] = $_SESSION['errormessage'] . "Invalid link famer";
		}
		$result = $conn->query("UPDATE `seller` SET verified = 'Yes' WHERE vcode = '$code'");
	}

	if($_SESSION['user_type'] == "Buyer"){
		if(!checkDuplicate1("buyer","vcode", $code)){
			$_SESSION['errormessage'] = "Invalid link";
		}
		$result = $conn->query("UPDATE `buyer` SET verified = 'Yes' WHERE vcode = '$code'");
	}

}
else {
	$_SESSION['errormessage'] = "Invalid link";
}
header("location: verify.php");
?>












