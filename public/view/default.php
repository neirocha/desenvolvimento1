<?php //session_start(); ?>
<div class="container">
    <?php
 require_once(__DIR__. "/../connection/conexaoDB.php");  
  
 $conn = conexaoDB();
 
 if(isset($_GET['pgs'])){
 
 $pgs = $_GET['pgs'];
 
 }
	 if($pgs == ""){
	 
	if($pg == ""){
	
	$pg = "inicial";
	
	}
   $sql = "select * from paginas where texto LIKE '%$pg%'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($res  as $result){
	
	
	echo "<hr><div id='titulo'>".$result['titulo']."</div>";
		echo "<br><li><div id='texto'>".$result['texto']."</div></li>";


     }
	}else{
	
	echo "<h2><small>Paginas encontradas.</small></h2>";
	$sql = "select * from paginas where texto LIKE '%$pgs%'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($res  as $result){
	
	
	echo "<ul ><a href='?pg=".$result['texto']."'><li><div id='titulo'>".$result['titulo']."</li></a></ul> 
";

     }
	
	}
    ?>
</div>