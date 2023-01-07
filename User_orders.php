<!DOCTYPE html>
<html>
<head>
  <title>MyOrders</title>
  <link rel="stylesheet" type="text/css" href="User.css">
</head>
<body>
<div class="navigation">
          
          <a  class="active" href="firstwebsite.php">HOME</a>
          <a href="view_fooditems.php">MENU</a>
           <a href="#">ABOUT US</a>
             <a href="#">LOCATION</a>
               
                <a href="orders.php">ORDER</a>
                <a href="User_orders.php">ORDER HISTORY</a>
                <a href="logout.php">LOG OUT</a>
                
           </div>




<?php
require_once("connect.php");
$link = connect();
session_start();
error_reporting(0);
$User_name = $_SESSION['User_name'];



$sql = "SELECT fooditems.new_file_name, fooditems.food_name, orders.quantity, orders.food_price FROM fooditems INNER JOIN orders ON orders.id = fooditems.food_id";
$result = mysqli_query($link, $sql);

$res= getData($result);
?>

<div >
<table style="border: 2px;">
  <thead>
    <tr>
      
      <th>Food Name</th>
      <th>Quantity</th>
      <th>Unit Price</th>
      <th>Total Price</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
    
      if (!empty($_SESSION["shopping_cart"])) 
      {
        $total=0;
        foreach ($_SESSION["shopping_cart"]as $keys=>$values)
         {
        ?>
        <tr>
          
          <td><?php echo $values["food_name"]; ?></td>
          <td><?php echo $values["food_quantity"]; ?></td>
          <td>$<?php echo $values["food_price"]; ?></td>
           <td><?php echo number_format($values["food_quantity"]*$values["food_price"],2); ?></td>    
         
                    
          
          
                 
        </tr>
          <?php
    }
      }
      ?>
    </table>
  </div>

 



</body>
</html>