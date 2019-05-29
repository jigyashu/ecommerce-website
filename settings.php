<?php
require "includes/common.php";
if (!isset($_SESSION['email'])) {
  header('location: index.php');} 

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>products</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="includes/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="includes/js/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="includes/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include "includes/header.php";
        ?>
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <form action="settings_script.php" method="post" >
                        <h1>Change password</h1>
                       <div><?php  error_reporting(0);
                        echo $_GET['passworderror'];
                        error_reporting(0)?></div>

                        <div class="form-group">
                            <input type="password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Old Password">
                        </div>    
                        
                        <div class="form-group">
                            <input type="password" name="newpassword" id="newpassword" class="form-control" placeholder="New Password">
                        </div>    
                        
                        <div class="form-group">
                            <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Re-Type New Password">
                        </div> 
                        
                        <div class="form-group">
                            <button class="btn btn-primary">Change</button>
                        </div>    
                    </form>
                
            </div>
        </div>        
       <?php
       include "includes/footer.php";
       ?>
    </body>
</html>
