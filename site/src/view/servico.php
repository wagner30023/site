<?php include_once 'header.php'; ?>
<div class="page-header">
    <h1>Serviços</h1>
</div>
<?php
$page = getPage("servico");
foreach ($page as $servico):
    ?>
    <div class="col-sm-6">
        <p><?php echo $servico["descricao"]; ?></p>
    </div>
    <?php
endforeach;
?>
<?php include_once 'footer.php' ?>
