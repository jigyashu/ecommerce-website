<?php
require "includes/common.php";
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
         include "includes/check-if-added.php";
        ?>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
                <div class="row row_style text-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/2.jpg" alt="cannon eos" class="img-responsive set">
                            <caption>
                                <h3>Cannon Eos</h3>
                                <p>Price:Rs.36000.00</p>
                            </caption>
                                  <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(1))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                    </div>
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/3.jpg" alt="sony dslr white" class="img-responsive set">
                            <caption>
                                <h3>Sony Dslr</h3>
                                <p>Price:Rs.40000.00</p>
                            </caption>
                             <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(2))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                        </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/4.jpg" alt="sony dslr black" class="img-responsive set">
                            <caption>
                                <h3>Sony Dslr</h3>
                                <p>Price:Rs.50000.00</p>
                            </caption>

                             <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(3))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                    </div>
        
             
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/5.jpg" alt="olympus dslr" class="img-responsive set">
                            <caption>
                                <h3>Olympus Dslr</h3>
                                <p>Price:Rs.80000.00</p>
                            </caption>
                             <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(4))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                    </div>
                </div>
                
                <div class="row row_style text-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/6.jpg" alt="H&W" class="img-responsive set">
                            <caption>
                                <h3>H&W</h3>
                                <p>Price:Rs.800.00</p>
                            </caption>
                             <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(5))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                                                                     </div> 
                    </div>
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/7.jpg" alt="Luis Phil" class="img-responsive set">
                            <caption>
                                <h3>Luis Phil</h3>
                                <p>Price:Rs.1000.00</p>
                            </caption>
                            <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(6))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                        </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/8.jpg" alt="John Zok" class="img-responsive set">
                            <caption>
                                <h3>John Zok</h3>
                                <p>Price:Rs.1500.00</p>
                            </caption>
                             <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(7))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                    </div>
        
             
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/9.jpg" alt="Jhalsani" class="img-responsive set">
                            <caption>
                                <h3>Jhalsani</h3>
                                <p>Price:Rs.1300.00</p>
                            </caption>
                            <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(8))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>                        </div> 
                    </div>
                </div>
                
                <div class="row row_style text-center">
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/10.jpg" alt="titan model 301" class="img-responsive set">
                            <caption>
                                <h3>Titan model#301</h3>
                                <p>Price:Rs.13000.00</p>
                            </caption>
                            <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(9))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>
                        </div> 
                    </div>
                        <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/11.jpg" alt="titan model 201" class="img-responsive set">
                            <caption>
                                <h3>Titan model#201</h3>
                                <p>Price:Rs.3000.00</p>
                            </caption>
                            <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(10))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>                        </div> 
                        </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/12.jpg" alt="hmt milan" class="img-responsive set">
                            <caption>
                                <h3>Hmt Milan</h3>
                                <p>Price:Rs.8000.00</p>
                            </caption>
                         <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(11))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>                        </div> 
                    </div>
        
             
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="includes/images/13.jpg" alt="faber luba 111" class="img-responsive set">
                            <caption>
                                <h3>Faber Luba #111</h3>
                                <p>Price:Rs.18000.00</p>
                            </caption>
                            <?php if (!isset($_SESSION['email'])) { ?>  
                                   <p><a href="login.php" role="button" class="btn btn-primary btn-block">Add To Cart</a></p>   
                                    <?php  } else { 
                                        if (check_if_added_to_cart(12))
                                         {  echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';     
                                          } else {?>   
                                         <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>                                     <?php                            
                                              }              
                                             } ?>                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <?php
        include "includes/footer.php";
        ?>
        
    </body>
</html>
