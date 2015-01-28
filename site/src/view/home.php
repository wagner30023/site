<?php include_once "header.php"; ?>
<?php
    $pageName = $route == "/" ? "index" : ltrim($route, "/");
    $pagina = getPage($pageName);
?>
<div class="container">
    <div class="page-header">
        <h1><?php echo $pagina["titulo"]  ?></h1>
    </div>
    <?php
        echo $pagina["texto"];
    ?>
</div>
<?php include_once "footer.php"; ?>
