
<?php include_once 'header.php'; ?>

<div class="page-header">
    <h1> Empresa </h1>
</div>
<?php
$page = getPage("empresa");
foreach ($page as $empresa):
    ?>
    <div class="col-sm-6">
        <p><?php echo $empresa["descricao"]; ?></p>
    </div>
    <?php
endforeach;
?>

<?php include_once 'footer.php' ?>
