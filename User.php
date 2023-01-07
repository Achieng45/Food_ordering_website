<?php
require_once('connect.php');
$link=connect();
session_start();
$User_name=$_SESSION['User_name'];

echo "welcome".$_SESSION["User_name"];


$sql="SELECT * FROM user_details WHERE User_name='$User_name'";

	$result=mysqli_query($link,$sql);
	 
	 while ($rows=mysqli_fetch_assoc($result)) 
	{
              
			 $User_id=$rows['User_id'];
			 $First_name=$rows['First_name'];
			 $Second_name=$rows['Second_name'];
			 $Email_address=$rows['Email_address'];
			 $Date_of_Birth=$rows['Date_of_Birth'];
			 $Phone_No=$rows['Phone_No'];
			 $Gender=$rows['Gender'];
			 $User_name=$rows['User_name'];
			 $User_type =$rows['User_type'];
			 
		}	
	
             ?>
 

<!DOCTYPE html>

<html>
<head>
	<title></title>
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


	<div style="border: 1px solid #333;
	background-color: gold ;font-size: 20px;
	border-radius: 5px;padding: 16px; width: 500PX ">
      <h1>Profile details</h1>
    	<p>
    	User_id: <?php  echo $User_id?> <br>
    	First_name: <?php  echo $First_name?><br>
    	Second_name: <?php  echo $Second_name?><br>
    	
    	
    	Email_address: <?php  echo $Email_address?><br>
    	Date_of_Birth: <?php  echo $Date_of_Birth?><br>
    	Phone_No: <?php  echo $Phone_No?><br>
    	Gender: <?php  echo $Gender?><br>
    	User_name: <?php  echo $User_name?><br>

    	User_type: <?php  echo $User_type?><br>
    	
</p>
		
	</div>
	
</body>
</html>

    
</body>
</html>




