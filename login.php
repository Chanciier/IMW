<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style_nav.css">
    <link rel="shortcut icon" href="./img/icon.png">
</head>
<body>
        <header>
        <a class="logo" href="index.php"><img src="./img/logo.png" alt="logo"></a>
            <nav>
            </nav>
            <a class="cta" href="index.php">Cadastro</a>
            <p class="menu cta">Menu</p>
        </header>
        <div class="overlay">
            <a class="close">&times;</a>
            <div class="overlay__content">
                <a href="index.php">Cadastro</a>
            </div>
        </div>
    <div class="box">
            <h1>Login</h1>
            <br>
            <form action="testLogin.php" method="POST">
            <input class="input" type="text" name="user" placeholder="User">
            <br><br>
            <input class="input" type="password" name="senha" placeholder="Password">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
    <script type="text/javascript" src="mobile.js"></script>
</body>
</html>