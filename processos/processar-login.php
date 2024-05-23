<?php
    require ("../conexao.php");
    require ("../classes/Autenticacao.php");

    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        $login = new Autenticacao($conn);

        if($login->verificarUsuario($email, $senha)){
<<<<<<< HEAD
            header("Location: ../index.php");
            exit;
        }else{
            header("Location: ../visao/login.php?erro1");
=======
            header("Location: ../index.html");
            exit;
        }else{
            header("Location: login.html?erro1");
>>>>>>> camila
            exit;
        }

    }
?>