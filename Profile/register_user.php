<?php 
$msg="";
if(count($_POST)){
	$email=$_POST['email'];
	$name=$_POST['name'];
	$password2=$_POST['password2'];
	//echo $password;
	include("includes/insert_picture.php");
	//echo $flag;
	//exit;
	
	if($email=="")
	{
		$msg="you can create an account without email.";
	}
	else if($name=="")
	{
		$msg="Name is must.";
	}
	else if($password2=="")
	{
		$msg="Please enter your password.2";
	}
	
	//echo $flag;
	if($msg=="")
	{	
		$sql="select * from users where email='$email'"	;
		$records=mysqli_query($connection,$sql);
		if(mysqli_num_rows($records)>0)
		{
			header("location:register.php?msg=record_exists");
		}
		else{
			$date1=date("d-m-Y");
			//echo $date1;
			//exit;
		$sql="insert into users(email,name,password,picture,date_created,block_user) values('$email','$name','$password2','$newfilename','$date1','0')";
		mysqli_query($connection,$sql);
		header("Location:register.php?msg=insert");
		}
	}
	else {
		header("Location:register.php?msg=$msg");
	}
}



?>