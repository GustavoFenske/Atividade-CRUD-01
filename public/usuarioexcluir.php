<?php

if(isset($_GET["id"])) {

    include "./table.php";

    $query = DELETE * FROM usuarios where id =  .$_GET["id"]; 
    $resultado = mysql_query($conn, $query);

    if($resultado){


    }
}














?>