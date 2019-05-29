<?php
require "includes/common.php";
$item_id=$_GET['id'];
$user_id=$_SESSION['user_id'];

$query="DELETE from users_items where user_id='$user_id' and item_id='$item_id'";
$run=mysqli_query($con,$query);
if($run)
{
	header('location: cart.php');
}
else
{
	echo 'cant delete';
}
?>