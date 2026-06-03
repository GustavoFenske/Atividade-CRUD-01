<?php
    session_start();

    include("infra/db/connect.php");

    if($_SERVER['REQUEST_METHOD'] == "POST"){ //ele vai pegar as informações que foram enviadas  

        // vai pegar oque o usuario colocou no campo de login e colocar em uma variavel
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        // ele pega as variaveis usuario e senha 
        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

        // ele passa essas variaves para outra variavel
        $resultado = $conn->query($sql);

        //se o usuario fazer login, o numero de linhas vai para um, e quando nao tem login volta para zero pois a sessao e destruida
        if ($resultado->num_rows > 0){
            $_SESSION["usuario"] = $usuario;
            header("Location: public/home.php");
            exit();
        }else{
            $erro = "Usuário ou senha inválidos!";
        }
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Sitema de Login Simples</h1>

    <form method="POST">
        <label>Usuário:</label>
        <input type="text" name="usuario">
        <br>
        <label>Senha:</label>
        <input type="password" name="senha">
        <br>
        <?php
        
            if(isset($erro)){
                echo $erro;
            };

            // vai ver se tem conteudo dentro do erro e vai exibir o conteudo
        
        ?>
        <br>
        <button type="submit">Entrar</button>
    </form>

</body>
</html>