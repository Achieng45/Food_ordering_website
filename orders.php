<?php
require_once("connect.php");
$link=connect();
session_start();
$User_name=$_SESSION['User_name'];

echo "welcome".$_SESSION["User_name"] ;
if (isset($_POST["add_to_cart"])) 
       {
   

	if (isset($_SESSION["shopping_cart"])) 
	{
         
       $food_array_id=array_column($_SESSION["shopping_cart"], "food_id");
		if (!in_array($_GET["id"], $food_array_id)) 
		{
			$count=count($_SESSION["shopping_cart"]);
			$food_array=array(
			'food_id'=>$_GET["id"],
			
           'food_name'=>$_POST["hidden_name"],
           'food_price'=>$_POST["hidden_price"],
           'food_quantity'=>$_POST["quantity"],
       );
			$_SESSION["shopping_cart"][$count]=$food_array;

		}
		else
		{
            echo '<script>alert("Item already added")</script>';
              echo '<script>window.location="Orders.php"</script>';
		}
	}
	else
	{
		$food_array=array(
			'food_id'=>$_GET["id"],
			
           'food_name'=>$_POST["hidden_name"],
           'food_price'=>$_POST["hidden_price"],
           'food_quantity'=>$_POST["quantity"],

		);
		$_SESSION["shopping_cart"][0]=$food_array;

	}
}
if (isset($_GET["action"])) {
		if ($_GET["action"]=="delete") 
		{
			foreach ($_SESSION["shopping_cart"] as $keys => $values) 
			{
				if ($values["food_id"]==$_GET["id"]) 
				{
					unset($_SESSION["shopping_cart"][$keys]);
					echo '<script>alert("Item removed")</script>';
					echo '<script>window.location=orders.php</script>';

				   


				}
			}
		}
	}	
?>
  <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
<div class="navigation">
					
					<a  class="active" href="firstwebsite.php">HOME</a>
					<a href="view_fooditems.php">MENU</a>
					 <a href="#">ABOUT US</a>
					   <a href="#">LOCATION</a>
					   <a href="User_orders.php">ORDER HISTORY</a>

					     <a href="logout.php">LOG OUT</a>
					      	
					
					 </div>
					 <br/>
					 
					 
					 <?php
			$sql="SELECT * FROM fooditems ";
$result=mysqli_query($link,$sql);
if (mysqli_num_rows($result)>0)
 {
    	while($row=mysqli_fetch_array($result)) 
    	
    {

    ?>
   <div class="col-md-4" style="display: inline-flex;">
	<form method="post" action="orders.php?action=add&id=<?php echo $row["food_id"];?>">
		
		<div style="border: 1px solid #333;
	background-color: #f1f1f1;
	border-radius: 5px;padding: 16px; " >
			<img src="assets/<?php echo  $row["new_file_name"];?>" width="250" height="250">
-			<h4><?php echo $row["food_name"];?></h4>
 		     <h4><?php echo $row["food_price"];?></h4>
 		     <input type="text" name="quantity" value="1">
 		     <input type="hidden"name="hidden_name" value="<?php echo $row["food_name"];?>"/>
 		   <input type="hidden"name="hidden_price" value="<?php echo $row["food_price"];?>"/>
 		  <input type="submit" name="add_to_cart" style="margin-top: 5px;" value="add_to_cart"/>
		</div>
	</div>
	</form>
</div>



<?php 
  }
} 
?>
<div style="clear:both;"></div>
 	<br/>
 	<h3>Order Cart</h3>
 	<div>
 		<table style="border: 2px solid">
 			<tr>
 				
 				<th > food_name</th>
 				<th > food_price</th>
 				<th > quantity</th>
                <th > total</th>
                <th > Action</th>
 			</tr>
 			<?php
 			if (!empty($_SESSION["shopping_cart"])) 
 			{
 				$total=0;
 				foreach ($_SESSION["shopping_cart"]as $keys=>$values)
 				 {

 				 	

 				?>
 				<tr>
 					
 					<td><?php echo $values["food_name"]; ?></td>
 					<td>$<?php echo $values["food_price"]; ?></td>
                    <td><?php echo $values["food_quantity"]; ?></td>
 					<td><?php echo number_format($values["food_quantity"]*$values["food_price"],2); ?></td>
                    <td><a href= "orders.php?action=delete&id=<?php echo $values["food_id"];?>"><span>Remove</span></a></td>
                 
 				</tr>
 				<?php
                    $total=$total+($values["food_quantity"]*$values["food_price"]);

 			}
 			?>
 			<tr>
 					<td colspan="3" align="right">Total</td>
 					<td align="right">$<?php echo number_format($total,2); ?></td>
 					<td></td>
 				</tr>
 			<?php
 		}
 			?>
 		</table>
 	</div>

 



</body>
</html>

