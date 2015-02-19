 <?php
ini_set("display_errors", "0");


if(isset($_GET['pg'])){

$pg = $_GET['pg'];

}



switch ($pg){
case "Home":

include "home.php";

break;

case "home":

include "home.php";

break;

case "Empresa":

require_once "empresa.php"; 

break;

case "empresa":

require_once "empresa.php"; 

break;

case "Produtos":

require_once "produtos.php";

break;

case "produtos":

require_once "produtos.php";

break;

case "Servicos":

require_once "servicos.php";

break;

case "servicos":

require_once "servicos.php";

break;

case "Contato":

require_once "contato.php";

break;
case "contato":

require_once "contato.php";


break;

default:


	require_once "default.php"; 
	 
}


?>

