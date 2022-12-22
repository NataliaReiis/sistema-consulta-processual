<?php
if(isset($_POST['submit']))
{
    include_once('config.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,cpf,senha) VALUES ('$nome','$email','$telefone','$cpf','$senha')");
    header('Location: login-usuario.php');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>usuário</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header> 
        <div class="logo"><a href="login-admin.php"><h1>Logo</h1></a></div>
        <p class="admin"><img src="img/admin.png" alt="">Admin</p>
        <a  class="sair" href="login-admin.php"> Sair </a>
    </header>
    <div class="voltar">
        <a href="home-admin.php">Voltar</a>
    </div>
    <div class="titulo-new-relatorio">
        <img  src="img/figura.png" alt="">
        <h1>Registro de novo relatório</h1>
        <p>Escritório de advogacia Tal</p>
        <p>Preencha os campos abaixo, para novo cadastro.</p>
    </div>
    <section class="form-acompanhamento">
        <form action="" method="">
            <div>
                <label for="nome" >Nome:</label>
                <input type="text"id="nome" />
            </div>
            <div>
                <label for="cpf" >CPF:</label>
                <input type="text"id="nome" />
            </div>
            <div>
                <label for="acao" >Ação:</label>
                <input type="text"id="acao" />
            </div>
            <div>
                <label for="n-processo" >Processo Nº:</label>
                <input type="text"id="n-processo" />
            </div>
            <div>
                <label for="vara" >Vara / Cartório :</label>
                <input type="text"id="vara" />
            </div>
            <div>
                <label for="instacia" >Instância:</label>
                <input type="text" id="vara" />
            </div>
            <div>
                <label for="parte-acionante" >Parte Acionante:</label>
                <input type="text" id="parte-acionante" />
            </div>
            <div>
                <label for="parte-acionada" >Parte Acionada:</label>
                <input type="text" id="parte-acionada" />
            </div>
            <div>
                <label for="fase" >Fase em que se encontra o processo:</label>
                <input type="text" id="fase" />
            </div>
            <div>
                <label for="msg" >Observações:</label>
                <textarea name="" id="" cols="30" rows="20"></textarea>
            </div>
            <input type="button" name="enviar" id="enviar" value="Enviar">
        </form>
    </section>
    <footer>
        <h6>© copywriting 2023 - Escritório de advogacia - Todos os direitos reservados</h6>
    </footer>
</body>
</html>