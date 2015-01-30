<?php include_once 'header.php'; ?>

<div class="container">
    <div class="page-header">
<?php
$page = getPage("empresa");
foreach ($page as $empresa):
    ?>
    <div class="col-sm-6">
        <p><?php echo $empresa["titulo"]; ?></p>
        <p><?php echo $empresa["texto"]; ?></p>
    </div>
    <?php
endforeach;
?>
   </div>
</div>
<?php include_once 'footer.php' ?>
