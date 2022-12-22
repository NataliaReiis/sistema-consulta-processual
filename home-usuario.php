<?php
    session_start();
        include_once('config.php');
        if((!isset($_SESSION['cpf']) == true) and (!isset($_SESSION['senha']) == true))
        {
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login-usuario.php');
        }
        $logado = $_SESSION['cpf'];
        $sql = "SELECT * FROM usuarios ORDER BY id DESC"; #Erro: Está imprimindo todos os nomes da base de dados.
        $result = $conexao->query($sql);
        $user_data = mysqli_fetch_assoc($result)
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
        <div class="logo"><a href="login-admin.html"><h1>Logo</h1></a></div>
        <a  class="sair" href="sair.php"> Sair </a>
    </header>
    <div class="titulo-usuario">
        <img  src="img/figura.png" alt="">
        <h1 class="titulo1">Seja Bem Vindo(a)! <?php echo '<br>'.$user_data['nome'] ?></h1>
        <p>Escritório de advogacia Tal</p>
        <p>Foi encontrado o seguinte relatório vinculado ao CPF logando.</p>
    </div>
    <section class="form-acompanhamento">
        <form action="" method="">
            <div>
                <label for="nome" >Nome: 
                    <?php
                    while($user_data = mysqli_fetch_assoc($result)) 
                    {
                        echo "<p>".$user_data['nome']."</p>";
                    }
                ?></label>
                <input type="text"id="nome" />
            </div>
            <div>
                <label for="cpf" >CPF:</label>
                <input type="text"id="cpf" />
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
        </form>
    </section>
    <section class="contato">
        <p>Surgiu alguma dúvida? Entre em Contato: </p> 
        <p> Telefone: (00) 0000-0000 / WhatsApp: (00) 0000-0000</p>
        <p> Av. Cassiano Ricardo, 1708, Jd. Alvorada, Salvador/BA CEP: 00000-00</p>
    </section>
    <footer>
        <h6>© copywriting 2023 - Escritório de advogacia - Todos os direitos reservados</h6>
    </footer>
</body>
</html>