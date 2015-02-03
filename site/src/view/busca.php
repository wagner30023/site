<?php include_once "header.php"; ?>

<?php
if (!isset($_GET['busca'])):
    header("Location:<a href=\"\#busca indefinida/> </a>");
else:
    $resultado = busca($_GET['busca']);
endif;
?>
<div class="container">
    <div class="page-header">
        <h1>Pesquisa:
            <small>
                <?php
                $paginas = $resultado["Paginas"];
                $produtos = $resultado["Produtos"];
                $servicos = $resultado["Servicos"];
                ?>
            </small>
        </h1>
    </div>
    <?php
    if (count($paginas) == 0 && count($produtos) == 0 && count($servicos) == 0) {
        echo "<p>O termo pesquisado não foi encontrado</p>";
    } else {
        echo "<p>O termo pesquisado foi encontrado nas seguintes páginas:</p>";
        if (count($paginas)) {
            foreach ($paginas as $pagina) {
                if ($pagina["nome"] == "index") {
                    echo "<a href=\"/home\">Home</a><br />";
                } else {
                    echo "<a href=\"/{$pagina['nome']}\">{$pagina['titulo']}</a><br />";
                }
            }
        }

      
        if (count($produtos)) {
            echo "<a href=\"/produto\">Produtos</a><br />";
        }
        if (count($servicos)) {
            echo "<a href=\"/servico\">Serviços</a><br />";
        }
        
        
        if (count($servicos)) {
            echo "<a href=\"/empresa\"> Empresa </a><br />";
        }
    }
    ?>
</div>

<?php include_once "footer.php"; ?>