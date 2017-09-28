<?php
session_start(); // Starting Session
require_once('db.php');

$error=''; // Variable To Store Error Message

	if (empty($_POST['email']) || empty($_POST['password'])) {
		http_response_code(500);
		echo "Email or password is invalid";
	} else {
		// Define $username and $password
		$username=$_POST['email'];
		$password=$_POST['password'];
		
		// To protect MySQL injection for Security purpose
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($con, $username);
		$password = mysqli_real_escape_string($con, $password);
		 
		// SQL query to fetch information of registerd users and finds user match.
		$sql = "SELECT * FROM user WHERE email='$username' AND password='$password'";
		$result = mysqli_query($con, $sql);
		if(!$result){
			http_response_code(500);
			echo "Email or password is invalid";
		} else {
			$rows = mysqli_num_rows($result);
			if ($rows == 1) {
				http_response_code(200);
				$_SESSION['login_user']=$username; // Initializing Session
				$_SESSION['logged_in']=true;
				echo "Login Successfull.";
			} else {
				http_response_code(500);
				echo "User or password is invalid";
			}
		}
		mysqli_close($con); // Closing Connection
	}
?>