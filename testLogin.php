<?php
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //Acessa o sistema
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        /* print_r('Email: ' . $email);
        print_r('Senha: ' . $senha); */
        
        /* Verifica a existencia de cadastro e ve se tem ou não */

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        /* Fim verifica a existencia de cadastro e ve se tem ou não */


        /* print_r($sql);
        print_r($result); */

        if(mysqli_num_rows($result) < 1)
        {
            //Não Existe Cadastro
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            //Existe Cadastro e redireciona ao sistema criando uma sessão.
            $_SESSION['email'] = $email;
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