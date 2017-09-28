<?php
session_start();
require_once('db.php');

if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price']) || empty($_POST['id'])){
	http_response_code(500);
	echo 'Please fill all the fields';
} else {
		
	//$user = $_SESSION['login_user'];
	$id = $_POST['id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	
	$sql = "INSERT INTO product VALUES (null, $id, '$name', '$description', $price, '')";
	if(mysqli_query($con, $sql)){
		http_response_code(200);
		echo 'Menu item added.';
	} else {
		http_response_code(500);
		echo 'Oops, something went wrong.';
	}
	
	
}
mysqli_close($con);
?>