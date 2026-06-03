<?php
session_start();
if(!isset($_SESSION["usuario"])){ // se nao existir uma sessao com esse nome ele vai mandar para o diretorio abaixo
    header("Location: ../index.php");
    exit();
}

include("../infra/db/connect.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){ // vai pegar oque o usuario digitou no campo e passar para uma variavel
    $novoUsuario = $_POST['usuario'];
    $novaSenha = $_POST['senha'];

    $sql = "INSERT INTO usuarios (usuario,senha) 
    VALUES ('$novoUsuario','$novaSenha')";   // ele vai inserir o usuario que for digitado para o db

    if($conn->query($sql) === TRUE){
        echo "<script> alert('Usuário cadastrado com sucesso!')</script>";
    }else{
        echo "<script> alert('Erro ao cadastrar')</script>";
    }

    // vai verifcar se o usuario e senha estiverem corretos e vai cadastrar

};

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h3>Bem-Vindo! <?php echo $_SESSION["usuario"]; ?> </h3> 
    <!-- vai mostrar o nome do usuario logado -->
    <a href="logout.php"> Sair</a>

    <hr>
    <h4>Cadastro de Novo Usuário.</h4>
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
        
        ?>
        <br>
        <button type="submit">Cadastrar</button>

        
    </form>
    <hr>
    <?php
    
    include("components/table.php") 
    // vai puxar o script do table, tudo que rodar la vai rodar aqui

    ?>



</body>
</html>