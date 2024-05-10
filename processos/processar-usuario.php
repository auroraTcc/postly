<?php
    require ("../conexao.php");
    require ("../classes/Usuario.php");

    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $passcript = password_hash($senha, PASSWORD_DEFAULT);
        $usuario = new Usuario($nome, $sobrenome, $email, $passcript);
        $sql = "INSERT INTO usuario (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$passcript')";

        if($conn->query($sql) === true) {
            header("Location: ../index.php");

        }else{
            echo "Erro ao cadastrar: " . $conn->error;
        }
    
    }
?>