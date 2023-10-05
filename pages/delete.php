<?php

    if (!empty($_GET['id'])) {
        include_once('../class/config.php');

    $id=$_GET['id'];
    $sqlSelect="SELECT * FROM users WHERE id=$id";
    $result = $conexao->query($sqlSelect);
    // print_r($result);
    if ($result->num_rows > 0) 
    {
       $sqlDelete="DELETE FROM users WHERE id=$id";
       $result = $conexao->query($sqlDelete);
    }
    }
    header('Location: ./views.php')

?>