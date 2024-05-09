<?php
    require ("../conexao.php");
    require ("../classes/Usuario.php");

    if(($_SERVER["REQUEST_METHOD"] == "POST")) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
    
        $usuario = new Usuario($nome, $sobrenome, $email, $senha);
        $sql = "INSERT INTO usuario (nome, sobrenome, email, senha) VALUES ('$nome', '$sobrenome', '$email', '$senha')";

        if($conn->query($sql) === true) {
            echo "Usuário cadastrado com sucesso!";
        }else{
            echo "Erro ao cadastrar: " . $conn->error;
        }
    
    }
?>