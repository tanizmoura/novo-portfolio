<?php  


require_once'carregar_info_trabalho.php';
$proxId = $id_trabalho;
$antId = $id_trabalho;
if($id_trabalho < $qtdTrabalhos) {
  $proxId++;
}

if ($id_trabalho > 1) {
  $antId--;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Awesome Icon -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Estilo -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>tanisemoura.devweb</title>
  </head>
  <body id="home">

    <nav class="navbar-expand-lg"> <!-- Navegação -->

      <div class="container">

        <div class="row">
          <div class="col-6 col-sm-7 col-md-8 col-lg-9">
            <!-- Hamburguer -->
            <button class="btn navbar-toggler icon-hamburguer" data-toggle="collapse" data-target="#nav-target">
              <i class="fas fa-bars fa-2x"></i>
            </button> 

            <div id="nav-target" class="collapse mt-menu navbar-collapse links_trabalho"> <!-- Links Navegação -->
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="index.php#home">.home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#sobre">.sobre</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#trabalhos">.trabalhos</a>
                </li>
              </ul>
            </div> <!-- /Links Navegação -->
          </div>

          <div class="col-6 col-sm-5 col-md-4 col-lg-3">

              <h2  class="titulo">Tm.devweb</h2>
              <p class="yellow subtitulo-sm">tanisemoura.devweb</p>
 

          </div>
        </div>

      </div>
    </nav> <!-- /Navegação -->  
  
    
    <div class="container">

      <div class="row">
               
        <div class="col-md-8">
          <h2 style="text-transform: uppercase;"><?= $dados[0]['titulo'] ?></h2>
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

            
            <? foreach ($imagens as $key => $imagem) {?>
              <div class="carousel-item">
                <img class="d-block w-100" src="<?= $imagem['link'] ?>" alt="Primeiro Slide">
              </div>
            <? } ?>

            <div class="carousel-item active">
              <img class="d-block w-100" src="<?= $imagens[0]['link'] ?>" alt="Primeiro Slide">
            </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <i class="fas fa-chevron-left fa-4x yellow"></i>
              <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <i class="fas fa-chevron-right fa-4x yellow"></i>
              <span class="sr-only">Próximo</span>
            </a>
          </div>
        </div>

        <div class="col-md-4 mt-4" id="info">
          <h4>Cliente:</h4> 
          <p><? if ($dados[0]['cliente'] == '') {
            echo '---';
          } else {
            $dados[0]['cliente'];
          }
          ?></p> <br>
          <h4>Descrição:</h4> 
          <p><?= $dados[0]['descricao'] ?></p><br>
          <h4>Tecnologias:</h4> <p><?= $dados[0]['tecnologias'] ?></p><br>
          <h4>Participação:</h4> <p><?= $dados[0]['participacao'] ?></p><br>

          <div class="botoes mt-3">
            <a href="trabalho.php?id=<?=$antId?>&qtd=<?=$qtdTrabalhos?>" class="btn btn-dark"><<</a>
            <a href="<?= $dados[0]['link'] ?>" class="btn btn-dark">Demonstração</a>
            <a href="trabalho.php?id=<?=$proxId?>&qtd=<?=$qtdTrabalhos?>" class="btn btn-dark">>></a>
          </div>

        </div>
      </div>

    </div>


    <div style="clear: both;"></div>

    <footer> <!-- Footer -->

      <div class="container mt-4"> <!-- Container -->

        <ul>

          <li>
            <a href="tanise.mourax3@hotmail.com"><i class="fas fa-envelope fa-3x"></i></a>
          </li>

          <li>
            <a href="https://wa.me/5551985200476"><i class="fab fa-whatsapp fa-3x"></i></a>
          </li>

          <li>
            <a href="https://github.com/tanizmoura"><i class="fab fa-github-alt fa-3x"></i></a>
          </li>

          <li>
            <a href="https://www.linkedin.com/in/tanise-moura"><i class="fab fa-linkedin-in fa-3x"></i></a>
          </li>
           
        </ul>

         <h4>tanisemoura.devweb</h4>

      </div> <!-- /Container -->

    </footer> <!-- /Footer -->

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
