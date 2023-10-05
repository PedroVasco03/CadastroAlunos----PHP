<?php
    // include('protecao.php');
   if(isset($_POST['submit']))
   {
    include_once('../class/config.php');

    $name=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $level=$_POST['level'];
    $active = $_POST['active'];
    $data_register=$_POST['data_register'];
    

    
    $inserir = "INSERT INTO `users` VALUES (null, '$name', '$user', '$pass', '$email', 1, 1, NOW( ))";
    // $inserir = "INSERT INTO users (`name`, `user`, `pass`, `email`, `level`, `active` ) VALUES ('$name', '$user','$pass', '$email', $level, $active, NOW())";
   
    $result = mysqli_query($conexao, $inserir);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir</title>
</head>
<body>
<a href="#" class="voltar">Voltar</a>
    <div class="box">
        <form action="inserir.php" method="POST">
        <fieldset>
                <legend><b>Formulário de Jogadores</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div><br><br>
                
                <div class="inputBox">
                    <input type="text" name="user" id="user" class="inputUser" required>
                    <label for="user" class="labelInput">Usuario</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="password" name="pass" id="pass" class="inputUser" required>
                    <label for="pass" class="labelInput">Palavra passe</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div><br><br>

                <div class="inputBox">
                    <input type="text" name="level" id="level" class="inputUser" required>
                    <label for="level" class="labelInput">Nivel</label>
                </div><br><br>
                
                <div class="inputBox">
                    <input type="text" name="active" id="active" class="inputUser" required>
                    <label for="active" class="labelInput">Activo</label>
                </div><br><br>
               
                <label for="data_register"><b>Data de cadastro</b></label>
                <input type="date" name="data_register" id="data_register" required>
                
                 <input type="submit" name="submit" id="submit" value ="Cadastrar">
            </fieldset>
        </form>
        <div class="ler"><a href="views.php">Cadastrados</a></div>
    </div>
</body>
</html>