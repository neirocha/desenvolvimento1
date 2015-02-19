<div id="geral">
       <div id="topo">
          <h1>Seviços</h1>
       </div><!--topo-->
       
<?php
 require_once "menu.php";
?> 
   <br />
<br />

<fieldset>
    <legend>Serviços especializado</legend>
  <p class="container-fluid"><b><?php

include "connection/conexaoDB.php";


$conn = conexaoDB();

     $sql = $conn->prepare("SELECT * FROM paginas where titulo='Home'");
			 $sql->execute();
			 $resu = $sql->fetch(PDO::FETCH_ASSOC);	
			 		
			  echo $resu['texto'];
 			 
?> </b></p>
  </fieldset>


<fieldset>
    <legend>Prestação de Serviços</legend>
<p class="container-fluid">Integer at lobortis purus. Duis non quam libero. Cras ac urna quis ex facilisis molestie sit amet ac tortor. Nullam viverra, purus eu volutpat dapibus, enim ante consequat est, sed faucibus augue nisi venenatis turpis. Quisque et tellus lorem. Sed id placerat eros, ac mattis nulla. Mauris ut elit quis dui finibus accumsan. Cras vel massa sit amet nulla lobortis pharetra vel sit amet elit. Ut quis neque tristique, porttitor nisi eu, pharetra lectus. Curabitur ultrices sapien eu convallis dictum. Fusce sed eros non purus tristique iaculis sit amet eget lacus. Suspendisse tempor elit eget risus ornare semper. Vivamus iaculis dignissim facilisis.</p>
 </fieldset>

       </div><!--geral-->
