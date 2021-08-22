<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
	<link rel="stylesheet" a href="style.css">
	<link rel="stylesheet" a href="css\font-awesome.min.css">
</head>
<body>

	<div class="container">
	<img src="image/profile.png" />
		<div><h2> Login</h2>
		<form  action="validation.php" method="post">
			<div class="form-input">
				<input type="text" name="user" placeholder="Enter the User Name" />	
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
		</form>
		</div>
	</div>
</body>
</html>