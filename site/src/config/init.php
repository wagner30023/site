<?php

//require_once __DIR__ ."./bd_config.php";

/*
 * return PDO 
 * 
 */

/*
  function getConnection() {
  try {
  return new \PDO(DSN, USER, PASS);
  } catch (Exception $exc) {
  echo $exc->getTraceAsString() . $exc->getCode();
  }
  }
 */



function getConnection() {
    $dsn = DSN;
    $username = USER;
    $passwd = PASS;

    return new \PDO($dsn, $username, $passwd);
}

function getPage($pageName) {
    try {
        $db = getConnection();
        switch ($pageName) {
            case "index":
            case "empresa":
                $sql = "SELECT titulo,texto FROM Paginas WHERE nome = :nome";
                $stmt = $db->prepare($sql);
                $stmt->bindValue("nome", $pageName);
                $stmt->execute();
                
                return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                break;
            case "produto":
                 $sql = "SELECT * FROM Produtos";
                 $stmt = $db->prepare($sql);
                 $stmt->execute();
                 return $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                 break;
            case "servico":
                $sql = "SELECT * from Servicos";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                return $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break;
        }
    } catch (Exception $exc) {
        echo $exc->getTraceAsString();
    }
}

function listarConteudo($pagina) {
    try {
        $conexao = new \PDO(DSN, USER, PASS);
    } catch (\PDOException $e) {
        die("Error código: " . $e->getCode() . ": " . $e->getMessage());
    }

    $sql = "SELECT * FROM Paginas WHERE nome = :nome'";
    $stmt = $conexao->prepare($sql);
    $stmt->bindValue("nome", $pagina);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function busca($termo) {
    $db = getConnection();
    $stmt = $db->prepare("SELECT * FROM Paginas WHERE LIKE texto = :termo");
    $termo = "%$termo%";
    $stmt->bindParam("termo", $termo);
    $stmt->execute();
    $result["Paginas"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare("SELECT * FROM Produtos WHERE descricao LIKE :termo");
    $termo = "%{$termo}%";
    $stmt->bindParam("termo", $termo);
    $stmt->execute();
    $result["Produtos"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $db->prepare("SELECT * FROM Servicos WHERE descricao LIKE :termo");
    $termo = "%{$termo}%";
    $stmt->bindParam("termo", $termo);
    $stmt->execute();
    $result["Servicos"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $result;
}
