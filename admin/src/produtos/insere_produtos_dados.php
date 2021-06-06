<?php
//verificamos se não está vindo o campos login vaziu.
if (isset($_POST['inp_login'])) {
    //chamamos nossa conexão com o banco.
    require "../../conecta.php";
    //chamar nossas bibliotecas para validar nossa informação recebida e retornar nossa msg.
    require "../../lib/funcoes.php";

    $codigo =  validacao($_POST['inp_procod']);
    $descricao =  validacao($_POST['inp_pronom']);
    $comprimento =  validacao($_POST['inp_procomp']);
    $largura =  validacao($_POST['inp_prolarg']);
    $altura =  validacao($_POST['inp_proalt']);
    $pesobruto =  validacao($_POST['inp_propesbru']);
    $pesoliquido =  validacao($_POST['inp-propesliq']);


    

    $sql = "insert produtos set procod = '{$codigo}',
                                pronom = '{$descricao}',
                                procomp = '{$comprimento}',
                                prolarg = '{$largura}',
                                proalt = '{$altura}',                            
                                propesbru = '{$pesobruto}',
                                propesliq = '{$pesoliquido}'";

//executa nossa query
    if (!(mysqli_query($con,$sql))) {
        die(mysqli_error($con));
        exit ;
    }

    get_success_msg("Dados Cadastrados com Sucesso");

    ;
}