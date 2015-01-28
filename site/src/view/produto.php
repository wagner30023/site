
<html lang="pt-br">
    <body>
        <?php include 'header.php'; ?>

        <div class="container">
            <div class="page-header">
                <h1>Produtos</h1>
            </div>
            <?php
            $produtos = getPage("produto");
            foreach ($produtos as $produto):
                ?>
                <div class="col-sm-3">
                    <h2><?php echo $produto["nome"]; ?></h2>
                    <p><?php echo $produto["descricao"]; ?></p>
                    <button class="btn btn-info">Detalhes </button>
                </div>
                <?php
            endforeach;
            ?>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>