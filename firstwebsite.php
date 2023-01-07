<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="firstwebsite.css">
		<title>WEBSITE</title>
	</head>
	<body>
		<header>
			<h1 style="color: gold; position: center;">STEPHY'S</h1>
			
			 </header>
		
			<div class="navigation">
					<a href="#"><img src="DOWNLOADS/logo.jpg"height="70"width="70"></a>
					<a  class="active" href="#">HOME</a>
					<a href="#">MENU</a>
					 <a href="#">ABOUT US</a>
					   <a href="#">LOCATION</a>
					     <a href="login.php"><img src="DOWNLOADS/login.jpg"height="20" width="20">LOGIN</a>
					     	
					 </div>

				<section class="pink">

               
			<p class="p1">COME TASTE THE DIFFERENCE COME ONE COME ALL!!</p>
		 <p class="p2">Ready for crispy chicken You wake up. You’re hungry. You remember you can get a Breakfast Baconator®️, a Honey Butter Chicken Biscuit, a Sausage, Egg & Swiss Croissant, or a Frosty®️-ccino, and then also get any of those for just $1 more. You realize today is already excellent and you still have your PJs on. You think back to reading that blurb on Stephys.com and smile, thankful that you did. </p>
        

   <p><input style="background-color:  pink; width: 200px;height: 50px; background-position: center;" type="submit" name="ORDER" value="ORDER" onclick="orders.php"></p>
     
		 <img src="DOWNLOADS/appstore.png">
		  <img src="DOWNLOADS/google.png">
	   </section>

					
					
 <section >
 	<?php
 	require_once 'connect.php';
 	$link=connect();
 		$sql="SELECT * FROM fooditems ";
$result=mysqli_query($link,$sql);
if (mysqli_num_rows($result)>0)
 {
    	while($row=mysqli_fetch_array($result)) 
    	
    {
 	
  ?>
  <div class="col-md-4" style="display: inline-flex; color: black;">
	<form method="post" action="orders.php?action=add&id=<?php echo $row["food_id"];?>">
		
		<div style="border: 1px solid #333;
	background-color: pink;
	border-radius: 5px;padding: 16px; " >
			<img src="assets/<?php echo  $row["new_file_name"];?>" width="250" height="250">
-			<h4><?php echo $row["food_name"];?></h4>
 		     <h4><?php echo $row["food_price"];?></h4>
 		     <input type="text" name="quantity" value="1">
 		     <input type="hidden"name="hidden_name" value="<?php echo $row["food_name"];?>"/>
 		   <input type="hidden"name="hidden_price" value="<?php echo $row["food_price"];?>"/>
 		  <input type="submit" name="ORDER NOW" style="margin-top: 5px;" value="ORDER NOW" onclick="orders.php" />
		</div>
	</div>
	</form>
</div>

<?php 
  }
} 
?>
</section>
     

	    <section class="section">
           <table style="border-collapse: collapse;">
           	<tr>
           	<td >
	    	<p>FAST  Get all your Stephy’s favorites delivered right to your doorstep with StephysDelivery® on Uber Eats or DoorDash.</p></div>
	    	</td>
	    	<td>
				<p>RELIABLE  Get free medium Fries every Friday, exclusively with Mobile Order & Pay with any min. ksh100 purchase.*</p></td>
				<td >
				<p>EFFICIENT  Pick up your order. Select Drive Thru pick up and tell us your order code at the speaker. </p></td>
			</tr>
		</table>
		 </section>
			<section class="images"><div class="row">
				<div class="column">
				<img src="DOWNLOADS/nairobi.jpg" alt="" height="350"  width="350">
				<p>BEST RESTAURANT IN NAIROBI</p>
				<div class="textbox">
   
              
           </div>
			</div>
				
				<div class="column">
				<img src="DOWNLOADS/trophy.jpg" alt="" height="350"  width="350" >
                 <p>AWARD WINNING RESTAURANT</p>
				<div class="textbox">
   
               
           </div>
			</div>
				<div class="column">
				<img src="DOWNLOADS/family.jpg" alt="" height="350"  width="350" >
				<p>FAMILY RESTAURANT THERE IS ALWAYS A FAMILY DISCOUNT EVERY TUESDAYS AND FRIDAYS</p>
					<div class="textbox">
   
               
           </div>
			</div>
				
				
				
			</div>
		</section>
			</section>
			<section class="table" >
				<table>
				
              
				<tr>
					
            <td >
            	<h1>ABOUT US</h1>
            	We guarantee you’ll love it.
               History 
               Leadership
               Mission 
               Vission
               Our food
               Your questions
               Our brances
               Recalls and alerts
               Digital accessibility
               News and notificatons
                </td>
            
             <td >
             	<h1>SERVICES</h1>
             	WI-FI
             	Delivery
             	Download app
             	Mobile order and pay
             	Play places
             	Reservations
             	Birthdays
             	Baby showers
             	Weddings
             	Management 
             	Working with us 
             	Apply now

              </td>
             
            <td >
            	<h1>CONTACT US</h1>
            	Donation
            	Employment
            	Mobile app feedback
            	Restaurant feedback
            	Social media platforms

             </td>  
                
				</tr>
             
         
         </table>
           
			</section>
		
			<footer>

		
				<li>PRIVACY POLICY</li>
				<li>TERMS AND CONDITIONS</li>
				<li>SITE MAP</li>
				
           
       
            <img src="DOWNLOADS/instagram.jpg"height="100"width="100"> 
             <img src="DOWNLOADS/fb.jpg"height="100"width="100">     
              <img src="DOWNLOADS/twitter.jpg"height="100"width="100">        
				
         
         
	
	   </footer>

	</body>
	</html>