<?php

    // Verifica se houve POST e se o usuário e/ou a senha estão vazias
    if (!empty($_POST) AND (empty($_POST['user']) OR empty($_POST['password']))) {
        header("Location: ./login.php"); exit;
    }

    // Tenta se conectar a um banco de dados MySQL
    $hostname="localhost";
    $bancodedados="didimbote-joao";
    $usuario="root";
    $senha="";
    
    $conexao= new mysqli($hostname, $usuario, $senha, $bancodedados);
    
    $user=($_POST['user']);
    $password=($_POST['password']);

    // Validação do usuário/senha digitados
    $sql = "SELECT `id`, `name`, `level` FROM users WHERE (user = '$user') AND (pass = '$password') AND (active = 1) LIMIT 1";
    $query = $conexao->query($sql);

    if (mysqli_num_rows($query) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
       echo "Login inválido!"; 
       header("Location: ../pages/home.php"); exit;
       exit;
    } else {
        //Salva os dados encontados na variável $resultado
        $result = mysqli_fetch_assoc($query);
        
        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION)) session_start();

        // Salva os dados encontrados na sessão
        $_SESSION['UserID'] = $result['id'];
        $_SESSION['UserName'] = $result['name'];
        $_SESSION['UserLevel'] = $result['level'];

        // Redireciona o visitante
        header("Location: ../pages/views.php"); exit;
    }
  
?>