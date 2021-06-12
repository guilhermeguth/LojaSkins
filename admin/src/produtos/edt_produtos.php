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
            <h1>Editar Produto</h1>
        </div>
        <div id="breadcrumb">
            <?php
            require "../../conecta.php";

            $id = (isset($_GET['procod']) ? $_GET['procod'] : 0);

            $sql = mysqli_query($con,"select * from produtos where procod = $id") or die(mysqli_error($con));
            $listagem = mysqli_fetch_array($sql);
            $descricao = $listagem['pronom'];
            $comprimento = $listagem['procomp'];
            $largura = $listagem['prolarg'];
            $altura = $listagem['proalt'];
            $pesobruto = $listagem['propesbru'];
            $pesoliquido = $listagem['propesliq'];
            $precovenda = $listagem['provalven'];
            ?>
            <a href="../dashboard/dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="edt_dado_slide.php?id=<?php echo $id ?>" class="current">Alteração Produtos</a>
        </div>
        <div class="container-fluid">
            <?php include ("../../inc/inc_loading.php"); ?>
            <div class="row-fluid">
                <div class="span12">
                    <form id="frm_edt" name="frm_edt" method="post" class="form-horizontal" action="update_produtos.php" enctype="multipart/form-data">
                        <input style="display: none" hidden value=<?php echo" '$id' "?> name="id"/>

                        <div class="control-group">
                            <label class="control-label" for="inp_pronom">Descrição*:</label>
                            <div class="controls">
                               <input type="text" name="inp_pronom" id="inp_pronom" class="input-xlarge" placeholder="Informe..."   <?php  echo" value='$descricao'"?>></div>
                           </div>
                           <div class="control-group">
                            <label class="control-label" for="inp_procomp">Comprimento*:</label>
                            <div class="controls">
                             <input type="text" name="inp_procomp" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$comprimento'"?>></div>
                         </div>    
                         <div class="control-group">
                            <label class="control-label" for="inp_prolarg">Largura*:</label>
                            <div class="controls">
                                <input type="text" name="inp_prolarg" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$largura'"?>></div>
                         </div>
                         <div class="control-group">
                            <label class="control-label" for="inp_proalt">Altura*:</label>
                            <div class="controls">
                                <input type="text" name="inp_proalt" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$altura'"?>></div>
                         </div>
                         <div class="control-group">
                            <label class="control-label" for="inp_propesbru">Peso Bruto*:</label>
                            <div class="controls">
                                <input type="text" name="inp_propesbru" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$pesobruto'"?>></div>
                         </div>            
                         <div class="control-group">
                            <label class="control-label" for="inp_propesliq">Peso Líquido*:</label>
                            <div class="controls">
                                <input type="text" name="inp_propesliq" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$pesoliquido'"?>></div>
                         </div>    
                         <div class="control-group">
                            <label class="control-label" for="inp_provalven">Preço de Venda*:</label>
                            <div class="controls">
                                <input type="text" name="inp_provalven" class="input-xlarge" placeholder="Informe..." <?php  echo" value='$precovenda'"?>></div>
                         </div>    

                         <div class="control-group">
                            <div class="controls">
                                <div class="alert alert-danger">
                                    (*) Campos com preenchimento obrigatório;
                                </div>
                            </div>
                        </div>


                        <?php
                        include "../../inc/inc_submit.php";
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include ("../../inc/inc_base_footer.php");
    ?>

    <script>
    function alert_msg() {
        $('#alert_modal').modal('show');
        $('#alert_modal p').html("");
        $('#alert_footer').html("");
    }
</script>

    <script>
        $('#frm_edt').ajaxForm({
            success : function(resposta){
                $('#alert_modal p').append(resposta);
                if (resposta == "<div class='alert alert-success'>Produto Alterado</div>") {
                    $('#alert_footer').append("<div onclick='location.reload();' class='btn btn-primary'>Fechar</div>");
                }else{
                    $('#alert_footer').append("<div class='btn btn-primary'>Fechar</div>");
                }
            }
        });
    </script>


</body>
</html>
