<!DOCTYPE html>
<html lang = "pt-br">
  <head>
    <title>PHP - Cadastro </title>
  </head>
  <body>
    <h1> Cadastrar Uurário </h1> 
    <form method = "POST" action = "processa.php">
      <label> Nome: </label>
      <input type = "text" name = "nome" placeholder = "Digite o nome completo "><br><br>

      <label>E-mail:</label>
      <input type = "email" name = "email" placeholder = "Digite o seu e-mail. ">

      <input type = "submit" value = "Cadastrar"
    </form>
  </body>
</html>