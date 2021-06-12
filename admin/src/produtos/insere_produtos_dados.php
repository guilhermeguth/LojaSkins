<?php
//verificamos se não está vindo o campos login vaziu.
if (isset($_POST['inp_procod'])) {
    //chamamos nossa conexão com o banco.
    require "../../conecta.php";
    //chamar nossas bibliotecas para validar nossa informação recebida e retornar nossa msg.
    require "../../lib/funcoes.php";

    if(isset($_FILES['inp_proimgint'])){
       $ext = strtolower(substr($_FILES['inp_proimgint']['name'],-4)); //Pegando extensão do arquivo
       $new_name = md5($_FILES['inp_proimgint']['name']) . $ext; //Definindo um novo nome para o arquivo
       $dir = 'img/'; //Diretório para uploads 
       move_uploaded_file($_FILES['inp_proimgint']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
 }
    if(isset($_FILES['inp_proimgext'])){  
       $ext2 = strtolower(substr($_FILES['inp_proimgext']['name'],-4)); //Pegando extensão do arquivo
       $new_name2 = md5($_FILES['inp_proimgext']['name']) . $ext2; //Definindo um novo nome para o arquivo
       $dir2 = 'img/'; //Diretório para uploads 
       move_uploaded_file($_FILES['inp_proimgext']['tmp_name'], $dir2.$new_name2); //Fazer upload do arquivo
    }

    $imageminterna = $new_name; 
    $imagemexterna = $new_name2;

    $codigo =  validacao($_POST['inp_procod']);
    $descricao =  validacao($_POST['inp_pronom']);
    $comprimento =  validacao($_POST['inp_procomp']);
    $largura =  validacao($_POST['inp_prolarg']);
    $altura =  validacao($_POST['inp_proalt']);
    $pesobruto =  validacao($_POST['inp_propesbru']);
    $pesoliquido =  validacao($_POST['inp_propesliq']);
    $precovenda =  validacao($_POST['inp_provalven']);



    $sql = "insert produtos set procod = '$codigo',
                                pronom = '$descricao',
                                procomp = '$comprimento',
                                prolarg = '$largura',
                                proalt = '$altura',                            
                                propesbru = '$pesobruto',
                                propesliq = '$pesoliquido',
                                provalven = '$precovenda',
                                proimgint = '$imageminterna',
                                proimgext = '$imagemexterna'";

//executa nossa query
    if (!(mysqli_query($con,$sql))) {
        die(mysqli_error($con));
        exit ;
    }

    get_success_msg("Dados Cadastrados com Sucesso");

    ;
}