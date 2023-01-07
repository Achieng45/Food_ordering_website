<?php
session_start();
require_once "connect.php";
$link=connect();

$messagee="";
$User_type="";
if(isset($_POST['submit']))
{
	$User_name=$_POST["username"];
	$Password=$_POST["password"];
	
	$sql="SELECT * FROM user_details WHERE User_name='$User_name' AND Password='$Password'";

	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_array($result);

	#if (mysqli_num_rows($result)>0) 
	{
		#while ($row=mysqli_fetch_assoc($result))
		if($row['User_name']==$User_name&&$row['Password']=$Password)
		 {
			if ($row["User_type"]=="Admin")

			 {
			 	setcookie('User_name',$User_name, time()+60*60+7);
			 	session_start();
			 	$_SESSION['User_name']=$User_name;
				$_SESSION['user']=$row["User_name"];
				$_SESSION['User_type']=$row["User_type"];
				header("Location:Admin.php");
			}
			else
			{
				setcookie('User_name',$User_name, time()+60*60+7);
				session_start();
				$_SESSION['User_name']=$User_name;
				$_SESSION['user']=$row['User_name'];
				$_SESSION['User_type']=$row['User_type'];
				header("Location:User.php");
			}
	}

else
{   
	echo "incorrect credentials";
	$conn->close();
	header("Location:log.php");
}
}
}
?>