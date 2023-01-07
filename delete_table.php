<?php
include_once 'connect.php';
$link=null;
$result=mysqli_query($link,"SELECT * FROM user_details");
?>

<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <link rel="stylesheet" href="table.css">
     <title>Users</title>
   </head>
   <body>
     
     <div >
       <table>
        <thead>
          <th>ID</th>
          <th>First Name</th>
          <th>Second Name</th>
          <th>Email Address</th>
          <th>Date of Birth </th>
          <th>Phone Number</th>
          <th>Gender</th>
          <th>Username</th>
          <th>Password</th>
         <th>Action</th>
         
        </thead>
        <tbody>

         
            <?php
            
  $i=0;
  
  while($row = mysqli_fetch_assoc($result)) {
  ?>
              
             
              <tr class="<?php if(isset($clasname))echo $clasname;?>">
                <td><?php echo $row["User_id"]?></td>
                <td><?php echo $row["First_name"]?></td>
                <td><?php echo $row["Second_name"]?></td>
                <td><?php echo $row["Email_address"]?></td>
                <td><?php echo $row["Date_of_Birth"]?></td>
                <td><?php echo $row["Phone_No"]?></td>
                <td><?php echo $row["Gender"]?></td>
                <td><?php echo $row["User_name"]?></td>
                <td><?php echo $row["Password"]?></td>
                <td><a href="delete.php?user_id=<?php echo $row["user_id"]; ?>">Delete</a></td>
                
              </tr>
              
            
	          <?php  
            $i++;
            }
          ?>
       </tbody>
   </table>
</div>
</body>
</html>
