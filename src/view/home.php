<?php
include_once "header.php";
$pagina = getPage("index");
?>
<img src="img/tree.png" id="img" />
<div class="container">
    <div class="page-header">
        <div class="col-sm-3">
            <h2><?php echo $pagina["titulo"]; ?></h2>
            <p><?php echo $pagina["texto"]; ?></p>
        </div>
    </div>
</div>
<?php include_once "footer.php"; ?>
