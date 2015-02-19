<div id="geral">
       <div id="topo">
          <h1>Empresa</h1>
       </div><!--topo-->
       
<?php
 require_once "menu.php";
?>
   <br />
<br />
 <samp><img src="../img/05.jpg" /></samp>
 

 <div id="abas">
 <ul>
    <li>Show room</li>
    <li>Estacionamento</li>
    <li>Carga e descarga</li>
    <li>Delivery</li>
 </ul>  
 </div> <br />
<br />
<p class="container-fluid">
<?php

include "connection/conexaoDB.php";


$conn = conexaoDB();

     $sql = $conn->prepare("SELECT * FROM paginas where titulo='Empresa'");
			 $sql->execute();
			 $resu = $sql->fetch(PDO::FETCH_ASSOC);	
			 		
			  echo $resu['texto'];
 			 
?> </p>

       </div><!--geral-->
