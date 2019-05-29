<?php
require "includes/common.php";
$email=mysqli_real_escape_string($con,$_POST['email']);
//$cemail="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
//if(preg_match($cemail,$email))
//{
//header('location: signup.php?emailerror=enter correct email');
//}
$password=mysqli_real_escape_string($con,$_POST['password']);
//$cpassword="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$";
//if(!preg_match($cpassword,$password))
//{
//header('location: signup.php?passworderror=enter correct password');
//}
$name=$_POST['name'];
$contact=$_POST['contact'];
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
$query="SELECT email FROM  users Where email='$email'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
	if($rows>0)
	{
		header('location: signup.php?emailerror=email already exist');
	}
    else
    {
    	
        $insert="INSERT into users set name='".$name."',contact='".$contact."',city='".$city."',address='".$address."',email='".$email."',password='".$password."'";
      
       $run=mysqli_query($con,$insert);
       $_SESSION['email']=$data['email'];
	   $_SESSION['user_id']=mysqli_insert_id($con);
	    header('location:products.php');
    }
?>