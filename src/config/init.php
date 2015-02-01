<?php


function getConnection() {
    return new \PDO(DSN, USER, PASS);
}

function getPage($pageName) {
    try {
        $db = getConnection();
        switch ($pageName) {
            case "index":
            case "empresa":                                
                $result = listarConteudo($pageName);                
                break;
            case "produto":
                 $sql = "SELECT * FROM Produtos";
                 $stmt = $db->prepare($sql);
                 $stmt->execute();
                 $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                 break;
            case "servico":
                $sql = "SELECT * from Servicos";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                break;
            default:
                $result = null;
        }
        return $result;
    } catch (\PDOException $exc) {
        echo $exc->getTraceAsString();
    }
}

function listarConteudo($pagina) {
    try {
        $conexao = getConnection();
        $sql = "SELECT * FROM Paginas WHERE nome = :nome";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue("nome", $pagina);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (\PDOException $e) {
        die("Error código: " . $e->getCode() . ": " . $e->getMessage());
    }    
}

function busca($termo) {
    $db = getConnection();
    $stmt = $db->prepare("SELECT * FROM Paginas WHERE LIKE texto = :termo");
    $termo = "%{$termo}%";
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
