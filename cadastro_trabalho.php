<?php  

require_once'carregar_info_index.php';

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
  <body>
    
    <div class="container">
      <h1 class="pt-2">Cadastro de Trabalhos</h1>
      <form method="post" action = "cadastro.php?cadastro=1">
        
        <input type="text" class="form-control mt-2" name="titulo" placeholder="título">
        <textarea name="descricao" class="form-control mt-2" placeholder="descrição"></textarea>
        <input type="text" class="form-control mt-2" name="link" placeholder="link">
        <input type="text" class="form-control mt-2" name="cliente" placeholder="cliente">
        <input type="text" class="form-control mt-2" name="tecnologias" placeholder="tecnologias">
        <input type="text" class="form-control mt-2" name="participacao" placeholder="participacao">
        <button type="submit" class="btn btn-dark mt-2">Enviar</button>
        <?if(isset($_GET['inserido']) && $_GET['inserido'] == 1) {?>
          <p class="pt-2">Trabalho inserido com sucesso</p>
        <? } ?>
        <?if(isset($_GET['inserido_erro']) && $_GET['inserido_erro'] == 1) {?>
          <p class="pt-2 text-danger">Alguns campos precisam serem preenchidos!</p>
        <? } ?>
      </form>

      <h1 class="pt-2">Cadastro de Imagens</h1>
      <form method="post" action = "cadastro.php?cadastro=2">
        

        <select name="id_trabalho" class="form-control mt-2">
          <? foreach ($dados as $indice => $trabalho) { ?>
          
          <option value="<?= $trabalho['id_trabalho'] ?>"><?= $trabalho['titulo'] ?></option>

          <? } ?>

        </select>

        <input type="text" class="form-control mt-2" name="link_img" placeholder="link da imagem">
        <select name="tipo_img" class="form-control mt-2">
          <option value="1">Miniatura</option>
          <option value="2">Normal</option>
        </select>

        <button type="submit" class="btn btn-dark mt-2">Enviar</button>

        <?if(isset($_GET['inserido']) && $_GET['inserido'] == 2) {?>
          <p class="pt-2">Imagem inserida com sucesso</p>
        <? } ?>

        <?if(isset($_GET['inserido_erro']) && $_GET['inserido_erro'] == 2) {?>
          <p class="pt-2 text-danger">Alguns campos precisam serem preenchidos!</p>
        <? } ?>

      </form>
    </div>


    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>

  </body>
</html>
