<?php

// criamos a variavel para o nosso banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "root";
    $db = "sistema_simples_m1";

    $conn = new mysqli($host,$user,$pass,$db); // passamos essa variavel para outra, para que facilite na hora de validações

    if($conn->connect_error){
        die("Erro na conexão!");
    }else{
        echo "<script>console.log('Banco conectado com sucesso!')</script>";
    };

    // uma mensagem de erro caso de errado, e uma mensagem se de certo

?>