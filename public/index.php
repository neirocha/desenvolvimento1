<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="../css/stylos.css" type="text/css">
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css" type="text/css">
 </head>

<body>


 <?php
// ini_set("display_errors", "0");


if(isset($_GET['pg'])) {

    $pg = $_GET['pg'];


    switch ($pg) {
        case "Home":

            include "view/home.php";

            break;

        case "home":

            include "view/home.php";

            break;

        case "Empresa":

            require_once "view/empresa.php";

            break;

        case "empresa":

            require_once "view/empresa.php";

            break;

        case "Produtos":

            require_once "view/produtos.php";

            break;

        case "produtos":

            require_once "view/produtos.php";

            break;

        case "Servicos":

            require_once "view/servicos.php";

            break;

        case "servicos":

            require_once "view/servicos.php";

            break;

        case "Contato":

            require_once "view/contato.php";

            break;
        case "contato":

            require_once "view/contato.php";


            break;

        default:

    }
}else{
	require_once "view/home.php";

}

 require_once "view/rodape.php";
?>
</body>
</html>

