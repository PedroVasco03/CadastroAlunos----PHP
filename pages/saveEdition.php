<?php
    include_once('../class/config.php');

    if (isset($_POST['update'])) 
    {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        $email=$_POST['email'];
      
        $sqlUpdate = "UPDATE users SET `name`='$name',`user`='$user', `pass`='$pass', `email`='$email' WHERE id='$id'";

        $result=$conexao->query($sqlUpdate);
        // header("Location : ver_jogadores.php");
    }
    else
    header("Location : views.php");

?>