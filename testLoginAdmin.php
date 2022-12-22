<?php
    session_start();
    /* print_r($_REQUEST); */
    if(isset($_POST['submit']) && !empty($_POST['nomeadmin']) && !empty($_POST['senhaadmin']))
    {
        //Acessa o sistema
        include_once('config.php');
        $nomeadmin = $_POST['nomeadmin'];
        $senhaadmin = $_POST['senhaadmin'];

        /* print_r('Email: ' . $email);
        print_r('Senha: ' . $senha); */
        
        /* Verifica a existencia de cadastro e ve se tem ou não */

        $sql = "SELECT * FROM usradmin WHERE nomeadmin = '$nomeadmin' and senhaadmin = '$senhaadmin'";

        $result = $conexao->query($sql);

        /* Fim verifica a existencia de cadastro e ve se tem ou não */


        /* print_r($sql);
        print_r($result); */

        if(mysqli_num_rows($result) < 1)
        {
            //Não Existe Cadastro
            unset($_SESSION['nomeadmin']);
            unset($_SESSION['senhaadmin']);
            header('Location: login-admin.php');
        }
        else
        {
            //Existe Cadastro e redireciona ao sistema criando uma sessão.
            $_SESSION['nomeadmin'] = $nomeadmin;
            $_SESSION['senhaadmin'] = $senhaadmin;
            header('Location: home-admin.php');
        }
    }
    else
    {
        //Nao Acessa pq n tem registro e vai pra pagina de login
        header('Location: login-admin.php');
    }

?>