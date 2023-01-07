<?php

require_once ('connect.php');
$link=connect();


/*$_GET['foodid'];
$_GET['fooditem'];
$_GET['foodprice'];
$_FILES['foodimage'];
*/
?>

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
                
                <a href="logout.php">LOG OUT</a>
                
           </div>
	<fieldset>
<form action="" method="GET" enctype="multipart/form-data">
	food_id<input type="hidden" name="foodid" value="<?php echo $_GET['foodid']; ?>"/><br><br>

food_name <input type="text" name="fooditem" value="<?php echo $_GET['fooditem']; ?>"/><br><br>

 food_price <input type="number" name="foodprice" value="<?php echo $_GET['foodprice']; ?>"/><br><br>

 food_image<input type="file" name="foodimage" required="true" value="<?php echo $_GET['foodimage']; ?>"/ ><br><br>



 <input type="submit" name="edit" value="edit"  />
</form>
<?php

 if(isset($_GET['edit'])){

 	$food_id=$_GET['foodid'];
	$food_name=$_GET['fooditem'];
	$food_price=$_GET['foodprice'];
 


	$sql="UPDATE fooditems SET food_name='$food_name',food_price='$food_price' WHERE food_id='$food_id'";
    #$results=mysqli_query($link,$sql);
	 $results=mysqli_query($link,$sql);

	    if($results) {

               echo "Record updated successfully";
               }

 else
  {
    echo "Error updating record: " . mysqli_error($link);
  }
}

else
{
	echo "button not pressed";
}
 
?>

	</fieldset>
</body>
</html>
