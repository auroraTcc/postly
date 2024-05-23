<?php
    require ("../conexao.php");
    require ("../classes/Autenticacao.php");

    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $login = new Autenticacao($conn);

        if($login->verificarUsuario($email, $senha)){
            header("Location: ../index.php");
            exit;
        }else{
            header("Location: ../visao/login.php?erro1");
            exit;
        }

    }
?>