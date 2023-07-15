<?php

    session_start();

    // print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['senha']))
    {
        //Acessa
        include_once('config.php');
        $user = $_POST['user'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM membro WHERE user = '$user' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['user']);
            unset($_SESSION['senha']);
            header('location: login.php');
        }
        else
        {
            $_SESSION['user'] = $user;
            $_SESSION['senha'] = $senha;
            $_SESSION['nome'] = $nome;
            header('location: sistema.php');
        }
    }
    else
    {
        //Não Acessa
        header('location: login.php');
    }
?>