<?php

include 'app/controller/Routes.php';

$url = $_SERVER['REQUEST_URI'];

switch($url){

    case '/':
        Router::home();   
      
    break;

    case '/form':
       Router::form();
       
    break;

    
    case '/form/save':
        Router::save();
 
    break;

    
    case '/sobre':
       Router::sobre();

    break;
    

    default:
        Router::error();

    break;
        



}