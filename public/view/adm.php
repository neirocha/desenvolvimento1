  <?php
    session_start();
    ?>
<div id="geral">
    <div id="topo">
        <h1>ADM </h1>

    </div><!--topo-->
    <?php
    require_once "menu.php";
    ?>
    <br />
    <br />

    <p class="container-fluid"><b>
	

 <center>
<a href="?lougar=sim" style="text-decoration:none;"><h4>Sair</h4></a>
<hr />
</center>
<?php
            include "connection/conexaoDB.php";


            $conn = conexaoDB();

            $sql = $conn->prepare("SELECT * FROM paginas where titulo='ADM'");
            $sql->execute();
            $resu = $sql->fetch(PDO::FETCH_ASSOC);

            echo "<h1>".$resu['texto']."</h1>";
            
			if(isset($_SESSION['lougar']) == false){
            ?> </b></p>

    <div id="logins">
        <form action="view/logar.php" method="post">
        <fieldset>
          <legend>Faça o Login:</legend>
            <label>Login:<input type="text" name="login" maxlength="8"> </label>
            <label>Senha:<input type="password" name="senha" maxlength="8"> </label>


        </fieldset>
        <input class="btn btn-primary btn-xs"  type="submit" value="Logar:" />
        </form>
    </div>

</div><!--geral-->
<ul>
<?php
}else{


           $sql = $conn->prepare("SELECT * FROM paginas");
            $sql->execute();
            $resu = $sql->fetchAll(PDO::FETCH_ASSOC);
			foreach($resu as $linha){	
			
			
			echo "<li><a href='view/ckeditor.php?id=".$linha['id_pagina']."&texto=".$linha['texto']."'>".$linha['titulo']."</a></li>";



}}

?>
</ul>