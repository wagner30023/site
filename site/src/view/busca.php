<?php include_once "header.php"; ?>

<?php
$busca = filter_input(INPUT_GET, "busca");

if ($busca) {
    $resultado = busca($busca);
} else {
    header("Location:/");
}

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
<<<<<<< HEAD
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
=======
    <?php
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
>>>>>>> 0ff6e3b5f89aadf36e7dda2c2b5e6f505732919a
            }
        }
    }

<<<<<<< HEAD

    if (count($produtos)) {
        echo "<a href=\"/produto\">Produtos</a><br />";
=======
      
        if (count($produtos)) {
            echo "<a href=\"/produto\">Produtos</a><br />";
        }
        if (count($servicos)) {
            echo "<a href=\"/servico\">Serviços</a><br />";
        }
>>>>>>> 0ff6e3b5f89aadf36e7dda2c2b5e6f505732919a
    }
    if (count($servicos)) {
        echo "<a href=\"/servico\">Serviços</a><br />";
    }
}
?>
</div>

<?php include_once "footer.php"; ?>
