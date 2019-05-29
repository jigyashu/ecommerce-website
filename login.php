<?php
require "includes/common.php";
if (isset($_SESSION['email'])) {
  header('location: products.php');} 

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
     <head>
        <title>Login</title>


        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="includes/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="includes/js/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="includes/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet">
        

    </head>
    <body>
        
           <?php
         include "includes/header.php";
         ?>
                <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        <div class="panel-body">
						         <form method="POST" action="login_submit.php">
                                <p class="text-warning">Login to make a purchase</p>
                                 <div class="form-group">
                                  <div><?php
                                                  error_reporting(0);
                                                echo $_GET['error'];
                                                       error_reporting(0)?></div>
                                   <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                                 </div>
                                 <div class="form-group">
                                   <input type="password" class="form-control" placeholder="password" id="password" name="password">
                                 </div>
                                 <button class="btn btn-primary" type="submit" name="submit">Login</button>
                                </form>
                        </div>
                        <div class="panel-footer"> Don't have an account? <a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
         <?php
         include "includes/footer.php";
         ?>
</html>
