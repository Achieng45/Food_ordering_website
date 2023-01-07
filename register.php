<!DOCTYPE html>
<html>
<head>
 
<title>Personal details</title>
 <link rel="stylesheet" type="text/css" href="User.css">
 </head>
<body>
 <div class="navigation">
					
					<a  class="active" href="firstwebsite.php">HOME</a>
					<a href="view_fooditems.php">MENU</a>
					 <a href="#">ABOUT US</a>
					   <a href="#">LOCATION</a>
					     
					      
					      
					     	<a href="login.php">LOG IN</a>
					     	
					 </div>


<form action="process_register.php" method="post">  
<fieldset>
<legend>PERSONAL DETAILS</legend>
<p>
 <label for="First_name">FIRST NAME</label>
 <input type="first name" name="fname" id="First_name">
</p> 
<p>
<label for="Second_name">SECOND NAME</label>
 <input type="second name" name="sname" id="Second_Name">
</p>
<p>
<label for="Email_address">EMAIL</label>
 <input type="email" name="email" id="Email_Address">
</p>
<p>
<label for="Username">USERNAME</label>
 <input type="text" name="uname" id="Username ">
</p>
<p>
<label for="Phone_No">PHONE NUMBER</label>
 <input type="PhoneNo" name="PhoneNo" id="Phone_No">
</p>
<p>
<label for="Password">PASSWORD</label>
 <input type="Password" name="password" id="Password">
</p>
<p>
<label for="Date_of_Birth">DATE OF BIRTH</label>
 <input type="Date" name="dob" id="Date_of_Birth">
</p>
<p>
<label for="Male">MALE</label>
 <input type="radio" name="gender" value="male" id="Male">
<label for="female">FEMALE</label>
 <input type="radio" name="gender"  value="female" id="female"><br/>


  <label for="User">USER</label>
 <input type="radio" name="User_type" value="User" id="User">
<label for="Admin">ADMIN</label>
 <input type="radio" name="User_type"  value="Admin" id="Admin"><br/>

</p>
<input type="submit" name="register" value="register">
 </html>
</body>
</fieldset>
</form>
