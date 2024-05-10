<?php
    $server = "localhost";
    $usuario = "root";
    $password = "";
    $database = "postly";

    $conn = new mysqli($server, $usuario, $password, $database);
    if($conn){
        // echo "Conexão realizada";
    } else {
        echo "Conexão com erro";
    };
?>