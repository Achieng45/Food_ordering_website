<?php
function connect(){
$server ="localhost";
$username ="root";
$password ="";
$database ="stephys";

$link =mysqli_connect($server,$username,$password,$database) or die
("Could not connect".mysqli_connect_error());
return ($link);
}

function setData($sql){
$link = connect();
if(mysqli_query($link,$sql)){
echo "Success";
}
else
{
echo "Error".mysql_error($link);
}
}

function getData($sql){
$link = connect();
$results = mysqli_query($link,$sql);
$rows = array();

if(mysqli_num_rows($results)>0){
	while ($row =mysqli_fetch_assoc($results)) {
		$rows[]=$row;
	}
	return $rows;
}
}
?>