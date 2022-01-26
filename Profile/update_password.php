<?php 
include('includes/connection.php');
$msg="";
$old_password=$_POST['old_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$email=$_POST['email'];
	//echo $password;
	//echo $flag;
	//exit;
	
	if($new_password!=$confirm_password)
	{
		$msg="Passwords are divergent.";
	}
	else if($new_password==$old_password)
	{
		$msg="Old password can't be used.";
	}
	
	//echo $flag;
	if($msg=="")
	{	
		$sql="update users set password='$new_password' where email='$email'"	;
		$records=mysqli_query($connection,$sql);
		$msg="1";
		header("location:change_password.php?email=$email&option=1&msg=1");
		

	}
	else{
		header("location:change_password.php?email=$email&option=1&msg=$msg");

	}
?>