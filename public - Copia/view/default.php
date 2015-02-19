<?php //session_start(); ?>
<div class="alert alert-success" role="alert">
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
	
	
	echo "<hr><h4>".$result['titulo']."</h4>";
		echo "<br><li>".$result['texto']."</li>";


     }
	}else{
	
	echo "<h2><small>Paginas encontradas.</small></h2><br>";
	$sql = "select * from paginas where texto LIKE '%$pgs%'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($res  as $result){
	
	
	echo "<div class='list-group'><a class='list-group-item' href='?pg=".$result['texto']."'><li>".$result['titulo']."</li></a></div>";

     }
	
	}
    ?>
</div>
