<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="/img/favicon-16x16.png"/>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GUTH SKIN STORE - Inicio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>   
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#"><img src="img/LogoSMB.png" width="50px" height="25px"></a>  
    <a class="navbar-brand" href="#">GUTH SKIN STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Inicio</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="produtos.html">Produtos</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="promocao.php">Promoções<span class="sr-only">(Página atual)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sobre.html">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contato.html">Contato</a>
        </li>
      </ul>            
    </div>
    <div class="btnPainelADM">
      <a target="_blank" href="admin/index.html" class="btn btn-primary">Painel Administrativo</a>
    </div>
  </nav>
  <br>
<div class="container">
        <div class="container" id="produto">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                    include 'admin/conecta.php';
                    $sql = "select * from produtos";
                    $query = mysqli_query($con, $sql);
                    while ($p = mysqli_fetch_array($query)) {
                        $template = "
                        <div class='col'>
                                
                                <div class='card text-white bg-dark mb-3'>
                                    <h3 class='card-title'>{$p['pronom']}</h3>
                                    <img class='d-block w-100 h-100' src='admin/src/produtos/img/{$p['proimgint']}'>
                                    <p class='card-text'>Complemento: {$p['procomp']}<br>Largura: {$p['prolarg']}<br>Altura: {$p['proalt']}<br>Peso Líquido: {$p['propesliq']}<br>Peso Bruto: {$p['propesbru']}</p>
                                    <div class='card-footer'>
                                      <h5 class='card-title'>Valor de Venda: R$ {$p['provalven']}</h5>
                                      <a href='#' class='btn btn-primary'>COMPRAR</a>
                                    </div>
                                </div>
                        </div>
                        ";  
                        echo $template;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <footer id="footernormal" class="footer mt-auto py-3 bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h5 class="card-title">REDES SOCIAIS</h5>
        <a target="_blank" href="https://www.facebook.com/guilhermeguthzahn/"><img src="img/RedesSociais/facebook.png"></a>
        <a target="_blank" href="https://www.instagram.com/guuiguth/"><img src="img/RedesSociais/instagram.png"></a>
        <a target="_blank" href="https://twitter.com/GuilhermeGuthZ"><img src="img/RedesSociais/twitter.png"></a>
        <a target="_blank" href="https://api.whatsapp.com/send/?phone=55049988740497&text&app_absent=0"><img src="img/RedesSociais/whatsapp.png"></a>
      </div>
      <div class="col-sm">
        <h5 class="card-title">ENDEREÇO</h5>
        Av. São Paulo, 2999 - Ed. Corleone, Centro<br>
        89870-000 - Pinhalzinho - SC<br>
      </div>
      <div class="col-sm">
        <h5 class="card-title">CONTATO</h5>
        +55 (11) 95230-8512<br>
        contato@guthskinstore.com.br
      </div>
    </div>
  </div>
  <div>
    Todos os direitos reservados a GUTH STORE SKINS™
  </div>
</footer>
</body>
</html>