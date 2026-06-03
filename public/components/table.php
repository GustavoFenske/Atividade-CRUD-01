<h4>Usuários Cadastrados</h4>

<table border="1" cellpadding="3">

    <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Senha</th>
    </tr>

    <?php
    
    $sqlTodosUsuarios = "SELECT * FROM usuarios"; // ele vai pegar todos os usuarios

    $resultadoTodosUsuarios = $conn->query($sqlTodosUsuarios); // vai armazenar a tabela de todos os usuarios

    while($linha = $resultadoTodosUsuarios->fetch_assoc()){

    // o fetch assoc, ele vai percorrer a tabela e armazenar o valor de linhas

        echo "  <tr>
                    <td>". $linha['id'] . "</td>
                    <td>". $linha['usuario'] . "</td>
                    <td>". $linha['senha'] . "</td>
                </tr>
        ";

        // e isso e oque vai aparecer na tabela

    }
    
    ?>

    


</table>