<?php
session_start();
require_once('db.php');

if(isset($_POST['submit'])){
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])){
		http_response_code(500);
		echo "Please fill all the fields.";
	} else {
		// Define $username and $password
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$code=substr(md5(mt_rand()),0,15);
		
		// SQL query to fetch information of registerd users and finds user match.
		$sql = "SELECT * FROM user WHERE email='$email'";
		$result = mysqli_query($con, $sql);
		if(mysqli_num_rows($result) == 0){
			$sql = "INSERT INTO verify (email, password, name, code) values ('$email', '$password', '$name', '$code')";
			if(mysqli_query($con, $sql)){
				http_response_code(200);
				$db_id = mysqli_insert_id($con);
				$message = "Your Activation Code is ".$code."";
				$to=$email;
				$subject="Activation Code";
				$from = 'alanastudilo@gmail.com';
				$body='Your Activation Code is '.$code.' Please Click On This link http://localhost/rapidoysabroso/sign_up.php?id='.$db_id.'&code='.$code.' to activate your account.';
				$headers = "From:".$from;
				mail($to,$subject,$body,$headers);
				
				echo "An Activation Code Is Sent To You Check You Emails";
			} else {
				http_response_code(500);
				echo "Error registering.";
			}
			
		} else {
			http_response_code(500);
			echo "Email already in use.";
		}
		mysqli_close($con);
	}
}

if(isset($_GET['id']) && isset($_GET['code']))
{
	$id=$_GET['id'];
	$code=$_GET['code'];
	$sql = "SELECT * FROM verify WHERE idverify='$id' and code='$code'";
	$result = mysqli_query($con, $sql);
	if(mysqli_num_rows($result)== 1)
	{
		$row = mysqli_fetch_array($result);
		$email=$row['email'];
		$password=$row['password'];
		$name = $row['name'];
		$sql = "INSERT INTO user (email, password, name) VALUES('$email','$password', '$name')";
		if(mysqli_query($con, $sql)){
			$sql = "DELETE FROM verify WHERE idverify='$id' AND code='$code'";
			mysqli_query($con, $sql);
			echo 'Account has been verified.';
		} else {
			http_response_code(500);
			echo 'Error connecting to server';
		}
	}
	mysqli_close($con);
}
?>