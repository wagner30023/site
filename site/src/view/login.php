<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include 'header.php' ?>

<div class="box">
    <?php
    session_start();

    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<pre>";
        var_dump($usuario). "<b/ >";
        var_dump($senha). "<b/ >";
    echo "</pre>";



    $usuario = ($sql = array("usuario" => $usuario));
    if (isset($usuario) && isset($senha["_senha"])) {
        $sql = "SELECT * FROM login WHERE usuario = :usuario and senha = :senha";
        if (password_verify($senha["_senha"], $usuario['senha'])) {
            #password_verify($_POST["_password"], $user["password"]
            $_SESSION["logged"] = TRUE;
            $_SESSION["usuario"] = $usuario["usuario"];

            header("Location: /admin");
            die();
        } elseif ($usuario and $senha == '') {
            echo "Digite seu nome de usuario e senha.";
        } else {
            //unset($_SESSION['user']);
            //$_SESSION["logado"] = FALSE;
            //header("Location: /login");
            $error = "Dados inválidos. Tente novamente";
        }
    }

    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    }


    if (isset($_SESSION['mensagem'])) {
        echo '<div class="alert alert-dismissable alert-danger">';
        echo '<button type="button" class="close" data-dismiss="alert">×</button>';
        echo '<strong>Aviso!</strong><br>' . $_SESSION['mensagem'];
        echo '</div>';
        unset($_SESSION['mensagem']);
    }

    if (isset($_GET['action']) && $_GET['action'] == 'logoff') {
        $_SESSION['logado'] = false;
        header('Location: /');
    }
    ?>
    <form  method="POST" action="/login">
        <fieldset>
            <legend > Autenticação </legend>
            <label> <input type="text" name="usuario"  placeholder="Usuário" /> </label>
            <label> <input type="password" name="senha"  placeholder="Senha" /> </label>
        </fieldset>

        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a href="/" class="btn btn-danger">Cancelar</a> <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>
</div>

<?php include 'footer.php' ?>