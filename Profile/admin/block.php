<?php
include("includes/connection.php");
$record_id=$_GET['record_id'];

$sql="select * from users where email='$record_id'";


$recordset=mysqli_query($connection,$sql);

$record=mysqli_fetch_array($recordset);
if($record['block_user']==0)
{
	$sql="
	UPDATE users 
	SET 
	block_user='1' where email='$record_id';
	";
	//echo $sql;
	//exit;
	mysqli_query($connection,$sql);
	header("location:users.php?block=1");
}
else{
	$sql="
	UPDATE users 
	SET 
	block_user='0' where email='$record_id';
	";
	mysqli_query($connection,$sql);
	header("location:users.php?block=0");
}


?>