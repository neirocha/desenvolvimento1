<?php
session_start();


if($_POST['login'] == "" or $_POST['senha'] == "")
{
    echo "<h1>Digite o login e a senha!</h1>";
	
	echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
	exit;
}//if POST
    require_once "../connection/conexaoDB.php"; 
	
	$conn = conexaoDB();


$usuario = $_POST['login'];
$senha = $_POST['senha'];

		 
		$sql = "SELECT senha FROM usuario WHERE login = :usuario";
		$stmt = $conn->prepare($sql);
		$stmt->bindParam(':usuario', $usuario);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);
		if($result)
        {
		   if (password_verify($senha, $result['senha']))
           {
		   
		   $rowCount = $stmt->rowCount();
	
	if($rowCount == true)
            {

                echo "<h1>Usuario lougado!</h1>";

                $_SESSION["lougar"] = true;

            echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
            }// if $rowCount
	
			     
		   } //if password_verify
           else
           {
			    echo "<h1>senha incorreta</h1>";
				echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
	           exit;
		   }//else password_verify

		} //if $result
        else
        {
		   echo "<h1>usuario n�o existe</h1>";
		   echo '<meta http-equiv="refresh" content="3;URL=../?pg=adm" />';
	       exit;
		}//else $result
 
    

 
 ?>