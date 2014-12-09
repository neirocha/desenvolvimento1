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

  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">



</head>

 

<body>
 
<?php require_once("view/menu.php"); ?>

 
    <?php require_once ("view/paginas.php"); ?>
 

<?php include ("view/rodape.php"); ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="bootstrap/js/jquery-2.1.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
    
</body>
</html>
