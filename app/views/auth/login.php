<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL?>/css/login.css">
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="<?= BASEURL?>/auth/register" method="post">
			<h1>Buat Akun</h1>
			<input name="username" type="text" placeholder="Username" />
			<input name="password" type="password" placeholder="Password" />
			<button name="register">Daftar</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="<?= BASEURL?>/auth/signin" method="post">
			<h1>Masuk</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<?php if (isset($_GET['status']) && $_GET['status']==1): ?>
			<span style="color: blue;">New user Added</span>
		<?php elseif (isset($_GET['status']) && $_GET['status']==0): ?>
			<span style="color: red;">Username / Password Salah</span>
			<?php endif; ?>
			<input name="username_admin" placeholder="Username" />
			<input name="password_admin" type="password" placeholder="Password" />
			<button name="login">Masuk</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Selamat Datang!</h1>
				<p>Tolong daftar</p>
				<button class="ghost" id="signIn">Masuk</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Selamat Datang!</h1>
				<p>Masukan data anda</p>
				<button class="ghost" id="signUp">Daftar</button>
			</div>
		</div>
	</div>
</div>

<footer>
</footer>
<script src="<?= BASEURL?>/js/login.js"></script>
</body>
</html>