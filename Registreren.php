<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div>
		<h3>PHP - Login and Registratie Page</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div>
			<form action="register_query.php" method="POST">	
				<h4 class="text-success">Registreer hier</h4>
				<hr style="border-top:1px groovy #000;">
					<label>Gebruikersnaam</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Wachtwoord</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">Register</button>
				</div>
				<a href="index.php">Login</a>
			</form>
		</div>
	</div>
</body>
</html>