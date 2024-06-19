<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de Login</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        max-width: 100%;
        text-align: center;
    }
    h1 {
        color: #4CAF50;
    }
    input[type="email"],
    input[type="password"],
    input[type="submit"] {
        width: calc(100% - 20px);
        padding: 15px;
        margin: 10px 0;
        border: none;
        border-radius: 10px;
        box-sizing: border-box;
        background-color: #f0f0f0;
        font-size: 16px;
        color: #333;
    }
    input[type="email"],
    input[type="password"] {
        padding-left: 17px;
        background-repeat: no-repeat;
        background-position: 10px center;
        background-size: 20px 20px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
    }
</style>
</head>
<body>



<div class="container">
    <h1>Login</h1>
    <div class="login-form">
        <form id="login-form" action="{{ route('login') }}" method="post">
            @csrf
            <input type="email" id="email" name="email" placeholder="E-mail" value="{{ old('email')}}" required>
            @error('email') <span>{{ $message }} </span> @enderror
            <input type="password" id="password" name="password" placeholder="Senha" value="{{ old('password')}}" required>
            @error('password') <span>{{ $message }} </span> @enderror
            <input type="submit" value="Logar" id="submit-button">
        </form>
    </div>
</div>
</body>
</html>