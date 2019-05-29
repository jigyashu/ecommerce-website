<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
  header('location: index.php');} 
require "includes/common.php";
$id=$_SESSION['user_id'];

$oldpassword=mysqli_real_escape_string($con,$_POST['oldpassword']);
$newpassword=mysqli_real_escape_string($con,$_POST['newpassword']);
$repassword=mysqli_real_escape_string($con,$_POST['repassword']);

if($newpassword===$repassword)
{	
$query="SELECT password FROM  users Where id='$id'";
$result=mysqli_query($con,$query);
$fetch=mysqli_fetch_array($result);
if($fetch['password']===$oldpassword)
{
    $update="UPDATE users set password='$newpassword' where id='$id' ";
    $r=mysqli_query($con,$update);
    header('location: settings.php?passworderror=password succesfully updated');
}
else
{
		header('location: settings.php?passworderror=old password entered is not correct');

}
}
else
{
	header('location: settings.php?passworderror=new password and re-typed password does not match');
}

?>
