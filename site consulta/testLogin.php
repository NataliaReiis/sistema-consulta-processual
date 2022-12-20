<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha']))
    {
        //Acessa o sistema
        include_once('config.php');
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        /* print_r('Email: ' . $email);
        print_r('Senha: ' . $senha); */
        
        /* Verifica a existencia de cadastro e ve se tem ou não */

        $sql = "SELECT * FROM cadastro WHERE cpf = '$cpf' and senha = '$senha'";

        $result = $conexao->query($sql);

        /* Fim verifica a existencia de cadastro e ve se tem ou não */


        /* print_r($sql);
        print_r($result); */

        if(mysqli_num_rows($result) < 1)
        {
            //Não Existe Cadastro
            unset($_SESSION['cpf']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            //Existe Cadastro e redireciona ao sistema criando uma sessão.
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
        //Nao Acessa pq n tem registro e vai pra pagina de login
        header('Location: login.php');
    }

?>