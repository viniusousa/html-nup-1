<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href=".app/views/style.css">
  </head>
  <body>
  <?php
        require_once 'app/views/nav.php';
    ?>
    <main>
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
    </main>
  </body>
</html>
