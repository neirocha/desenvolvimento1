 <?php
 
 ini_set('display_errors', true);
error_reporting(E_ALL | E_STRICT);

$rota = parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$pg = basename($rota['path']);
 
 
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Aula de PHP</title>

    <link rel="stylesheet" type="text/css" href="css/stylos.css">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">



</head>

 

<body>
 
<?php require_once("view/menu.php"); ?>

<div id="pagina">
    <?php require_once ("view/paginas.php"); ?>
</div>

<?php include ("view/rodape.php"); ?>

</body>
</html>
