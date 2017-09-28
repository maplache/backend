<?php
session_start();
require_once('db.php');

if(empty($_POST['name']) || empty($_POST['category']) || empty($_POST['address']) || empty($_POST['city']) || empty($_POST['state'])){
	http_response_code(500);
	echo 'Please fill all the fields';
} else {
		
	//$user = $_SESSION['login_user'];
	$name = $_POST['name'];
	$category = $_POST['category'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$uploadOk = 1;
	$target_file = "";
	if($_FILES['picture']['tmp_name'] != ""){
		$pictureFileType = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
		$target_file = $name . '.' . $pictureFileType;
		$target_dir = "images/";
		// Check if picture file is a actual picture or fake picture
		$check = getimagesize($_FILES["picture"]["tmp_name"]);
		if($check !== false) {
			$uploadOk = 1;
		} else {
			http_response_code(500);
			echo "File is not an image.";
			$uploadOk = 0;
		}
		
		// Check file size
		if ($_FILES["picture"]["size"] > 500000) {
			http_response_code(500);
			echo "Sorry, your file is too large.";
			$uploadOk = 0;
		}
		// Allow certain file formats
		if($pictureFileType != "jpg" && $pictureFileType != "png" && $pictureFileType != "jpeg" && $pictureFileType != "gif" ) {
			http_response_code(500);
			echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			$uploadOk = 0;
		}
		if ($uploadOk == 1) {
			$target_dir = $target_dir . $target_file;
			if(move_uploaded_file($_FILES["picture"]["tmp_name"], $target_dir)){
				$uploadOk = 1;
			} else {
				$uploadOk = 0;
			}
		}
	}
	
	if ($uploadOk == 0) {
		http_response_code(500);
		echo "Your restaurant was not posted because of an error while uploading your picture.";
	} else {	
		$sql = "INSERT INTO restaurant VALUES (null, '$name', '$category', '$address', '$city', '$state','$target_file')";
		if(mysqli_query($con, $sql)){
			http_response_code(200);
			$id = mysqli_insert_id($con);
			header("Location: registro_menu.php?id=$id");
		} else {
			http_response_code(500);
			echo 'Oops, something went wrong.';
		}
	}
	
	
}
mysqli_close($con);
?>