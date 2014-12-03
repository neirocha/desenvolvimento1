<?php //session_start(); ?>
<div class="container">
    <?php
 require_once(__DIR__. "/../connection/conexaoDB.php");  

    $conn = conexaoDB();
	
 

   $sql = "select * from paginas where texto LIKE '%$pg%'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res  as $result){
	
	echo "<hr><div style='font-family:Verdana, Arial, Helvetica, sans-serif; color:#ff00FF; font-size:24px; padding-left:309px;'>".$result['titulo']."</div>";

	echo "<br><li><div style='font-family:Verdana, Arial, Helvetica, sans-serif; color:#0000FF; font-size:24px; padding-left:309px;'>".$result['texto']."</div></li>";

    }
	
	
    ?>
</div>
