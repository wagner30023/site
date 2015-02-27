<?php

//Esta função pega a URL
//retorna o caminho do arquivo ou retorna um erro 404
function route() {
    $rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

    $path = str_replace('/', '', $rota['path']);

    $rotaValida = include_once __DIR__ . '/../config/config.php';

    //Verifica se tem a rota, se tiver retorna o caminho do arquivo
    if (in_array($path, array_keys($rotaValida['route']))){
        return __DIR__.'/../view/'.$rotaValida['route'][$path];
    }

    //Caso a rota não exista no arquivo de configuração retorna a pagina de erro 404
    header("HTTP/1.0 404 Not Found");
    return __DIR__.'/../view/404.php';
}