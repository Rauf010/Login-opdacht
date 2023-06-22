<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>
	<div>
		<h3 class="text-primary">PHP - Login and Registratie Page</h3>
		<hr style="border-top:1px dotted #ccc;"/>
			<div>
			<?php if(isset($_SESSION['message'])): ?>
				<div class="alert alert-<?php echo $_SESSION['message']['alert'] ?> msg"><?php echo $_SESSION['message']['text'] ?></div>
			<?php 
				endif;
				// clearing the message
				unset($_SESSION['message']);
			?>
			<form action="login_query.php" method="POST">	
				<h4 class="text-success">Log hier in</h4>
				<hr style="border-top:1px groovy #000;">
				<div class="form-group">
					<label>Gebruikersnaam</label>
					<input type="text" class="form-control" name="username" />
				</div>
				<div class="form-group">
					<label>Wachtwoord</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<br />
				<div class="form-group">
					<button class="btn btn-primary form-control" name="login">Login</button>
				</div>
				<a href="registreren.php">registreren</a>
			</form>
		</div>
	</div>
</body>
</html>