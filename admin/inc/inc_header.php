<?php
require "../../valida.php";

?>
<div id="header">
  <h1><a href="dashboard.php">Dashboard da Turma de SIS</a></h1>
</div>
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav btn-group">
    <li class="btn btn-inverse"><a title="Configurar Dados" href="../config/form_config_dados.php"><i class="icon icon-cog"></i> <span class="text">Trocar senha</span></a></li>
    <li class="btn btn-inverse"><a title="Desconectar" href="../../log_out.php"><i class="icon icon-share-alt"></i> <span class="text">Sair</span></a></li>
  </ul>
</div>
<?php
require "../../conecta.php";
?>
<div id="sidebar">
  <a href="#" class="visible-phone"><i class="icon icon-home"></i> Inicio</a>
  <ul>
    <li><a href="../dashboard/dashboard.php"><i class="icon icon-home"></i><span>Inicio</span></a></li>

    <li class="submenu">
      <a href="#"><i class="icon icon-th-list"></i><span>Tela Principal</span></a>
      <ul>
        <li class="submenu">
          <a href="#"><i class="icon icon-th-list"></i><span>Slides</span></a>
          <ul>
            <li><a href="../slides/frm_slides.php">Cadastrar</a></li>
            <li><a href="../slides/list_slides.php">Listar</a></li>
          </ul>
        </li>
        <!-- <li><a href="../categoria/ord_cad.php">Ordenar</a></li> -->
      </ul>
    </li>

    <li class="submenu">
    <a href="#"><i class="icon icon-th-list"></i><span>Produtos</span></a>
    <ul>
      <li class="active"><a href="../produtos/form_adicionar_produtos.php">Cadastrar</a></li>
      <li><a href="../produtos/list_produtos.php">Listar</a></li>
    </ul>
  </li>
    
    <li class="submenu">
      <a href="#"><i class="icon icon-th-list"></i><span>Conheça Minha Empresa</span></a>
      <ul>
        <li class="submenu">
          <a href="#"><i class="icon icon-th-list"></i><span>Empresa</span></a>
          <ul>
           <li><a href="../empresa/frm_emp.php">Adicionar</a></li>
           <li><a href="../empresa/list_emp.php">Editar</a></li>
         </ul>
       </li>
       <!-- <li><a href="../categoria/ord_cad.php">Ordenar</a></li> -->
     </ul>
     <ul>
      <li class="submenu">
        <a href="#"><i class="icon icon-th-list"></i><span>Historia</span></a>
        <ul>
          <li><a href="../emp_historia/frm_emp.php">Adicionar</a></li>
          <li><a href="../emp_historia/list_emp.php">Editar</a></li>
        </ul>
      </li>
      <!-- <li><a href="../categoria/ord_cad.php">Ordenar</a></li> -->
    </ul>
   
  </li>

  <li class="submenu">
    <a href="#"><i class="icon icon-th-list"></i><span>Configurações de Emails</span></a>
    <ul>
      <li class="active"><a href="../config_email/list_email.php">Alterar</a></li>
    </ul>
  </li> 

  <li class="submenu">
    <a href="#"><i class="icon icon-th-list"></i><span>Usuarios</span></a>
    <ul>
      <li class="active"><a href="../usuario/form_adicionar_usuarios.php">Cadastrar</a></li>
      <li><a href="../usuario/list_usu.php">Listar</a></li>
    </ul>
  </li>

  <li class="submenu">
    <a href="#"><i class="icon icon-th-list"></i><span>Ajuda</span></a>
    <ul>
      <li><a href="../ajuda/list_cad.php">Listar</a></li>
    </ul>
  </li> 



</ul>
</div>
