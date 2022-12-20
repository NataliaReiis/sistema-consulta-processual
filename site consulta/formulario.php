<?php

	if(isset($_POST['submit']))
	{
        include_once('config.php');
        $nome = $_POST['nome'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$telefone = $_POST['telefone'];
		$cpf = $_POST['cpf'];
        $confirma_senha = $_POST['confirma_senha'];
        $result = mysqli_query($conexao, "INSERT INTO cadastro (nome,email,telefone,cpf,senha,confirma_senha) VALUES ('$nome','$email','$telefone','$cpf','$senha','$confirma_senha')");
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usúario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="voltar">
    <a href="login.php">Voltar</a>
    </div>
    <img class="img-titulo" src="img/figura.png" alt="">
    <div class="titulo">
        <h2>Cadastro de Usuário</h2>
     </div>
    <div class="box">
        <form action="formulario.php" method="POST">
        <fieldset>
            <legend>Cadastre-se</legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelinput">Nome Completo</label>
            </div>
            <div class="inputBox">
                <input type="text" name="email" id="e-mail" class="inputUser" required>
                <label for="email" class="labelinput">E-mail</label>
            </div>
            <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelinput">telefone</label>
            </div>
            <p class="sexocolor">Sexo</p>
            <input type="radio" id="feminino" name="genero" value="feminino">
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="masculino" name="genero" value="feminino">
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="feminino">
            <label for="outro">Outro</label>
            <br><br>
            <div class="inputBox">
                <input type="text" name="cpf" id="cpf"  class="inputUser" required>
                <label for="cpf" class="labelinput">CPF:</label>
            </div>
            <div class="inputBox">
                <input type="password" name="senha" id="password"  class="inputUser" required>
                <label for="senha" class="labelinput" >Senha</label>
            </div>
            <div class="inputBox">
                <input type="password" name="confirma_senha" id="confirm_password"  class="inputUser" required>
                <label for="senha" class="labelinput">Confirme sua senha</label>
            </div>
            <input type="submit" name="submit" id="submit">
        </fieldset>
      </form>
    </div>
    <footer>
        <h6>© copywriting 2023 - Escritório de advogacia - Todos os direitos reservados</h6>
    </footer>
    
</body>
</html>