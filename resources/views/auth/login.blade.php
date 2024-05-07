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
    <div class="box">
        <form action="{{ route("login-proses") }}" method="POST">
            @csrf
            <h2>Login</h2>
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
            <div class="group">
                <a href="#">Forgot Password</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
        </form>
    </div>
    
</body>
</html>