<?php

require_once "conexaoDB.php";

echo "### executando Fixture ###\n";

$conn = conexaoDB();

echo "Removedo Tabela\n";

$conn->query("DROP TABLE IF EXISTS teste;");

$conn->query("DROP TABLE IF EXISTS paginas;");


echo " - OK\n";

echo "criando Tabela teste\n";

$conn->query("CREATE TABLE teste (
   id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(45) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
   
echo " - OK\n";


echo "criando tabela pagina\n";

$conn->query("CREATE TABLE IF NOT EXISTS  paginas  (
   id_pagina  int(11) NOT NULL AUTO_INCREMENT,
   titulo  varchar(20)  CHARACTER SET 'utf8' NULL,
   texto  varchar(150)  CHARACTER SET 'utf8' NULL,
  PRIMARY KEY ( id_pagina ));");
  
echo " - OK\n";

echo "Inserindo dados\n";



$linha1 = array('Home', 'Empresa', 'Produtos', 'Servicos', 'Contato');

$linha2 = array('Dados da pagina inicial', 'Navegue em nossa Empresa', 'Todos os nossos Produtos', 'Prestacao de Servicos', 'preencha o nosso formulario em nosso Contatos');
for($x = 0; $x <= 4; $x++){

 

$nome = $linha1[$x];
$texto = $linha2[$x];
//echo $nome;
//var_dump($linha1);
 

    //$nome = "Teste {$x}";
	
 $smts = $conn->prepare("INSERT INTO paginas (titulo, texto) VALUES (:titulo, :texto);");

 $smts ->bindParam(":titulo",$nome);
  $smts ->bindParam(":texto",$texto);
 $smts ->execute();

    /*$smt = $conn->prepare("INSERT INTO teste (nome) VALUE (:nome);");
    $smt ->bindParam(":nome", $nome);
    $smt ->execute();*/

}

echo " - OK\n";

echo "### concluido ###\n";



?>