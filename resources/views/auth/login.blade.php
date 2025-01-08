<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('CSS/Login.css') }}">
</head>
<body>
<div class="login-container">
    <h2>Login</h2>
    <form action="{{ route('MyLogin.submit') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ old('email') }}" required>
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">Login</button>
    </form>
    <div class="register">
        Don't have an account? <a href="{{ route('MyRegister') }}">Register</a>
    </div>
</div>
</body>
</html>
