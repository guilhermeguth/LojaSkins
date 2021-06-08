<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php
	include ("../../inc/inc_base_header.php");
	?>
</head>
<body>
	<?php
	include ("../../inc/inc_header.php");
	?>
	<div id="content">
		<div id="content-header">
			<h1>Lista de Produtos</h1>
		</div>
		<div id="breadcrumb">
			<a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
			<a href="list_produtos.php" class="current">Listar Produtos</a>
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span12">
					<form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="edt_dado.php" enctype="multipart/form-data">
						<div class="widget-box">
							<div class="widget-title">
								<h5>Lista de Produtos</h5>
							</div>
							<div class="widget-content nopadding">
								<table class="table table-bordered data-table">
									<thead>
										<tr>
											<th>Código</th>
                                            <th>Descrição</th>
                                            <th>Comprimento</th>
                                            <th>Largura</th>
                                            <th>Altura</th>
                                            <th>Peso Bruto</th>
                                            <th>Peso Líquido</th>
											<th>Preço de Venda</th>
										</tr>
									</thead>
									<tbody>
										<?php
										require "../../conecta.php";

										$sql = mysqli_query($con,"select * from produtos order by procod asc");
										$nome_tabela = 'produtos';
										$nome_coluna_id = 'procod';
                                        $nome_coluna_id = 'pronom';
                                        $nome_coluna_id = 'procomp';
                                        $nome_coluna_id = 'prolarg';
                                        $nome_coluna_id = 'proalt';
                                        $nome_coluna_id = 'propesbru';
                                        $nome_coluna_id = 'propesliq';
										$nome_coluna_id = 'provalven';

										while ($listagem = mysqli_fetch_array($sql)) {
											$procod = $listagem['procod'];
											$descricao = $listagem['pronom'];
                                            $comprimento = $listagem['procomp'];
                                            $largura = $listagem['prolarg'];
                                            $altura = $listagem['proalt'];
                                            $pesobruto = $listagem['propesbru'];
                                            $pesoliquido = $listagem['propesliq'];
											$precovenda = $listagem['provalven'];
											?>
											<tr class="grade_">
												<td><?php echo $procod ?></td>
                                                <td><?php echo $descricao ?></td>
                                                <td><?php echo $comprimento ?> mts</td>
                                                <td><?php echo $largura ?> mts</td>
                                                <td><?php echo $altura ?> mts</td>
                                                <td><?php echo $pesobruto ?> kg</td>
                                                <td><?php echo $pesoliquido ?> kg</td>
												<td>R$ <?php echo $precovenda ?></td>
												<td>
													<a class="btn btn-small btn-primary" href="edt_produtos.php?procod=<?php echo $procod ?>"/><i class='icon-edit icon-white'></i> Editar</a>
													<a class="btn btn-small btn-danger" href="exc_produtos.php?procod=<?php echo $procod ?>"; onclick='return confirm("Deseja excluir o Produto selecionado?");'><i class='icon-remove-circle icon-white'></i> Excluir</a>
												</td>
											</tr>
											<?php
										}
										;
										?>
									</tbody>
								</table>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php
	include ("../../inc/inc_base_footer.php");
	?>
	<script src="../../js/jquery.dataTables.min.js"></script>
	<script src="../../js/unicorn.tables.js"></script>
</body>
</html>
