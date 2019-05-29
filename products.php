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
                            <img src="https://shop.usa.canon.com/wcsstore/ExtendedSitesCatalogAssetStore/eos-rebel-t6-ef-s-18-55mm-f-3-5-5-6-is-ii-kit_1_l.jpg" alt="cannon eos" class="img-responsive set">
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
                            <img src="https://images-na.ssl-images-amazon.com/images/I/41eWDX7-hUL.jpg" alt="sony dslr white" class="img-responsive set">
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
                            <img src="https://petapixel.com/assets/uploads/2013/08/sonyalpha3000_1.jpg" alt="sony dslr black" class="img-responsive set">
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
                            <img src="https://img.newatlas.com/olympus-omd-em1.jpg?auto=format%2Ccompress&fit=max&h=670&q=60&w=1000&s=6906c1d4d1862f83e1b3d46779e20e05" alt="olympus dslr" class="img-responsive set">
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
                            <img src="http://www.mrbluewhiter.com/wp-content/uploads/2013/12/flannel-shirt-blue.jpg" alt="H&W" class="img-responsive set">
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
                            <img src="http://ecx.images-amazon.com/images/I/41JZEfIOZ3L._AC_UL260_SR200,260_.jpg" alt="Luis Phil" class="img-responsive set">
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
                            <img src="https://s-media-cache-ak0.pinimg.com/originals/e2/ff/c5/e2ffc5dcf6e93cebc18d5a9776137a5c.jpg" alt="John Zok" class="img-responsive set">
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
                            <img src="https://www.erasfashion.com/wp-content/uploads/2015/12/Mens-Shirts-004.jpg" alt="Jhalsani" class="img-responsive set">
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
                            <img src="https://n4.sdlcdn.com/imgs/a/t/b/Titan-Orion-Men-s-Watches-SDL706141619-1-dbacb.jpg" alt="titan model 301" class="img-responsive set">
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
                            <img src="https://n4.sdlcdn.com/imgs/a/j/0/Titan-Octane-9308BM01-Men-s-SDL707100046-2-5ddb8.jpg" alt="titan model 201" class="img-responsive set">
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
                            <img src="https://watchpriceindia.com/uploads/watches/small/watch-hmt-154.jpeg" alt="hmt milan" class="img-responsive set">
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
                            <img src="http://thumbs4.ebaystatic.com/d/l225/m/mHoUT20hYCtP4QC-TTQPsRw.jpg" alt="faber luba 111" class="img-responsive set">
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
