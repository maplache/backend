<?php 

$con = mysqli_connect('localhost','root','password') or die('Error connecting to server');

if(!mysqli_select_db($con,'rapidoysabroso'))
{
	echo 'Database not selected';
}

?>