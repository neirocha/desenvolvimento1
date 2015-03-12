<?php
session_start();


if($_POST['login'] == "" or $_POST['senha'] == "")
{
    echo "<h1>Digite o login e a senha!</h1>";
	
	echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
	exit;
} 
    require_once "../connection/conexaoDB.php"; 
	
	$conn = conexaoDB();


$login = $_POST['login'];
$senha = $_POST['senha'];

    $sql = $conn->prepare("SELECT * FROM usuario where login='$login' and senha='$senha'");
    $sql->execute();
    $resu = $sql->fetch(PDO::FETCH_ASSOC);
	$rowCount = $sql->rowCount();
	
	if($rowCount == true){
	
	echo "<h1>Usuario lougado!</h1>";
	
	$_SESSION["lougar"] = true;
	
	echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';

	
	}else{
	
	
	echo "<h1>Usuario nao encontrado!</h1>";
	$_SESSION["lougar"] = false;
	echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
	
	}

    
 
 ?>