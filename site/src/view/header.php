<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title> Projeto PHP Site Simples </title>
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.css" /> 
        <link rel="stylesheet" href="/css/bootstrap-responsive.css" /> 
        <link rel="stylesheet" href="/css/style.css" /> 
        <link rel="stylesheet" href="/css/styles.css" /> 
        <link rel="stylesheet" href="/css/custom.css" /> 
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="/public/js/jquery-1.11.2.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>

    <body  >
        <br/><br/><br/><br/>
        <nav class="navbar navbar-fixed-top" role="navigation">
            <div class="navbar-inner navbar-fixed-top">
                <div class="container">
                    <!-- .btn-navbar esta classe é usada como alternador para o conteúdo colapsável -->
                    <!-- tudo que for escondido a menos de 940px -->
                    <button class="btn btn-navbar"  data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"> Link 1</span>
                        <span class="icon-bar"> Link 2</span>
                        <span class="icon-bar"> Link 3</span>
                        <span class="icon-bar"> Link 4</span>
                        <span class="icon-bar"> Link 5</span>
                    </button>
                    <div class="nav-collapse collapse">
                        <ul class="nav  navbar-nav" id="main-nav">
                            <li><a href="/"> <span class="icon-large icon-home"> </span> Home </a></li>
                            <li><a href="/empresa"> <span class="icon-large icon-briefcase"> </span>  Empresa  </span> </a></li>
                            <li><a href="/produto"> <span class="icon-large icon-shopping-cart"> </span>  Produtos </span> </a></li>
                            <li><a href="/servico"> <span class="icon-large  icon-list-alt"> </span>  Serviços </span> </a></li>
                            <li><a href="/contato"> <span class="icon-large  icon-envelope"> </span>  Contato </span> </a> </li>
                        </ul>
                    </div>

                    <form class="navbar-form pull-left" id="busca" action="/busca">
                        <input type="text" name="busca" class="search-query" placeholder="Pesquisar">
                        <button type="submit" class="btn"><span class="icon-search icon-large"> </span></button>
                    </form>
                </div>
              
            </div>

        </nav>

