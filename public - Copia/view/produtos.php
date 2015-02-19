<div class="alert alert-success" role="alert">
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
	
	echo "<hr><h4>".$result['titulo']."</h4>";

	echo "<br><li> ".$result['texto']." </li>";

    }
    ?>
</div>
