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
        background-color: #f0f5ff; /* Azul claro para o fundo */
    }
    header {
        background-color: #007bff; /* Azul */
        color: #fff;
        padding: 10px;
        text-align: center;
    }
    nav {
        background-color: #e7f0ff; /* Azul claro */
        width: 200px;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
    }
    nav ul {
        list-style-type: none;
        padding: 0;
    }
    nav ul li {
        padding: 10px;
        border-bottom: 1px solid #ccdfff; /* Azul claro para a borda */
    }
    footer {
        background-color: #007bff; /* Azul */
        color: #fff;
        padding: 10px;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    .content {
        margin-left: 220px; /* Ajuste de acordo com a largura da barra lateral */
        padding: 20px;
    }
    /* Estilos específicos para o formulário de login */
    .login-form {
        margin: 50px auto;
        width: 300px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .login-form input[type="text"],
    .login-form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    .login-form input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
</head>
<body>

<header>
    <h1>Login</h1>
</header>

<div class="content">
    <div class="login-form">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>
</div>

<footer>
    <p>Rodapé - © 2024</p>
</footer>

</body>
</html>
