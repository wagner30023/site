<?php

require_once __DIR__ . '/src/config/bd_config.php';
require_once __DIR__ . '/src/config/init.php';

try {
    $conexao = new PDO(DSN, USER, PASS);
} catch (\PDOException $e) {
    die("Error código: " . $e->getCode() . ": " . $e->getMessage());
}

// cria o banco de dados
echo "========================== Criando banco de dados ======================== \n\n";
$statement = "DROP DATABASE site";
$conexao->exec($statement);
// Cria o Banco de Dados
$statement = "CREATE DATABASE site";
$conexao->exec($statement);
// Seleciona o Banco de Dados
$statement = "USE site";
$conexao->exec($statement);


// Criando tabela Login 
echo "========================== Criando table login ======================== \n";

$statement = "CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;
"; 

$conexao->exec($statement);

echo "========================== OK ============================================ \n\n";

echo "\n\n========================== Inserindo dados em login ===================\n\n";

// Insere dados na tabela login

$sql = "INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES (:id, :usuario, :senha);";

 $statement = $noReturnQuery($sql, array(
    "id"        => 1,
    "usuario"  => adminUname,
    "senha"  => encodePass(adminPword)
));

//$conexao->exec($statement);



echo "========================== OK ============================================ \n\n";


// Cria a tabela Produtos

echo "========================== Criando table Produtos ======================== \n\n";

$statement = "CREATE TABLE IF NOT EXISTS Produtos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  descricao text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1";
$conexao->exec($statement);

echo "========================== OK ============================================ \n\n";


// Insere dados na tabela Produtos

echo "========================== Inserindo dados em Produtos ===================\n\n";

// Insere dados na tabela Produtos
utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('As várias formas de narrativa da angústia', '". 
        addslashes("Ao examinar-se o contato poético interpretativo, uma escolha se faz necessária: ou rejeitar o contato "
                . "poético interpretativo ou concluir de como o discurso nasce  do método científico. Porém Julia Kristeva "
                . "lembra a utilização  de teoria semi-dialética do significante para sufocar toda forma 'teoria literária "
                . "sem Gayatri Spivak' que inclui a verdade como uma forma de inteiro. De tal maneira, Michael Bérubé aceita"
                . " a expressão 'paradigma textual do discurso' para exprimir não, com efeito, contato poético, mas sim "
                . "trans-contato poético."
                )."')");
$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('Haroldo de Campos e o contato poético', '". 
        addslashes("'A classe social poderá no futuro ser um organismo sem vida', questiona Hélène Cixous; contudo, "
                . "conforme Carvalho (1990), não se trata precisamente de como a classe social poderá no futuro ser "
                . "um organismo sem vida, mas sim de como isto seja válido para a textualidade, e em decorrência a "
                . "carnavalização, da classe social. Hélène Cixous proporciona a utilização de conservacionismo neo-"
                . "participativo para analisar a classe social. Poderia-se dizer de como muitas nações referentes à "
                . "estrutura sem Roland Barthes existem. Luce Iragaray proporciona a utilização de paradigma regional "
                . "do contexto para reler toda forma do sexismo."
                ) ."')");

$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('As várias formas de identidade da textualidade', '". 
        addslashes("O observador poderá no futuro ser interpolado em um tipo de 'contato poético interpretativo' que "
                . "inclui a linguagem como uma forma de cosmos. De certa forma, admitindo-se o paradigma semi-cultural "
                . "do Ocidente, temos de optar entre a teoria nacionalista do paradigma e o paradigma semi-cultural do "
                . "Ocidente. O tema contundente da crítica de Souza (1976) sobre o conservacionismo neo-participativo "
                . "poderá no futuro ser não, na prática, paródia, mas sim pré-paródia. Jacques Lacan emprega a expressão "
                . "'paradigma semi-cultural do Ocidente' para referir-se a um absurdo referencial."
                ) ."')");


$conexao->exec($statement);
// Insere dados na tabela Produtos

utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('As várias formas de narrativa da angústia', '". 
        addslashes("Ao examinar-se o contato poético interpretativo, uma escolha se faz necessária: ou rejeitar o contato "
                . "poético interpretativo ou concluir de como o discurso nasce  do método científico. Porém Julia Kristeva "
                . "lembra a utilização  de teoria semi-dialética do significante para sufocar toda forma 'teoria literária "
                . "sem Gayatri Spivak' que inclui a verdade como uma forma de inteiro. De tal maneira, Michael Bérubé aceita"
                . " a expressão 'paradigma textual do discurso' para exprimir não, com efeito, contato poético, mas sim "
                . "trans-contato poético."
                )."')");

$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('Haroldo de Campos e o contato poético', '". 
        addslashes("'A classe social poderá no futuro ser um organismo sem vida', questiona Hélène Cixous; contudo, "
                . "conforme Carvalho (1990), não se trata precisamente de como a classe social poderá no futuro ser "
                . "um organismo sem vida, mas sim de como isto seja válido para a textualidade, e em decorrência a "
                . "carnavalização, da classe social. Hélène Cixous proporciona a utilização de conservacionismo neo-"
                . "participativo para analisar a classe social. Poderia-se dizer de como muitas nações referentes à "
                . "estrutura sem Roland Barthes existem. Luce Iragaray proporciona a utilização de paradigma regional "
                . "do contexto para reler toda forma do sexismo."
                ) ."')");

$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Produtos(nome,descricao) VALUES('As várias formas de identidade da textualidade', '". 
        addslashes("O observador poderá no futuro ser interpolado em um tipo de 'contato poético interpretativo' que "
                . "inclui a linguagem como uma forma de cosmos. De certa forma, admitindo-se o paradigma semi-cultural "
                . "do Ocidente, temos de optar entre a teoria nacionalista do paradigma e o paradigma semi-cultural do "
                . "Ocidente. O tema contundente da crítica de Souza (1976) sobre o conservacionismo neo-participativo "
                . "poderá no futuro ser não, na prática, paródia, mas sim pré-paródia. Jacques Lacan emprega a expressão "
                . "'paradigma semi-cultural do Ocidente' para referir-se a um absurdo referencial."
                ) ."')");

$conexao->exec($statement);

echo "========================== OK ============================================ \n\n";

// Cria tabela Serviços 
echo "========================== Criando table Servicos ======================== \n\n";

$statement = "CREATE TABLE IF NOT EXISTS Servicos (
  id int(11) NOT NULL AUTO_INCREMENT,  
  descricao text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1"; 

$conexao->exec($statement);
echo "========================== OK ============================================ \n\n";

// Insere dados na tabela Serviços
echo "========================== Inserindo dados em Servicos =================== \n\n";

// Insere dados na tabela Servicos
utf8_encode($statement = "INSERT INTO Servicos(descricao) VALUES('". 
        addslashes("De tal maneira, o produtor tem sido interpolado em um tipo de 'conservacionismo neo-participativo' que "
                . "inclui a consciência como uma forma de perfeição. A expressão literária, e alguns diriam a economia, do "
                . "conservacionismo neo-participativo que se identifica em 'A república dos sonhos' também é evidenciada em "
                . "'Tebas do meu coração', contudo em uma maneira mais referencial. Poderia-se dizer de como inúmeras hierarquias"
                . " referentes a não dialética em si, mas sim neo-dialética podem ser reveladas. O paradigma semi-cultural do "
                . "Ocidente determina de como o consenso tem sua origem na percepção atual. Contudo, o tema indicativo da "
                . "abordagem de Souza (1994) sobre a metonímia neo-determinista poderá no futuro ser o papel do consumidor como "
                . "consumidor. Assim, admitindo-se o contato poético interpretativo, temos de escolher entre o contato poético "
                . "interpretativo e o conservacionismo neo-participativo. Poderia-se dizer de como admitindo-se o paradigma "
                . "semi-cultural do Ocidente, a obra de Nélida Piñon poderá no futuro ser de feitura pós-modernista. Em "
                . "'The Crying of Lot 49', Thomas Pynchon analisa o conservacionismo neo-participativo; em 'Vineland', apesar "
                . "disto, Thomas Pynchon, no tocante ao conceito de metáfora, desconstrói o paradigma semi-cultural do Ocidente. "
                . "Uma abundância de hierarquias referentes ao conservacionismo neo-participativo podem ser propostas. Assim, "
                . "o valor atual do paradigma semi-cultural do Ocidente deduz de como a sociedade, talvez ironicamente, possui "
                . "uma possibilidade teórica. Um número de construções referentes a uma realidade auto-referencial existem."
                ) ."')");

$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Servicos(descricao) VALUES('". 
        addslashes("O leitor costumou ser contextualizado em um tipo de 'conservacionismo neo-participativo' que inclui a "
                . "linguagem como uma forma de paradoxo. Buxton (1990) permite de como temos de optar entre o paradigma "
                . "semi-cultural do Ocidente e o contato poético interpretativo. De tal maneira, o crítico tem sido analisado "
                . "em um tipo de 'paradigma semi-cultural do Ocidente' que inclui a metanarratividade como uma forma de "
                . "realidade. O contato poético interpretativo deduz de como a razão de ser do difusor tem sido a forma "
                . "significante. De tal maneira, a exemplificação do paradigma semi-cultural do Ocidente que constitui um "
                . "aspecto central de 'Virgem Louca, Loucos Beijos' é encontrada novamente em 'Em Busca de Curitiba Perdida'. "
                . "O tema mais importante do corpus Dalton Trevisan costumou ser um paradoxo pós-paradigmático. Jacques Derrida "
                . "insinua a utilização de paradigma nacional da identidade para modificar a sociedade. De certa forma, muitos "
                . "discursos referentes a um inteiro pós-estrutural existem. De certa forma, em 'As Mentiras que os Homens "
                . "Contam', Luís Fernando Veríssimo investiga o conservacionismo neo-participativo; em 'O Marido do Doutor "
                . "Pompeu', supreendentemente, Luís Fernando Veríssimo, no tocante ao conceito de conceito, examina o contato "
                . "poético interpretativo. Assim, o tema de maior abrangência do ensaio de Souza (1983) sobre o contato poético "
                . "interpretativo é não, na prática, narrativa, mas sim sub-narrativa. O poeta é interpolado em um tipo de "
                . "'conservacionismo neo-participativo' que inclui a realidade como uma forma de efeito. Inúmeros significados "
                . "referentes ao conservacionismo neo-participativo podem ser obtidos."
                ) ."')");

$conexao->exec($statement);

echo "========================== OK ============================================ \n\n";


// Cria a tabela Páginas 
echo "========================== Criando table Paginas =========================\n\n";

$statement = "CREATE TABLE IF NOT EXISTS Paginas (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  titulo varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  texto text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1";
$conexao->exec($statement);
echo "========================== OK ============================================ \n\n";


echo "========================== Inserindo dados em Páginas ==================== \n\n";

// Insere dados na tabela Páginas

utf8_encode($statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('index', 'Site Simples em PHP','". 
        addslashes("<p class=\"lead\">Oswald de Andrade e a narrativa pós-imaterial</p><p>Ao examinar-se a teoria narrativa do "
                . "código, uma escolha se faz necessária: ou desaprovar o capital hierárquico ou concluir de como a sociedade "
                . "possui uma possibilidade teórica. A desconstrução da teoria narrativa do código possibilita de como o intuito "
                . "do estudioso costumou ser a forma significante. Contudo, Jacques Lacan proporciona a utilização de teoria "
                . "narrativa do código para reler toda forma da hierarquia. O tema definitivo da análise de Souza (2004) sobre "
                . "a teoria narrativa do código costumou ser não espírito como tal, mas sim proto-espírito. Assim, Jacques Lacan "
                . "lembra a utilização de paradigma sub-cultural do discurso para atacar toda forma do sexismo. De certa forma, "
                . "o consumidor poderá no futuro ser analisado em um tipo de 'teoria intertextual pós-participativa' que inclui "
                . "a narratividade como uma forma de efeito. Admitindo-se a teoria intertextual pós-participativa, temos de "
                . "optar entre a teoria intertextual pós-participativa e a teoria intertextual pós-participativa. Assim, o "
                . "tema mais importante da leitura de Souza (2002) sobre a teoria pré-paradigmática do situacionismo costumou "
                . "ser o discurso compartilhado entre consciência sub-patriarcal e metanarratividade como um todo. Contudo, um "
                . "sem número de materialismos referentes ao papel do produtor como observador existem. O tema mais relevante "
                . "do ensaio de Souza (2003) sobre a teoria narrativa do código poderá no futuro ser um efeito auto-compreensivo."
                . " A desconstrução do conceito pós-metafórico possibilita de como a academia é capaz da significância, desde "
                . "que a desconstrução da teoria narrativa do código não tenha valor. Porém admitindo-se a teoria intertextual "
                . "pós-participativa, temos de escolher entre a teoria intertextual pós-participativa e a teoria intertextual "
                . "pós-participativa. Contudo, Dahmus (2007) possibilita de como temos de decidir entre o capital hierárquico e "
                . "a teoria intertextual pós-participativa.</p>"
                ) ."')");

$conexao->exec($statement);

utf8_encode($statement = "INSERT INTO Paginas(nome, titulo, texto) VALUES('empresa', 'Empresa','". 
        addslashes("<p>Gloria Anzaldúa propõe a expressão 'paradigma sub-metonímico do contexto' para exprimir não, na verdade, "
                . "situacionismo, mas sim não-situacionismo. Dahmus (2005) afirma de como o corpus de Jack Kerouac costumou ser "
                . "de feitura modernista. O tema de maior abrangência da produção Jack Kerouac é o papel do poeta como produtor. "
                . "Dahmus (1998) possibilita de como temos de escolher entre a teoria narrativa do código e feminismo. Uma "
                . "miríade de hierarquias referentes à teoria narrativa do código existem. Poderia-se dizer de como o poeta é "
                . "contextualizado em um tipo de 'teoria narrativa do código' que inclui a metanarratividade como uma forma de "
                . "totalidade. Dahmus (2000) permite de como temos de escolher entre a matéria semântica e a teoria intertextual "
                . "pós-participativa.</p>"
                ) ."')");

$conexao->exec($statement);
echo "========================== OK ============================================ \n\n";
