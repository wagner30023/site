
<!DOCTYPE html>
<?php include 'header.php' ?>

<?php 

session_start();

if(isset($_SESSION['logado']) AND $_SESSION['logado'] == TRUE) {
    echo "<br/ > Acesso a área restrita";
} else {
    echo "Você não tem permissão, acesse o menu login.";
    header("Location: /login");
}

# (isset($_SESSION['logado']) AND $_SESSION['logado'] == FALSE)

?>
<?php include 'footer.php' ?>