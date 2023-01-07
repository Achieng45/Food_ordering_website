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
					   <a href="upload_image.php">ADD FOOD</a>
					     <a href="logout.php"><img src="DOWNLOADS/login.jpg"height="20" width="20">LOG OUT</a>
					     <a href="view.php">ORDER HISTORY</a>	
					     	
					 </div>
 	</body>
 	</html>
<?php
session_start();
echo "welcome".$_SESSION["User_name"];
?>
		
	   

<?php
include_once("connect.php");
$link=connect();

$sql="SELECT User_id,First_name,Second_name,Email_address,Date_of_Birth,Phone_No,Gender,User_name,Password,User_type FROM user_details";

    $results=mysqli_query($link,$sql);
    $rows=mysqli_num_rows($results);

   

if ($rows!=0) {
	# code...
?>
<!DOCTYPE html>

<html>
<head>
	<title>database table</title>
	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
	
	<table>

		<tr>
			<th>User_id</th>
			<th>First_name </th>
			<th>Second_name</th>
			<th>Email_address</th>
			<th>Date_of_Birth</th>
			<th>Phone_Number</th>
			<th>Gender </th>
			<th>User_name</th>
            <th>Password </th>
            <th>User_type</th>
            <th>Action</th>
            <th>Action</th>
           

		
		</tr>
	
	

<?php

while ($result=mysqli_fetch_assoc($results)) {
     


	echo "
	<tr>
		<td>" .$result["User_id"]."</td>
                <td>".$result["First_name"]."</td>
                <td>".  $result["Second_name"]."</td>
                <td>".  $result["Email_address"]."</td>
                <td>". $result["Date_of_Birth"]."</td>
                <td>". $result["Phone_No"]."</td>
                <td>".  $result["Gender"]."</td>
                <td>".  $result["User_name"]."</td>
                <td>".$result["Password"]."</td>
                <td>".$result["User_type"]."</td>

                <td><a href='edit.php?id=$result[User_id]&fn=$result[First_name]&sn=$result[Second_name]&em=$result[Email_address]&dob=$result[Date_of_Birth]&pn=$result[Phone_No]&gn=$result[Gender]&un=$result[User_name]&pa=$result[Password]'>Edit</a></td>
                <td><a href='delete.php?id=$result[User_id]'>Delete</a></td>
	</tr>";
}
}
else{
	echo "no record";
}


	
	?>
</table>


