<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
	<div class="container">
		<div class="blueBg">
			<div class="box signin">
				<h2>Sudah Punya Akun?</h2>
				<button class="signinBtn">Login</button>
			</div>
			<div class="box signup">
				<h2>Tidak punya akun?</h2>
				<a class="button" href="{{ route('register') }}">Register</a>
			</div>
		</div>

		<div class="formBx">
			<div class="form signinForm">
				<form action="{{ route("login-proses") }}" method="POST">
					@csrf
					<h3>Login</h3>
					<input type="text" placeholder="Username" name="username">
					@error('username')
					<div>
					<small style="color:red;">{{ $message }} !</small>
					</div>
					@enderror
					<input type="password" placeholder="Password" name="password">
					@error('password')
					<div>
					<small style="color:red;">{{ $message }} !</small>
					</div>
					@enderror
					<input type="submit" value="Login">
					<a href="#" class="forgot">Lupa Password</a>
				</form>
			</div>
		</div>
	</div>

	<script>
		const signinBtn = document.querySelector('.signinBtn');
		const signupBtn = document.querySelector('.signupBtn');
		const formBx	= document.querySelector('.formBx');
		const body 		= document.querySelector('body');

		signupBtn.onclick = function(){
			formBx.classList.add('active');
			body.classList.add('active');
		}

		signinBtn.onclick = function(){
			formBx.classList.remove('active');
			body.classList.remove('active');
		}
	</script>
</body>
</html>