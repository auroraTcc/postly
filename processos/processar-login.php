<?php
    require ("../conexao.php");
    require ("../classes/Autenticacao.php");

    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $login = new Autenticacao($conn);

        if($login->verificarUsuario($email, $senha)){
            header("Location: ../index.html");
            exit;
        }else{
            header("Location: login.html?erro1");
            exit;
        }

    }
?>