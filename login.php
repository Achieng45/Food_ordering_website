
<!DOCTYPE html>
<html>
<head>
<title>Creating a form</title>
<link rel="stylesheet" type="text/css" href="Login.css">
   </head>
<body>
	<div class="navigation">
					
					<a  class="active" href="firstwebsite.php">HOME</a>
					<a href="view_fooditems.php">MENU</a>
					 <a href="#">ABOUT US</a>
					   <a href="#">LOCATION</a>
					     <a href="logout.php">LOG OUT</a>
					      
					     	
					 </div>
	<?php if (isset($message)) {echo $message;
		
	}?>
	<div class="login-box">
		
 <img src="h1.jpg"  class="img">
    <h1>PLEASE LOG IN HERE</h1>
    <form action=""  method="POST">
<p>USERNAME: </p>
    <input type="text" name="username" placeholder="enter username" >

<p>PASSWORD:</p>
  <input type="password" name="password" placeholder="enter password" >


<input type="submit" name="submit" value="Login" > 


<a href="register.php">Do you have an account?Sign up</a>
 
 
 
</form>
  
   

</div>
</body>
</html>


<?php


session_start();
/*$input="$password";
$hasshedpassword=password_hash($password, PASSWORD_DEFAULT);
echo password_verify($password, hasshedpassword);
*/require_once "connect.php";
$link=connect();


if(isset($_POST['submit']))
{
	$User_name=$_POST["username"];
	$Password=$_POST["password"];

	
	$sql="SELECT * FROM user_details WHERE User_name='$User_name' AND Password='$Password'";

	$result=mysqli_query($link,$sql);
	
	
		if(mysqli_num_rows($result)>0)
		 {
			while($row=mysqli_fetch_assoc($result))
			{
				if ($row['User_type']=='Admin') 
				{
					
				
					
		        setcookie('User_name',$User_name, time()+60*60+7);
			 	setcookie('Password',$Password, time()+60*60+7);
			 	session_start();
			 	$_SESSION['User_name']=$User_name;
				$_SESSION['Login']=$row["User_name"];
				$_SESSION['User_type']=$row["User_type"];
				header("Location:http:Admin.php?page=1");
			 }

			else 
			{
				
			   setcookie('User_name',$User_name, time()+60*60+7);
				session_start();
				$_SESSION['User_name']=$User_name;
				$_SESSION['Login']=$row['User_name'];
				$_SESSION['User_type']=$row['User_type'];
				header("Location:User.php");
			}
		}
	}
    else
      {   
	   #echo "incorrect credentials";
      	$message="incorrect credentials";
	   $conn->close();
	   header("Location:login.php");

       }

}


?>