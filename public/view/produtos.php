<div class="container">
    <?php
	
	ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);

 require_once(__DIR__. "/../connection/conexaoDB.php");  

    $conn = conexaoDB();
	
	 

   $sql = "select * from paginas where texto LIKE '%$pg%'";
   $stmt = $conn->prepare($sql) or die ("err". $sql);
   $stmt ->execute();
   $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res  as $result){
	
	echo "<hr><div id='titulo'>".$result['titulo']."</div>";

	echo "<br><li><div id='texto'>".$result['texto']."</div></li>";

    }
    ?>
</div>
