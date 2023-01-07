<!DOCTYPE html>

<html>
<head>
	<title>Upload image</title>
	<link rel="stylesheet" type="text/css" href="Admin.css">
</head>
<body>
<div class="navigation">
					
					<a  class="active" href="firstwebsite.php">HOME</a>
					<a href="view_fooditems.php">MENU</a>
					 <a href="#">ABOUT US</a>
					   <a href="#">LOCATION</a>
					   <a href="upload_image.php">ADD FOOD</a>
					     <a href="logout.php">LOG OUT</a>
					     	
					     	
					 </div>


  <form action="" method="POST" enctype="multipart/form-data">

     	<label  for="foodid">FOOD ID</label>
      <input type="hidden" name="foodid" required="true" placeholder="Enter food id" id="foodid"><br><br>


     	   <label for="fooditem">FOOD NAME</label>
     <input type="text" name="fooditem" required="true" placeholder="Enter food name" id="fooditem"><br><br>

    


      <label for="foodimage">FOOD IMAGE</label>
     <input type="file" name="foodimage" required="true" placeholder="Enter food image" id="foodimage"><br><br>


     <label for="foodprice">FOOD PRICE</label>
     <input type="number" name="foodprice" required="true" placeholder="Enter food price" id="foodprice"><br><br>

     <input type="submit" name="submitImage" value="SAVE">
</form>
</body>
</html>

<?php
require_once("connect.php");
session_start();


if (isset($_POST["submitImage"])) {
echo "welcome".$_SESSION["User_name"];
	$food_id=$_POST["foodid"];
	$food_name=$_POST["fooditem"];
	$food_image=$_FILES["foodimage"];
	$food_price=$_POST["foodprice"];

$original_file_name=$_FILES["foodimage"]["name"];
$file_tmp_location=$_FILES["foodimage"]["tmp_name"];
$file_type=substr($original_file_name, strpos($original_file_name, '.'),strlen($original_file_name));
   
    $file_path="assets/";
    $new_file_name=time().$file_type;
    
   if( move_uploaded_file($file_tmp_location, $file_path.$new_file_name)){
   	$sql="INSERT INTO fooditems(food_id,food_name,original_file_name,new_file_name,food_price)VALUES('$food_id','$food_name','$original_file_name','$new_file_name','$food_price')";
    


   	if (setData($sql)) {
   		
   		header("Location:Admin.php");
   		header("Location:firstwebsite.php");
        header("Location:orders.php");
        header("Location:orders.php");
   	}
   }
	
}
?>