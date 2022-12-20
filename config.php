<?php
    /* configuração padrão para entrar no banco de dados */
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '250808';
    $dbName = 'sistemajus';
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    /* if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else{
        echo "Conexão efetuada com sucesso!";
    }   */ 
?>
 <!-- 
      if($_POST) {
        $senha          = $_POST['senha'];
        $senhaConfirma  = $_POST['senha_confirma'];
        if ($senha == "") {
            $mensagem = "<span class='aviso'><b>Aviso</b>: Senha não foi alterada!</span>";
        } else if ($senha == $senhaConfirma) {
            $mensagem = "<span class='sucesso'><b>Sucesso</b>: As senhas são iguais: ".$senha."</span>";
        } else {
            $mensagem = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
    }
-->