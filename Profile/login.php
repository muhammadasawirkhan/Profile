<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer Login System</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container">
 	<?php include("includes/header.php");?>
	<div class="row1"> 

	<?php include("includes/menu.php");?>
	<div class="pages">
		
		<div class="register-form">
				<?php
				if(isset($_GET['login']))
				{
					echo "<font color='red'>Unable to login. Check your credentials.</font>";
				}
				if(isset($_GET['logout']))
				{
					echo "<font color='red'>You have been logged out. Thanks for using our website.</font>";
				}
				if(isset($_GET['block']))
				{
					echo "<font color='red'>You have been blocked by CPS Admin.</font>";
				}
				?>
				<form class="login_form" action="login_user.php" method="POST" >
				<h3>Login</h3>
				
				<input type="email" name="email" value="" placeholder="Enter your Email" />
				<br/>
				
				<input type="password" name="password2" value="" placeholder="Enter your Password" />
				<br/>
				<input class="login" type="submit" name="btnLogin" value="Login!"/>
			</form>


		</div>		
	</div>

	</div>
	<?php include("includes/footer.php");?>
	
</div>
</body>
</html>