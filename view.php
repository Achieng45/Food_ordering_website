<!DOCTYPE html>
<html>
<head>
  <title>Admin View Order</title>
  <link rel="stylesheet" type="text/css" href="User.css">
</head>
<body>

  <div class="navigation">
          
          <a  class="active" href="firstwebsite.php">HOME</a>
          <a href="view_fooditems.php">MENU</a>
           <a href="#">ABOUT US</a>
             <a href="#">LOCATION</a>
               
                <a href="orders.php">ORDER</a>
                
                <a href="logout.php">LOG OUT</a>
                
           </div>
<?php
require_once("connect.php");
$link = connect();

         


$sql = "SELECT  orders.food_name,orders.food_price user_details.First_name, user_details.Second_name FROM orders INNER JOIN user_details ON orders.User_id = user_details.User_id";

$result=mysqli_query($link,$sql);

$_SESSION["shopping_cart"]=getData($result);



?>

<div class="users">
<table style="border: 2px;">
  <thead>
    <tr>
      <th>Food name</th>
      <th>Food price</th>
      <th>First Name</th>
      <th>second Name</th>
      <th>View Order</th>
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
          <td><div><?php echo $values['food_name']?></div></td>
          <td><div><?php echo $values['food_price']?></div></td>
          <td><div><?php echo $values['First_name']?></div></td>
          <td><div><?php echo $values['Second_name']?></div></td>
          <td><a href="User_orders.php?view=<?php echo $value['User_id']?>">View Order</a> </td>
          </tr>
    <?php
      }
    
    ?>    
  </tbody>
</table>
<div>
  <?php
  
}
  ?>
</body>
</html>