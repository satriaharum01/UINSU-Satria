
<!DOCTYPE html>
<html>
<head>
	<title>Login Ke Webstie Satria Harumi</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body style="background-image: 'img/loginbackground.jpg'">
		
		<form action="login.php" method="POST" class="loginform">
		<h2>Form Login</h2>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="user_nama"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="Password" name="user_pass"></td>
			</tr>

		</table>
		<div class="pilihan">
		<input class="btn tambah" type="submit" name="tombol" value="Login">	
		</div>
	</form>
	<?php

	require_once "app/player.php";
	if (isset($_POST['tombol'])) {
	
	$player = new Player();
  	$rows = $player->login();
	
	}
	?>
</body>
</html>