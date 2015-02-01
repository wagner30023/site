<?php
    $resultado = busca($_POST["busca"]);
?>
<div class="container">
    <div class="page-header">
        <h1>Pesquisa: <small><?php echo $_POST["busca"]; ?></small></h1>
    </div>
    <?php
        $paginas = $resultado["Paginas"];
        $produtos = $resultado["Produtos"];
        $servicos = $resultado["Servicos"];
        
        if (count($paginas) == 0 && count($produtos) == 0 && count($servicos) == 0) {
            echo "<p>O termo pesquisado não foi encontrado</p>";
        } else {
            echo "<p>O termo pesquisado foi encontrado nas seguintes páginas:</p>";
            if (count($paginas)) {
                foreach ($paginas as $pagina) {
                    if ($pagina["nome"] == "index") {
                        echo "<a href=\"/\">Home</a><br />";
                    } else {
                        echo "<a href=\"/{$pagina['nome']}\">{$pagina['titulo']}</a><br />";
                    }
                }
            }
            if (count($produtos)) {
                echo "<a href=\"/produtos\">Produtos</a><br />";
            }
            if (count($servicos)) {
                echo "<a href=\"/servicos\">Serviços</a><br />";
            }            
        }
    ?>
</div>