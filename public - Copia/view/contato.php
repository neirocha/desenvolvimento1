<div class="alert alert-success" role="alert">
    <?php
	
	ini_set('display_errors', true);
    error_reporting(E_ALL | E_STRICT);
 require_once(__DIR__. "/../connection/conexaoDB.php");  

    $conn = conexaoDB();
 

   $sql = "select * from paginas where texto LIKE '%$pg%'";
   $stmt = $conn->prepare($sql);
   $stmt ->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach($res  as $result){
	
	echo "<hr><h4>".$result['titulo']."</h4>";

	echo "<br><li>".$result['texto']."</li>";

    }
    ?>
</div>

<hr>

    <div class="container">



        <div class="row">
<div class="span6">
    <form method="get" name="f1">
    <input type="hidden" name="pg" value="contato" />
    <fieldset>
    <legend>Contato</legend>
    <label>Nome:<input type="text" name="nome" class="form-control" placeholder="Nome"></label>
    <label>Email:<input type="text" name="email" class="form-control" placeholder="Email"></label>
    <label>Assunto:<input type="text" name="assunto" class="form-control" placeholder="Assunto"></label>
    <label>Mensagem:<textarea cols="55" rows="5" class="form-control"  placeholder="Mensagem" name="mensagem"></textarea></label>
    <label><input type="submit" value="Cadastrar" name="cadastrar"></label>
    </fieldset>
     </form>
</div>



    <div class="span6">
    <?php
	
	function isValidEmail($email)

{

//Verifica se o valor é válido

//Caso falhe, não é necessário continuar

 

if(!filter_var($email, FILTER_VALIDATE_EMAIL))

{

return false;

}

 

//Extrai o domínio

list($user, $host) = explode("@", $email);

//Verifica se o domínio esta acessível

if (!checkdnsrr($host, "MX") && !checkdnsrr($host, "A"))

{

return false;

}

 

return true;

}
 	
if(isset($_GET["email"])){

$email = $_GET["email"];

}

if(isset($email) == ""){

$email = "jfcgfcg@com.com";

}
 
 
 
if(isValidEmail($email))

{

 //echo "Endereço correto.";
}
else

{

 echo "<h4>E-mail inválido.</h4>";
exit;
}


if ((isset($_GET["cadastrar"]) == "cadastrar") and ($_GET["nome"] != "") and ($_GET["email"] != "") and ($_GET["assunto"] != "") and ($_GET["mensagem"] != "")){

   echo "<script LANGUAGE=\"Javascript\">
alert(\"Dados enviados com sucesso, abaixo seguem os dados que você enviou.\");
</SCRIPT>" ;
}elseif(isset($_GET["cadastrar"]) == "cadastrar"){
    
    echo "<script LANGUAGE=\"Javascript\">
alert(\"Preencha os campos.\");
</SCRIPT>" ;
 
}


 

//Função de checagem

 


    if((isset($_GET["cadastrar"]) == "Cadastrar") and ($_GET["nome"] != "") and ($_GET["email"] != "") and ($_GET["assunto"] != "") and ($_GET["mensagem"] != ""))  {
        echo "<h4>Nome = " . $_GET['nome'] . "<br></h4>";
        echo "<h4>Email = " . $_GET['email'] . "<br></h4>";
        echo "<h4>Assunto = " . $_GET['assunto'] . "<br></h4>";
        echo "<h4>Mensagem = " . $_GET['mensagem'] . "</h4>";
    }
     ?>
    </div>
</div>
</div>

