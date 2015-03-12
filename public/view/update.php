<?php

include "../connection/conexaoDB.php";


            $pdo = conexaoDB();
			
			 $sql = "UPDATE paginas SET texto = :texto  
            WHERE id_pagina = :id_pagina";
$stmt = $pdo->prepare($sql);                                  
$stmt->bindParam(':texto', $_POST['texto'], PDO::PARAM_STR);       
$stmt->bindParam(':id_pagina', $_POST['id_pagina'], PDO::PARAM_INT);    
$stmt->execute();

?>

<meta http-equiv="refresh" content="0;URL=../?pg=adm" />
