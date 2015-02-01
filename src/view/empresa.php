<?php 
include_once 'header.php';
$page = getPage("empresa");
?>
<div class="container">
    <div class="page-header">
        <div class="col-sm-6">
            <p><?php echo $page["titulo"]; ?></p>
            <p><?php echo $page["texto"]; ?></p>
        </div>
   </div>
</div>
<?php include_once 'footer.php' ?>
