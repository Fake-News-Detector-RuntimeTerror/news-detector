<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){
	echo "Connection Successful";
}
else{
	echo "No Connection";
}

$db = mysqli_select_db($con,'newsdetector');

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM login where username = '$username' and password = '$password' ";

	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
	if($row == 1){
		echo "Login Successful";
		header('location:admin.php');
	}
	else
	{
	echo "Login Failed";
	header('location:login.php');
	}		
}


?>