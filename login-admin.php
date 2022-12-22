<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="voltar">
        <a href="login-usuario.php">Voltar</a>
        </div>
    <img class="img-titulo" src="img/figura.png" alt="">
    <div class="titulo">
       <h2>Dayse Mota Advogada</h2>
    </div>
    <div class="tela-login">
        <h1>Login Admin</h1>
        <form action="testLoginAdmin.php" method="POST">
            <input class="input" type="text" placeholder="Admin" name="nomeadmin">
            <br><br>
            <input class="input" type="password" placeholder="Senha" name="senhaadmin">
            <br><br>
            <input class="input" id="button" type="submit" value="Enviar" name="submit">
        </form>
    </div>
    <footer class="login-footer">
        <h6>© copywriting 2023 - Escritório de advogacia - Todos os direitos reservados</h6>
    </footer>
</body>
</html>