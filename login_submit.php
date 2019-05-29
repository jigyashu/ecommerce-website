<?php
require "includes/common.php";

$email =mysqli_real_escape_string($con,$_POST['email']);
$password = (mysqli_real_escape_string($con,$_POST['password']));
$select_query = "SELECT email,password,id FROM users where email='$email' and password='$password'";
$result = mysqli_query($con,$select_query) or die (mysqli_error($con));
$rows=mysqli_num_rows($result);
if($rows==0)
{
	header('location: login.php?error=email or password entered is incorrect');
}
else
	{$data=mysqli_fetch_array($result);
	$_SESSION['email']=$data['email'];
	$_SESSION['user_id']=$data['id'];
	header('location:products.php');
}
   
?>