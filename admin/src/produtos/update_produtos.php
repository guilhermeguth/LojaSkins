<?php
	require "../../conecta.php";
	require "../../lib/funcoes.php";

	$produto['pronom'] = $_POST['inp_pronom'];
	$produto['procomp'] = $_POST['inp_procomp'];
	$produto['prolarg'] = $_POST['inp_prolarg'];
	$produto['proalt'] = $_POST['inp_proalt'];
	$produto['propesbru'] = $_POST['inp_propesbru'];
	$produto['propesliq'] = $_POST['inp_propesliq'];
	$produto['provalven'] = $_POST['inp_provalven'];
	//$imageminterna =  ($_FILES['inp_proimgint']);
	// $imagemexterna =  ($_FILES['inp_proimgext']);

	$id = $_POST['id'];
	foreach ($produto as $col => $valor){
		if($valor === ''){
			get_error_msg("Preencha todos os campos obrigatórios!!!");
		}
	}
		$sql = "update produtos set pronom = '{$produto['pronom']}',
									procomp = '{$produto['procomp']}',
									prolarg = '{$produto['prolarg']}',
									proalt = '{$produto['proalt']}',
									propesbru = '{$produto['propesbru']}',
									propesliq = '{$produto['propesliq']}',
									provalven = '{$produto['provalven']}'
		where procod = '{$id}'";

		if (!(mysqli_query($con,$sql))){
			die(mysqli_error($con));
			exit;
		}

		get_success_msg("Produto Alterado com Sucesso!");
?>