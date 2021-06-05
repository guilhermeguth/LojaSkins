<?php
//verificamos se não está vindo o campos login vaziu.
if (isset($_POST['inp_login'])) {
    //chamamos nossa conexão com o banco.
    require "../../conecta.php";
    //chamar nossas bibliotecas para validar nossa informação recebida e retornar nossa msg.
    require "../../lib/funcoes.php";

    $login =  validacao($_POST['inp_login']);
    $senha =  validacao($_POST['inp_senha']);

    $sql = "insert login set login = '{$login}',
                                   senha = '{$senha}'";

//executa nossa query
    if (!(mysqli_query($con,$sql))) {
        die(mysqli_error($con));
        exit ;
    }

    get_success_msg("Dados Cadastrados com Sucesso");

    ;
}