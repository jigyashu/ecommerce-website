<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
  header('location: index.php');} 
$user_id=$_GET['id'];
?>
<!doctype html>
<html>
<head>
<title>success</title>
</head>
<body>
<?php
$query="UPDATE users_items SET status='Confirmed' where user_id='$user_id'";
$result=mysqli_query($con,$query);
 ?>
<p>Your order is confirmed. Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item. </p>
</body>
</html>
