<?php

// assim que o botao de logout for apertado, a sessão vai ser destruida junto com as requisições e vai levar o usuario para uma localização de sua preferencia, nesse caso o index

    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();

?>