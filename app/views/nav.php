<?php
    $array=['<a href="/"> Home </a>','<a href="/form">Cadastrar</a>','<a href="/sobre">Sobre</a>'];  

?>

<link rel="stylesheet" href="app/views/style.css">

<header>
        <nav>
        <?php 
            foreach($array as $value){
                echo $value;
            }
        ?> 
        </nav>
</header>