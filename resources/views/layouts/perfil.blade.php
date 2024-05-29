<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página de Informações do Usuário</title>
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
    /* Estilos específicos para exibir informações do usuário */
    .user-info {
        margin: 50px auto;
        width: 300px;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .user-info p {
        margin: 10px 0;
    }
</style>
</head>
<body>

<header>
    <h1>Informações do Usuário</h1>
</header>

<div class="content">
    <div class="user-info">
        <p><strong>Nome de usuário:</strong> JohnDoe</p>
        <p><strong>Email:</strong> johndoe@example.com</p>
        <p><strong>Data de Registro:</strong> 29 de maio de 2024</p>
    </div>
</div>

<footer>
    <p>Rodapé - © 2024</p>
</footer>

</body>
</html>
