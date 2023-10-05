<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre agora</title>
</head>
<body>
    <!-- Formulário de Login -->
<form action="validation.php" method="post">
  <fieldset>
  <legend>Dados de Login</legend>
      <label for="txUser">Usuário</label>
      <input type="text" name="user" id="txUser" maxlength="25" />
      <label for="txPassword">Senha</label>
      <input type="password" name="password" id="txPassword" />

      <a href="../pages/home.php"><input type="submit" value="Entrar" /></a> 
  </fieldset>
  </form>
</body>
</html>
