<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('E-mail: ' . $_POST['email']);
        // print_r('<br>');
        // print_r('Telefone: ' . $_POST['telefone']);
        // print_r('<br>');
        // print_r('sexo: ' . $_POST['genero']);
        // print_r('<br>');
        // print_r('Nascimento: ' . $_POST['data_nascimento']);
        // print_r('<br>');
        // print_r('Cidade: ' . $_POST['cidade']);
        // print_r('<br>');
        // print_r('Estado: ' . $_POST['estado']);
        // print_r('<br>');
        // print_r('Endereço: ' . $_POST['endereco']);

        include_once('config.php');

        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO membro(nome,telefone,email,endereco)
        VALUE ('$nome','$telefone','$email','$endereco')");

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style_nav.css">
    <link rel="shortcut icon" href="./img/icon.png">
    <title>IMW Caraguá</title>
</head>
<body>
<body>
        <header>
            <a class="logo" href="index.php"><img src="./img/logo.png" alt="logo"></a>
            <nav>
            </nav>
            <a class="cta" href="login.php">Login</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="login.php">Login</a>
            </div>
        </div>
    <div class="box">
        <form action="index.php" method="POST">
                <h1>Cadastro</h1>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="input" placeholder="Nome Completo" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="input" placeholder="Telefone" required>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="input" placeholder="E-mail">
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="input" placeholder="Endereço">
                </div>
                <br>
                <input type="submit" name="submit" id="submit" value="Enviar">
        </form>
    </div>
    <script type="text/javascript" src="mobile.js"></script>
</body>
</html>