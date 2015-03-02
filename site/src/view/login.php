<!DOCTYPE html>

<?php include 'header.php' ?>

<div class="box">
    <?php
    session_start();

    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

    $pdo = getConnection();
    $sql = "SELECT * FROM login WHERE usuario = :usuario";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(":usuario", $usuario);

    $stmt->execute();
    
    if ($stmt->execute()) {
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION["logado"] = TRUE;
            header("Location: /admin");
            die();
        } else {
            $_SESSION["logado"] = FALSE;
            $error = "Dados inválidos. Tente novamente";
            //header("Location: /login");
        }
    }

    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
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