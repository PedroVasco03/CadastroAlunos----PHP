<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se agora</title>
</head>
<body>
    <!-- Formulário de Login -->
<form action="validation.php" method="post">
  <fieldset>
  <legend>Informe seus dados</legend>
      <label for="txUser">Usuário</label>
      <input type="text" name="user" id="txUser" maxlength="25" />
      <label for="txPassword">Senha</label>
      <input type="password" name="password" id="txPassword" />

      <input type="submit" value="Entrar" />
      <div class="conteinerBtn">
          <a href="" class="cadastrar">Novo por aqui? efetue o cadastro agora</a>
      </div>
  </fieldset>
  </form>
</body>
</html>
