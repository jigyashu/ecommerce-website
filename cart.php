<?php
require "includes/common.php";
if(!isset($_SESSION['email']))
{
    header('location:index.php');
}
$sum=0;
$id='';
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
        <div class="row row_style">
            <div class="col-xs-6 col-xs-offset-3">
        <table class="table table-bordered table-striped">
            <tr>
                <th>ItemNumber</th>
                <th>Itemname</th>
                <th>Price</th>
                <th></th>
            </tr>
            <?php
            $user_id=$_SESSION['user_id'];
            $query="SELECT * from users_items INNER JOIN items on users_items.item_id = items.id where users_items.status='Added to cart' and users_items.user_id='$user_id'";
            //echo $query;
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==0)
            {
                echo 'Add items to the cart first!';
            }
            else{
                    while($row=mysqli_fetch_array($result))
                    {
                        
                        $sum=$sum+$row['price'];
                        $id=$id+","+$row['item_id'];
            
            ?>
            <tr>
                <td><?php echo $row['item_id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td> <a href="cart-remove.php?id=<?php echo $row['id'];?>" class='remove_item_link'> Remove</a> </td>
            </tr>
            <?php } }?>
            <tr>
                <td></td>
                <td>Total</td>
                <td><?php echo "Rs"." ".$sum ;?></td>
                <td><a href="success.php?id=<?php echo $user_id; ?>"><button class="btn btn-primary">Confirm Order</button></a></td>
            </tr>
        </table>
        </div>
        </div>
       
        <?php
         include "includes/footer.php";
        ?>
    </body>
</html>
