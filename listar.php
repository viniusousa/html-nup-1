<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Música</title>
    <link rel="stylesheet" href="./style.css" />
  </head>
  <body>
  <?php
    include 'app/views/nav.php';
    require_once 'app/models/Lembrete.php';

    $id =$_GET['id'];
    $lista = new Lembrete();
    $return = $lista->listar($id);
?>
    <main class="main-musica">
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
      <section class="container-letra">
        <h3><?php echo $return[0];?></h3>
        <p class="musica-letra">
        <?php echo $return[1];?>
        </p>
      </section>
    </main>
  </body>
</html>
