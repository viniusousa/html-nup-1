<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cadastro</title>
    <link rel="stylesheet" href=".app/views/style.css">
  </head>
  <body>
    <?php
        require_once 'app/views/nav.php';
    ?>
    <main class="main-cadastro">
      <section class="container-musica">
        <h3 class="titulo-lista">Lista de Músicas</h3>
        <ul class="lista">
        <?php 
                $content = file_get_contents("data/dados.json");
                $arrayContent = json_decode($content); 
                ?>
                
                <?php 
                if(!empty($content)){
                foreach($arrayContent as $value){ ?>
                    <li><a href="listar.php?id=<?php echo $value->codigo; ?>"> <?php   echo $value->titulo.'<br>' ; ?> </a></li>
                <?php  }};?>
        </ul>
      </section>
      
      <section class="formulario">
        <h3>Cadastrar Música</h3>
        <form class="lista" method="POST" action="/form/save">
          <div class="cad-letra">
            <label for="nome">Título</label>
            <input type="text" name="titulo" id="nome" />
          </div>
          <div class="cad-letra">
            <textarea
              name="detalhe"
              id="cad-letra"
              cols="50"
              rows="30"
              placeholder="Insira a letra da música"
            ></textarea>
          </div>
          <input class="button-form" type="submit" value="Cadastrar" name='enviar'>   
        </form>
      </section>
    </main>
  </body>
</html>
