<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Processual</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <img class="img-titulo" src="img/figura.png" alt="">
    <div class="titulo">
       <h2>Acompanhamento Processual</h2>
    </div>
    <div class="tela-login">
        <p>Não tem uma conta? <a href="formulario.php">Cadastre-se</a> </p>
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">
            <input type="text" placeholder="Informe seu CPF" name="cpf">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <input id="button" type="submit" name="submit">
        </form>
    </div>

    <footer>
        <h6>© copywriting 2023 - Escritório de advogacia - Todos os direitos reservados</h6>
    </footer>
    
</body>
</html>