<?php
require "includes/common.php";
$item_id=$_GET['id'];

$user_id=$_SESSION['user_id'];
$query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart') ";
$run=mysqli_query($con,$query) or die(mysqli_error($con));
if($run)
header('location:products.php');
?>