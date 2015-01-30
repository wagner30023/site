<?php include_once 'header.php'; ?>
<div class="container">
    <div class="page-header">
        <?php
        $page = getPage("servico");
        foreach ($page as $servico):
            ?>
            <div class="col-sm-6">
                <p><?php echo utf8_encode($servico["descricao"]); ?></p>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>
<?php include_once 'footer.php' ?>
