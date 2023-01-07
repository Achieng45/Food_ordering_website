<?php
require_once("connect.php");
$link=connect();
if (isset($_POST["register"])) {


$First_name=$_POST["fname"];
$Second_name=$_POST["sname"];
$Email_address=$_POST["email"];
$User_name=$_POST["uname"];
$Phone_No=$_POST["PhoneNo"];
$Password=$_POST["password"];
$Date_of_Birth=$_POST["dob"];
$Gender=$_POST["gender"];
$User_type=$_POST["User_type"];

            
 
$sql="INSERT INTO user_details(First_name,Second_name,Email_address,Date_of_Birth,Phone_No,Gender,User_name,Password,User_type)VALUES('$First_name','$Second_name','$Email_address','$Date_of_Birth','$Phone_No','$Gender','$User_name','$Password','$User_type')";
echo setData($sql);
header("location:login.php ");
}

?> 