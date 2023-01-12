<?php


class Router
{

    public static function home(){
        include 'app/views/home.php';
    }

    public static function form(){
        include 'app/views/form.php';
    }

    public static function sobre(){
        include 'app/views/sobre.php';
    }

    public static function error(){
        include 'app/views/error.php';
    }

    public static function save(){
        include 'app/models/Lembrete.php';

        $formData = filter_input_array(INPUT_POST,FILTER_SANITIZE_SPECIAL_CHARS);

        $post = new Lembrete();

        $post->formData = $formData;

        $post->salvar();

        header('location: /');

    }

  

}