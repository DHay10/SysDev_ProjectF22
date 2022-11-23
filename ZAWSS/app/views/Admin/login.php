<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

	<div class="container">
		<form action="" method="post">
			
			<label>Username</label>
			<input type="text" name="username" required>
			<label>Password</label>
			<input type="password" name="password" required>
			<input id="login" type="submit" name="action" value="Login">

			<label class="notReg">Not registerd yet?</label>
			<a class="register" href="#">Register</a>
		</form>
	</div>

<!-- <style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	
	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
	}
	form{
		position: absolute;
		width: 90%;
	}
	.container{
		display: flex;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		width: 30%;
		height: 70vh;
		justify-content: center;
	}
	#login{
		margin-bottom:20px ;
		width: 30%;
		padding: 10px 10%;
		margin: 35px auto 30px auto;
		background-color: #fdb549;
		border: none;
		color: white;
	}
	.container input{
		display: flex;
		outline: none;
		width: 100%;
		padding: 10px 10px;
		border: solid darkgray 1px;
		border-radius: 20px;
	}
	.notReg{
		display: flex;
	}
	.register{
		position: absolute;
		text-align: center;
		background-color: #fdb549;
		width: 30%;
		line-height: 36px;
		border: none;
		color: white;
		border-radius: 20px;
		text-decoration: none;
	}
	label{
		color:#fdb549;
	}



</style> -->

</body>
</html>