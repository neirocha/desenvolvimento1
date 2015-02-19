<?php

 require_once("connection/conexaoDB.php");  

echo "### executando Fixture ###\n<br>";

$conn = conexaoDB();

echo "Removedo Tabela\n<br>";

$conn->query("DROP TABLE IF EXISTS teste;");

$conn->query("DROP TABLE IF EXISTS paginas;");


echo " - OK\n <br>";

echo "criando Tabela teste\n<br>";

$conn->query("CREATE TABLE teste (
   id INT NOT NULL AUTO_INCREMENT,
   nome VARCHAR(45) CHARACTER SET 'utf8' NULL,
   PRIMARY KEY (id));");
   
echo " - OK\n<br>";


echo "criando tabela pagina\n<br>";

$conn->query("CREATE TABLE IF NOT EXISTS  paginas  (
   id_pagina  int(11) NOT NULL AUTO_INCREMENT,
   titulo  varchar(20)  CHARACTER SET 'utf8' NULL,
   texto  varchar(1500)  CHARACTER SET 'utf8' NULL,
  PRIMARY KEY ( id_pagina ));");
  
echo " - OK\n<br>";

echo "Inserindo dados\n<br>";



$linha1 = array('Home', 'Empresa', 'Produtos', 'Servicos', 'Contato');

$linha2 = array('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sem sapien, facilisis in nisl sit amet, finibus placerat sapien. In neque libero, venenatis id consectetur a, sollicitudin vitae tellus. Cras et fermentum nulla. Nunc viverra et neque et molestie. Fusce ut neque eros. Morbi vel consectetur urna, sit amet efficitur enim. In hac habitasse platea dictumst.', 'Vivamus dictum pellentesque tortor, sit amet ultrices est euismod ac. Pellentesque pharetra urna a dui hendrerit, in egestas ipsum viverra. Sed malesuada eu metus ac laoreet. Cras nec rutrum enim. Praesent placerat sem dui, at mollis massa venenatis non. Praesent quis egestas neque. Nullam vestibulum nisl lorem, dapibus mollis velit rhoncus quis. Nam mi tortor, iaculis vitae suscipit ac, ultrices eu tortor. Proin nisi sapien, faucibus molestie leo vitae, mollis pharetra nunc.', 'Todos os nossos Produtos', ' Cras tortor ipsum, dapibus quis est vitae, blandit dapibus arcu. Maecenas pellentesque, metus ut ultrices tristique, metus ex pretium massa, nec bibendum sapien sapien bibendum massa. Duis semper quam nec mauris egestas congue vel quis purus. Integer eleifend tempus scelerisque. Proin quis tortor ante. Mauris convallis mi id congue rhoncus. Mauris eu venenatis ipsum. Donec ante ligula, elementum vel purus ut, vehicula dapibus mi. Quisque gravida sed lacus vel cursus. Cras rhoncus libero ligula, vel mattis ex fringilla eget.', 'preencha o nosso formulario em nosso Contatos');
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
