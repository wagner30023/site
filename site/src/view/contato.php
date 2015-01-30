<?php include 'header.php' ?>
<?php
if (!$_POST) {
    ?>
    <div class="page-header">
        <h1>Contato</h1>
    </div>
    <form class="form-horizontal" action="contato" method="post">
        <fieldset>
            <!-- Form Name -->
            <legend>  </legend>

            <!-- Text input-->
            <div class="control-group">
                <label class="control-label">Nome</label>
                <div class="controls">
                    <input id="nome" name="nome" type="text" placeholder="Insira seu nome" class="input-xlarge" required>
                    <p class="help-block">* Campo Obrigatório</p>
                </div>
                <br>
                <div class="contols-group">  
                    <label class="control-label">Email</label>
                    <div class="controls">
                        <input id="email" name="email" type="email" placeholder="Insira seu email" class="input-xlarge" required>
                        <p class="help-block">* Campo Obrigatório</p>
                    </div>
                </div>
                <br>
                <div class="contols-group">  
                    <label class="control-label"> Assunto </label>
                    <div class="controls">
                        <input id="assunto" name="assunto" type="text"  class="input-xlarge" required>
                    </div>
                </div>
                <br>
                <div class="contols-group">  
                    <label class="control-label"> Mensagem </label>
                    <div class="controls">
                        <textarea class="form-control"  name="mensagem" id="" cols="40" rows="10"></textarea>
                    </div>
                </div>
            </div>

            <!-- Button -->
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <button id="enviar" name="enviar" class="btn btn-primary" onclick="Alerta();">Enviar</button>
                </div>
            </div>

        </fieldset>
    </form>
    <?php
} else {
    ?>
    <div class="alert alert-success">
        <h4><span class="glyphicon glyphicon-thumbs-up"></span> Obrigado!</h4>

        <p>
            Dados enviados com sucesso, abaixo seguem os dados que você enviou:
        </p>
    </div>
    <hr>
    <ul>
        <li><strong>Nome:</strong> <?php echo $_POST['nome']; ?></li>
        <li><strong>E-mail:</strong> <?php echo $_POST['email']; ?></li>
        <li><strong>Assunto:</strong> <?php echo $_POST['assunto']; ?></li>
        <li><strong>Mensagem:</strong> <br><?php echo $_POST['mensagem']; ?></li>
    </ul>

    <?php
}
?>
<div class="col-md-6">
    <h5>Hello!</h5>

    <div class="well">
        <small>
            Donec vitae tristique tellus. Nulla blandit ultricies tortor non feugiat. Donec sodales ac mauris et
            vestibulum. Nullam eget commodo velit. Morbi mollis urna sit amet luctus consectetur. Aenean blandit
            volutpat dolor eget ornare. Aenean vitae neque ut tellus fringilla varius quis non ligula.
        </small>
    </div>
</div>
<?php include 'footer.php' ?>
</body>
</html>