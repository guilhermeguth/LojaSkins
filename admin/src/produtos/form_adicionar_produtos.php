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
            <h1>Adicionar Produtos</h1>
        </div>
        <div id="breadcrumb">
            <a href="dashboard.php" title="Pagina Inicial" class="tip-bottom"><i class="icon-home"></i> Início</a>
            <a href="form_adicionar_produtos.php" class="current">Produtos</a>
        </div>
        <div class="container-fluid">
            <?php
            include ("../../inc/inc_loading.php");
            ?>
            <div class="row-fluid">
                <div class="span12">

                    <form id="frm_cad" name="frm_cad" method="post" class="form-horizontal" action="insere_produtos_dados.php">
                        <div class="control-group">
                            <label class="control-label" for="inp_procod">Código*</label>
                            <div class="controls">
                             <input type="text" name="inp_procod" id="inpinp_procod_login" class="input-xlarge" placeholder="Informe..."  value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_pronom">Descrição*:</label>
                            <div class="controls">
                               <input type="text" name="inp_pronom" id="inp_pronom" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_procomp">Comprimento*:</label>
                            <div class="controls">
                               <input type="text" name="inp_procomp" id="inp_procomp" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_prolarg">Largura*:</label>
                            <div class="controls">
                               <input type="text" name="inp_prolarg" id="inp_prolarg" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="inp_proalt">Altura*:</label>
                            <div class="controls">
                               <input type="text" name="inp_proalt" id="inp_proalt" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_propesbru">Peso Bruto*:</label>
                            <div class="controls">
                               <input type="text" name="inp_propesbru" id="inp_propesbru" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div> 
                        <div class="control-group">
                            <label class="control-label" for="inp_propesliq">Peso Líquido*:</label>
                            <div class="controls">
                               <input type="text" name="inp_propesliq" id="inp_propesliq" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_provalven">Preço de Venda*:</label>
                            <div class="controls">
                               <input type="text" name="inp_provalven" id="inp_provalven" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_proimgint">Imagem Interna*:</label>
                            <div class="controls">
                               <input type="file" name="inp_proimgint" id="inp_proimgint" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inp_proimgext">Imagem Externa*:</label>
                            <div class="controls">
                               <input type="file" name="inp_proimgext" id="inp_proimgext" class="input-xlarge" placeholder="Informe..." value="" ></div>
                        </div>
                                       
                            <div class="control-group">
                                <div class="controls">
                                    <div class="alert alert-danger">
                                        (*) Campos com preenchimento obrigatório;
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    include ("../../inc/inc_submit.php");
                    ?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include ("../../inc/inc_base_footer.php");
?>
<!--Esta função é chamada no nosso botão para abrir uma caixa de dialogo mais bonitinha para receber a msg   -->
<script>
    function alert_msg() {
        $('#alert_modal').modal('show');
        $('#alert_modal p').html("");
        $('#alert_footer').html("");
    }
</script>

<script>
    $('#frm_cad').ajaxForm({
        success : function(resposta) {
            $('#alert_modal p').append(resposta);
            $('#alert_footer').append("<a href='#' class='btn btn-primary'>Fechar</a>");
        }
    });
</script>
</body>
</html>
