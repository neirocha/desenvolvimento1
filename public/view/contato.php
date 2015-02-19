<div id="geral">
       <div id="topo">
          <h1>Contatos</h1>
       </div><!--topo-->
       
<?php
 require_once "menu.php";
?> 
   <br />
<br />
<div id="cadastro">
 <fieldset>
    <legend>Formulario de contatos</legend>
       <form action="#" method="get">
       <input type="hidden" name="pg" value="contato" />
            <label class="label"> Nome:<br /> <input type="text" name="nome"  placeholder="Nome"/></label>
            <label class="label">Email:<br /> <input type="text" name="email" placeholder="Email" /></label>
            <label class="label">Assunto:<br /> <input type="text" name="assunto"  placeholder="Assunto"/></label>
            <label class="label">Mensagem:<br /> <textarea cols="55" rows="5"  name="mensagem" placeholder="Mensagem"></textarea></label>
            <label class="label" id="center"><input type="submit" name="submit" value="Cadastrar"  class="btn btn-primary btn-xs"  name="cadastrar"></label>
       </form>
 </fieldset> 
 </div>  
 <?php if(isset($_GET['submit'])){?> 
  <div id="return">
  <b>Nome:</b> <?php echo $_GET['nome'] ?><br />
  <b>Email:</b> <?php echo $_GET['email'] ?><br />
  <b>Assunto:</b> <?php echo $_GET['assunto'] ?><br />
  <b>Mensagem:</b> <?php echo $_GET['mensagem'] ?>
  </div>
<?php } ?>

       
       </div><!--geral-->
