<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="{{asset('CSS/Login.css')}}">
</head>
<body>
<div class="login-container">
    <h2>Kirish</h2>
    <form action="{{route('login.check')}}" method="POST">
        @csrf
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" required>

        <label for="password">Password</label>
        <input type="password" name='password' id="password" placeholder="Enter your password" required>

        <div class="checkbox-container">
            <input type="checkbox" id="remember-me">
            <label for="remember-me" style="margin: 0;">Remember me</label>
            <a href="#" style="margin-left: auto;">Forgot password?</a>
        </div>

        <button type="submit">Kirish</button>
    </form>
    <div class="register">
        Akkauntingiz yo'qmi? <a href="../index.html">Ro'yhatdan o'tish</a>
    </div>
</div>
</body>
</html>
