<?php
	include_once("connection.php");

$query="select * from ngos";
$table=mysqli_query($dbCon,$query);

$ary=array();

while($row=mysqli_fetch_array($table))
{
	
	$ary[]=$row;
}
echo json_encode($ary);
?>
