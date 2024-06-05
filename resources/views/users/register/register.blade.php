<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela de Cadastro</title>
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
  input[type="text"],
  input[type="tel"],
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
  #datepicker {
    width: calc(100% - 20px);
    padding: 15px;
    margin: 20px 0 10px;
    border: none;
    border-radius: 10px;
    box-sizing: border-box;
    background-color: #f0f0f0;
    font-size: 16px;
    color: #333;
  }
  input[type="text"],
  input[type="tel"],
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
  <h1>Registrar-se</h1>
  <form id="registration-form" action="{{ route('register') }}" method="post" >
    @csrf
    <input type="text" id="name" name="name" placeholder="Nome" value="{{ old('name')}}" required>
    @error('name') <span>{{ $message }} </span> @enderror
    <input type="email" id="email" name="email" placeholder="E-mail" value="{{ old('email')}}" required>
    @error('email') <span>{{ $message }} </span> @enderror
    <input type="password" id="password" name="password" placeholder="Senha" value="{{ old('password')}}" required>
    @error('password') <span>{{ $message }} </span> @enderror
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Senha de Confirmação" required>
    <!--<input type="text" id="datepicker" placeholder="Data de Nascimento" required title="Preencher o campo">-->
    <input type="submit" value="Registrar" id="submit-button">
  </form>
</div>
<script>/*
document.getElementById("registration-form").addEventListener("submit", function(event) {
    event.preventDefault();
    var nome = document.querySelector('input[type="text"]').value;
    var telefone = document.querySelector('input[type="tel"]').value;
    var email = document.querySelector('input[type="email"]').value;
    var senha = document.querySelector('input[type="password"]').value;
    if (nome !== '' && telefone !== '' && email !== '' && senha !== '') {
        window.location.href = "TelaDeLogin.html";
    } else {
        alert("Por favor, preencha todos os campos.");
    }
});*/
</script>
<script>
  $(function() {
    $("#datepicker").datepicker({
      dateFormat: "dd/mm/yy",
      changeMonth: true,
      changeYear: true,
      yearRange: "-100:+0",
      maxDate: "+0",
      monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
      monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
      dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
      onSelect: function(dateText) {
        this.value = dateText;
      }
    });
  });
  
</script>
</body>
</html>