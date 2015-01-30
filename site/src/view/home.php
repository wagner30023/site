<?php include_once "header.php"; ?>
<?php
$pagina = getPage("index");
?>
<img src="img/tree.png" id="img"/>

<div class="container">
    <div class="page-header">
        <?php
        foreach ($pagina as $home):
            ?>
            <div class="col-sm-3">
                <h2><?php echo $home["titulo"]; ?></h2>
                <p><?php echo $home["texto"]; ?></p>
            </div>
            <?php
        endforeach;
        ?>
    </div>
</div>
<?php include_once "footer.php"; ?>
