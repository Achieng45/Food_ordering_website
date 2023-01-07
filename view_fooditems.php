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
					     <a href="logout.php"><img src="DOWNLOADS/login.jpg"height="20" width="20">LOG OUT</a>
					     	
					     	
					 </div>

</body>
</html>

<?php 
include_once("connect.php");
$link=connect();
$sql="SELECT food_id,food_name,food_price,new_file_name FROM fooditems";

$results=mysqli_query($link,$sql);
    $rows=mysqli_num_rows($results);

if ($rows!=0) {
	# code...
 ?>
<!DOCTYPE html>
<html>
<head>
	<title> VIEW IMAGE</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
      <table>
      	<tr>
      		<th>Food ID</th>
      		<th>Food name</th>
      		
      		<th>Food price</th>
      		<th>Food image</th>
      		<th colspan="2">Action</th>
      	</tr>

<?php  

while ($result=mysqli_fetch_assoc($results)) {

	echo "
	<tr>
		<td>" .$result["food_id"]."</td>
                <td>".$result["food_name"]."</td>
                <td>".  $result["food_price"]."</td>
               
                <td><img src='assets/".  $result["new_file_name"]."' height='200' width='100'/></td>

                 <td><a href='food_edit.php?foodid=$result[food_id]&fooditem=$result[food_name]&foodprice=$result[food_price]'>Edit/Update</a></td>
                <td><a href= 'food_delete.php?foodid=$result[food_id]'>Delete</a></td>
                 
             
              	</tr>";

}
}
else{
	echo "no record";
}
?>
	</table>
</body>
</html>

