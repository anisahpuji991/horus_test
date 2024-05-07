<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horus Test</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="box" style="height: 550px !important;">
        <form action="{{ route('register-proses') }}" method="POST">
            @csrf
            <h2>Register</h2>
            <input type="text" placeholder="Username" name="username">
            @error('username')
            <small style="color:rgb(224, 57, 57);">{{ $message }} !</small>
            @enderror
			<input type="password" placeholder="Password" name="password">
            @error('password')
            <div>
            <small style="color:rgb(224, 57, 57);">{{ $message }} !</small>
            </div>
            @enderror
			<input type="text" placeholder="Nama" name="nama">
            @error('nama')
            <div>
            <small style="color:rgb(224, 57, 57);">{{ $message }} !</small>
            </div>
            @enderror
			<input type="email" placeholder="Email" name="email">
            @error('email')
            <div>
            <small style="color:rgb(224, 57, 57);">{{ $message }} !</small>
            </div>
            @enderror
			<input type="submit" value="Register">
            <div class="group">
                <a href="{{ route('login') }}">Sudah punya akun?</a>
            </div>
        </form>
    </div>
    
</body>
</html>