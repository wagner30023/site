<?php

//Esta função sempre vai verifica se existe o arquivo para ser incluido
//Se este arquivo existe é incluido caso contrário da erro 404
function includeFile($path)
{
    if(!file_exists($path)){
        header("HTTP/1.0 404 Not Found");
        require_once __DIR__ . '/../view/404.php';
    }

    require_once $path;
}