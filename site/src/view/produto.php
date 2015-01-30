
<div class="container text-center">
    <div class="row">
        <?php include 'header.php'; ?>

        <?php
        $pagina = getPage('produto');
        ?>
        <?php
        foreach ($pagina as $produto):
            ?>
            <div class="col-sm-3">
                <?php echo "<div class=\"col-sm-4\" id=\"{$produto['nome']}\">"; ?>
                <?php echo "<div class=\"col-sm-4\" id=\"{$produto['descricao']}\">"; 
                    echo utf8_encode("{$produto['nome']}");
                    echo utf8_encode("{$produto['descricao']}");
                
                ?>
              </div>
            <?php
        endforeach;
        ?>
    </div>
</div>
<?php include 'footer.php' ?>
