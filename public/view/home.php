<div id="geral">
       <div id="topo">
          <h1>Home Page</h1>
       </div><!--topo-->
<?php
 require_once "menu.php";
?>
   <br />
<br />

  <p class="container-fluid"><b><?php

include "connection/conexaoDB.php";


$conn = conexaoDB();

     $sql = $conn->prepare("SELECT * FROM paginas where titulo='Home'");
			 $sql->execute();
			 $resu = $sql->fetch(PDO::FETCH_ASSOC);	
			 		
			  echo $resu['texto'];
 			 
?> </b></p>

<p class="container-fluid">Vivamus dictum pellentesque tortor, sit amet ultrices est euismod ac. Pellentesque pharetra urna a dui hendrerit, in egestas ipsum viverra. Sed malesuada eu metus ac laoreet. Cras nec rutrum enim. Praesent placerat sem dui, at mollis massa venenatis non. Praesent quis egestas neque. Nullam vestibulum nisl lorem, dapibus mollis velit rhoncus quis. Nam mi tortor, iaculis vitae suscipit ac, ultrices eu tortor. Proin nisi sapien, faucibus molestie leo vitae, mollis pharetra nunc.</p>

<p class="container-fluid">Nullam a varius tortor. Vivamus sit amet tellus a eros aliquam pulvinar. Nulla volutpat enim vel ipsum placerat, et aliquam lacus aliquet. Sed faucibus fringilla libero, vel bibendum sem bibendum et. Nunc est diam, auctor ut neque non, pharetra ornare quam. Praesent sit amet justo vulputate, faucibus ipsum ac, consequat neque. Integer pellentesque ex nec mi dictum sollicitudin. Morbi et nibh risus.</p>

<p class="container-fluid">In euismod quam turpis, in ornare ante ullamcorper eget. Maecenas turpis nisl, porttitor et imperdiet a, imperdiet in sem. Phasellus tincidunt at nulla vel semper. Nam vel egestas erat, sed porta arcu. Nullam feugiat, orci ac fermentum sodales, quam ligula luctus nisi, sit amet bibendum libero odio ac tortor. Aliquam cursus erat in velit finibus blandit. Suspendisse sit amet dolor sodales, aliquam lacus lobortis, faucibus elit. Fusce commodo tortor et eleifend dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum quis ante est. Quisque at lacus eget diam gravida mollis. Suspendisse potenti. Proin euismod id lectus nec convallis.</p>

<p class="container-fluid">Integer sollicitudin, tellus vitae tincidunt feugiat, eros lorem lobortis turpis, eu consectetur nisl nisi ut nisl. Nunc egestas mi ipsum, nec imperdiet orci tincidunt id. Ut tempor et tellus ut mollis. Nunc justo turpis, aliquet at congue eu, convallis in eros. Nunc at elementum lacus. Vestibulum dictum augue nisl, et rhoncus nisi consequat eget.</p><p class="container-fluid"> Etiam tempor vitae quam vel dapibus. Pellentesque nec ornare felis. Integer nec justo dignissim, vehicula enim ac, lacinia enim. Donec volutpat quis nisi et tristique. Pellentesque tincidunt pulvinar pretium. Maecenas fringilla eget tellus in ornare. Nam aliquam lacus sed rutrum tristique. Etiam risus ipsum, semper ac augue eu, consectetur fermentum purus.</p> <p class="container-fluid">Duis leo velit, dictum vel imperdiet non, molestie imperdiet tortor. Fusce aliquam efficitur neque, laoreet lobortis nulla pharetra in.</p>

       </div><!--geral-->
