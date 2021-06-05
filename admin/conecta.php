<?php
    $host = "localhost:3306"; // nome do host
    $usuario = "root"; // usuario login banco
    $s = "";
    $dbase = "admin";
    $con = mysqli_connect($host,$usuario,$s,$dbase);
    if(!$con){
        echo "Erro de conexão ao banco de dados!";
    }