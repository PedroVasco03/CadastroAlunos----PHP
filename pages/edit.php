<?php
   if(!empty($_GET['id']))
   {
    include_once('../class/config.php');

    $id=$_GET['id'];
    $sqlSelect="SELECT * FROM users WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    // print_r($result);
    if ($result->num_rows > 0) 
    {
        while($user_data = mysqli_fetch_assoc($result))
        {
            $name=$user_data['name'];
            $user=$user_data['user'];
            $pass=$user_data['pass'];
            $email=$user_data['email'];
            $level=$user_data['level'];
            $active=$user_data['active'];
            
        }
        // print_r($nome);
    }
    else
    {
        header('Location: views.php');
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicao</title>
</head>
<body>
<a href="views.php">Voltar</a>
    <div class="box">
        <form action="saveEdition.php" method="POST">
        <fieldset>
                <legend><b>Formulário de Usuarios</b></legend><br>
                <div class="inputBox">
                    <input type="text" name="name" id="name" class="inputUser" value="<?php echo $name ?>" required>
                    <label for="name" class="labelInput">Nome completo</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="user" id="user" class="inputUser" value="<?php echo $user ?>" required>
                    <label for="user" class="labelInput">Usuario</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="pass" id="pass" class="inputUser" value="<?php echo $pass ?>" required>
                    <label for="pass" class="labelInput">Senha</label>
                </div><br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
               
                <input type="hidden" name="id" value="<?php echo $id ?>">
                 <input type="submit" name="update" id="update" value ="Actualizar"><br>
            </fieldset>
        </form>
        <br>
        <!-- <div class="ler"><a href="ver_jogadores.php">Ler</a></div> -->
    </div>
</body>
</html>