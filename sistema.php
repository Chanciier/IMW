<?php

    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['user']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['user']);
        unset($_SESSION['senha']);
        header('location: login.php');
    }
    $logado = $_SESSION['user'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM membro WHERE id LIKE '%$data%' or nome LIKE '%$data%' or telefone LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM membro ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sistema.css">
    <link rel="stylesheet" href="./css/style_nav.css">
    <link rel="shortcut icon" href="./img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Sistema</title>
</head>
<body>
    <header>
        <a class="logo" href="index.php"><img src="./img/logo.png" alt="logo"></a>
        <a class="cta" href="sair.php">Sair</a>
        <p class="menu cta">Menu</p>
    </header>
    <div class="overlay">
        <a class="close">&times;</a>
        <div class="overlay__content">
            <a href="sair.php">Sair</a>
        </div>
    </div>
    <br><br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-quarter">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    
    <div class="m-5">
        <table class="table text-white table-bg table-responsive-md">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Endereço</th>
            <th scope="col">...</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" .$user_data['id']."</td>";
                    echo "<td>" .$user_data['nome']."</td>";
                    echo "<td>" .$user_data['telefone']."</td>";
                    echo "<td>" .$user_data['email']."</td>";
                    echo "<td>" .$user_data['endereco']."</td>";
                    echo "<td>Ações</td>";
                    echo "<tr>";
                }
            ?>
        </tbody>
        </table>
    </div>
    <script type="text/javascript" src="mobile.js"></script>
    <script type="text/javascript" src="search.js"></script>
</body>
</html>