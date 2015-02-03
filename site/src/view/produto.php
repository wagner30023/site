<?php include_once 'header.php'; ?>
<div class="container text-center">

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
<?php include 'footer.php' ?>
