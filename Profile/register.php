<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container"> 
	<?php include("includes/header.php");?>
	<div class="row1"> 

	<?php include("includes/menu.php");?>
	<div class="pages">
		
		
		<div class="register-form">
			<div class="message">
				<?php
			if(isset($_GET['msg'])&&$_GET['msg']=='record_exists'){
				echo "<font color='red'>Record already exists.</font>";
	
			}
			else if(isset($_GET['msg']) && $_GET['msg']=='insert')
			{
				echo "<font color='green'>Record has been inserted.</font>";


			}
			else if(isset($_GET['msg'])){
				echo "<font color='red'>".$_GET['msg']."</font>";
	
			}
			?>
			</div>
			<form action="register_user.php" method="POST" enctype="multipart/form-data">
				<h1>Register</h1>
				
				<input type="text" name="name" value="" placeholder="Enter your name"/>
				<br/>
				
				<input type="email" name="email" value="" placeholder="Enter Email" />
				<br/>
				
				<input type="password" name="password2" value="" placeholder="Enter Password" />
				<br/>
				<br/>
				<label class="profile_picture">Select Profile Picture:</label>
				<input class="file" type="file" name="image" value=""/>
				<br/>
				
				<input class ="register" type="submit" name="btnSubmit" value="Register!"/>
			</form>





		</div>		
	</div>

	</div>
	<?php include("includes/footer.php");?>
	
</div>
</body>
</html>