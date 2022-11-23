<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>

<div class="container">
		<form action="" method="post">
			<h2><?=_("Register")?></h2>

			<input placeholder="Username" type="text" name="username" required>
			<input placeholder="Password" type="password" name="password" required>	
			<input placeholder="Confirm password" type="password" name="password_conf" required>
			<input class="register" type="submit" name="action" value="Register">

		</form>
	</div>

</body>
</html>