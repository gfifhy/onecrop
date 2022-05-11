<?php
	include 'conn.php';

	//updates data. Arguments: Table name, column name, column identifier, and data identifier are the arguments. This function returns a boolean value. to determine whether or not the query was successful
	function updateData($tbl_name, $col_name, $new_data, $col_identifier, $data_identifier){
		global $conn;
		//Creating a query
		$result = $conn->query("UPDATE '$tbl_name' SET '$col_name' = '$new_data' WHERE '$col_identifier' = '$data_identifier'");
		//returning the result of the query whether successful or not.
		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	//Insert user information in table. 
	function insertUser ($tbl_name, $first_name, $last_name, $email, $cellphone, $address, $password, $vcode){
		global $conn;
		$result = $conn->query("INSERT INTO `$tbl_name`(`first_name`, `last_name`, `email`, `cellphone`, `address`, `password`, `vcode`, `verified`) VALUES('$first_name', '$last_name', '$email', '$cellphone', '$address', '$password', '$vcode','No') ");

		if($result){
			return true;
		}
		else{
			return false;
		}
	}

	//Check to see if the information is already in the table.
	function checkDuplicate1($tbl_name, $col_name, $data){
		global $conn;
		$result = $conn->query("SELECT * FROM `$tbl_name` WHERE `$col_name`='$data'");
		$row = $result -> fetch_assoc();
		
		if($row > 0){
			return true;
		}
		else{
			return false;
		}

	}
	//Selecting a specific data.This function returns the data's value.
	function selectData($tbl_name, $col_name, $identifier, $identifier_data){
		global $conn;
		$result = $conn->query("SELECT `$col_name` FROM `$tbl_name` WHERE `$identifier`='$identifier_data' ");
		$row = $result -> fetch_assoc();

		return $row[$col_name];
	}
	//Getting the number of rows of the query with 3 arguments. Return an Integer value.
	function rowNumber1($tbl_name, $identifier, $identifier_data){
		global $conn;
		$result = $conn->query("SELECT * FROM `$tbl_name` WHERE `$identifier`='$identifier_data'");
		$row = $result->num_rows;

		return $row;
	}
	//Getting the number of rows of the query with 5 arguments. Return an Integer value.
	function rowNumber($tbl_name, $identifier, $identifier_data, $identifier2, $identifier_data2){
		global $conn;
		$result = $conn->query("SELECT * FROM $tbl_name WHERE $identifier='$identifier_data' AND $identifier2 = '$identifier_data2'");
		$row = $result->num_rows;

		return $row;
	}
	
	//Check if the user is existing in the table.
	function checkUserExistence($tbl_name, $col_name, $data, $col_name1, $data1){
		global $conn;
		$result = $conn->query("SELECT * FROM `$tbl_name` WHERE `$col_name`='$data' AND `$col_name1`='$data1'");
		$row = $result -> fetch_assoc();
		if($row > 0){
			return true;
		}
		else{
			return false;
		}
	}





?>
