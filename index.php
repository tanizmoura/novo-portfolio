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
    
    <nav class="navbar-expand-lg"> <!-- Navegação -->

      <div class="container">
        <!-- Hamburguer -->
        <button class=" btn navbar-toggler mt-2 mb-2 icon-hamburguer" data-toggle="collapse" data-target="#nav-target">
          <i class="fas fa-bars fa-2x  "></i>
        </button>
      </div>

      <div id="nav-target" class="collapse navbar-collapse caixa-navegacao"> <!-- Links Navegação -->
        <img src="img/perfil.png" >
        <ul>
          <li>
            <a href="#home">
              .Home
            </a>
          </li>
          <li>
            <a href="#sobre">
              .Sobre
            </a>
          </li>
          <li>
            <a href="#trabalhos">
              .Trabalhos
            </a>
          </li>
        </ul>
      </div> <!-- /Links Navegação -->

    </nav> <!-- /Navegação -->

    <section id="home" class="caixa-conteudo" > <!-- Home -->
     
     <div class="container">
       <div class="row"> <!-- Informações -->
         
         <div class="col-12 titulos-home mt-5 d-none d-sm-block"> <!-- Título MD -->
           <h1>TaniseMoura</h1><h1>.devweb</h1>
         </div> <!-- /Título MD -->

         <div class="col-12 titulos-home mt-5 d-block d-sm-none">  <!-- Título SM-->
           <h1>Tm</h1><h1>.devweb</h1>
           <p class="yellow subtitulo-sm">tanisemoura.devweb</p>
         </div> <!-- /Título SM-->

         <div class="col-6 paragrafos-home"> <!-- Mini Descrição -->

           <p>
            /DESENVOLVEDORA EM FASE DE CONSTRUÇÃO <br>
            /ILUSTRADORA NAS HORAS VAGAS<br>
            /ETERNA AMANTE DA TECNOLOGIA<br><br>

            /PORTO ALEGRE - RS
          </p>

         </div><!-- /Mini Descrição -->

         <div class="col-6 redes-sociais"> <!-- Redes Sociais -->
           <ul>

             <li>
               <a href="tanise.mourax3@hotmail.com"><i class="fas fa-envelope fa-4x"></i></a>
               <a href="tanise.mourax3@hotmail.com" class="d-none d-lg-inline">tanise.mourax3@hotmail.com</a>
             </li>

             <li>
               <a href="https://wa.me/5551985200476"><i class="fab fa-whatsapp fa-4x"></i></a>
               <a href="https://wa.me/5551985200476" class="d-none d-lg-inline">+55 51 98520-0476</a>
             </li>

             <li>
               <a href="https://github.com/tanizmoura"><i class="fab fa-github-alt fa-4x"></i></a>
               <a href="https://github.com/tanizmoura" class="d-none d-lg-inline">Github</a>
             </li>

              <li>
               <a href="https://www.linkedin.com/in/tanise-moura"><i class="fab fa-linkedin-in fa-4x"></i></a>
               <a href="https://www.linkedin.com/in/tanise-moura" class="d-none d-lg-inline">LinkedIn</a>
             </li>
             
           </ul>
         </div><!-- /Redes Sociais -->
       </div> <!-- /Informações -->
     </div>
    </section> <!-- /Home -->

    <section id="sobre" class="caixa-conteudo"> <!-- Sobre-->
     
     <div class="container"> <!-- Container -->
       
       <div class="row"> <!-- Row -->
         
         <div class="col-md-6"> <!-- Info 1-->
            
           <h1 class="subtitulos display-4">.Sobre</h1>
           
           <p class="mt-2">Tecnologia e desenvolvimento sempre foram áreas 
            que me interessavam, porém, eu não sabia ao certo 
            em quais dos diversos nichos eu me encaixaria. Fiz 
            um curso introdutório durante o ensino médio que 
            era mais focado em aplicações, onde aprendi muito 
            sobre lógica de programação e de cara foi algo que 
            me interessou muito. Mais tarde resolvi tentar 
            cursar Design de Games pois, além da 
            programação, eu gostava muito de desenhar e 
            como também adorava jogos achei que esse seria 
            um bom ponto de interseção entre estes dois 
            interesses.</p>

         </div> <!-- /Info 1 -->

         <div class="col-md-6"> <!-- Info 2 -->
         
           <p>Depois disso resolvi ir para algo totalmente diferente: Design de Moda. Não vou entrar em muitos detalhes em como eu fui parar lá, só quis citar pois tudo isso faz parte da minha trajetória até então e também porque lá melhorei muito minha noção estética. Pois bem, por um tempo achei que tinha encontrado ali o meu caminho mas por vários motivos acabei trancando o curso. Mas foi durante uma conversa relembrando da parte de mim que amava programar que eu acabei comprando um curso de desenvolvimento web da Udemy e estou cursando já faz alguns meses.</p>
         </div> <!-- /Info 2 -->

         <div class="col-12 mt-4"> <!-- Skills -->

          <h1 class="subtitulos display-5 d-inline-block yellow mr-3">html5</h1>
          <h1 class="subtitulos display-5  d-inline-block  yellow mr-3">css3</h1>
          <h1 class="subtitulos display-5  d-inline-block  yellow mr-3">Bootstrap</h1>
          <h1 class="subtitulos display-5  d-inline-block  yellow mr-3">javascript</h1>
          <h1 class="subtitulos display-5  d-inline-block yellow mr-3">es6</h1>
          <h1 class="subtitulos display-5  d-inline-block yellow mr-3">MySQL</h1>
          <h1 class="subtitulos display-5 yellow  d-inline-block">php</h1>

         </div> <!-- /Skills -->

       </div> <!-- /Container -->

     </div> <!-- /Row -->

    </section> <!-- /Sobre-->

    <section id="trabalhos" class="caixa-conteudo"> <!-- Trabalhos -->

     <div class="container"> <!-- Container -->

      <h1 class="subtitulos display-4">.Trabalhos</h1> <!-- Título -->

      <div class="row">      
        <? foreach ($dados as $key => $trabalho) { ?>
        <div class="col-md-4 container-overlay">         

          <a href="trabalho.php?id=<?= $trabalho['id_trabalho'] ?>&qtd=<?=$qtdTrabalhos?>" class="">
            <img src="<?= $trabalho['link'] ?>" class="img-fluid">
            <p class="texto"><?= $trabalho['titulo'] ?></p>
          </a>         

        </div>  

        <? } ?>
        
        
      </div>
       
       
           
     </div> <!-- /Container -->

    </section> <!-- /Trabalhos -->

    <div style="clear: both;"></div>

    <footer> <!-- Footer -->

      <div class="container"> <!-- Container -->

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
