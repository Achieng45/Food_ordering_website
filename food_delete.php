<?php
require_once("connect.php");
$link=connect();
$food_id=$_GET['foodid'];
$sql="DELETE FROM fooditems WHERE food_id='$food_id'";
$results=mysqli_query($link,$sql);




if($results) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($link);
}


?>
