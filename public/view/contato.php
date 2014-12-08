<div class="container">
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
	
	echo "<hr><div id='titulo'>".$result['titulo']."</div>";

	echo "<br><li><div id='texto'>".$result['texto']."</div></li>";

    }
    ?>
</div>

<hr>

    <div class="container">



        <div class="row">
<div class="span6">
    <form method="get" name="f1">
    <input type="hidden" name="pg" value="contato" />
    <table>
        <tr>
            <td valign="top">Nome</td><td><input type="text" name="nome"></td>
        </tr>
        <tr>
            <td valign="top">Email</td><td><input type="text" name="email" onblur="validacaoEmail(f1.email)"></td>
        </tr>
        <tr>
            <td valign="top">Assunto</td><td><input type="text" name="assunto"></td>
        </tr>
        <tr>
            <td valign="top">Mensagem</td><td><textarea cols="55" rows="5" name="mensagem"></textarea> </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Cadastrar" name="cadastrar"> </td>
        </tr>
    </table>

</form>
</div>

    <div class="span6">
    <?php
if ((isset($_GET["cadastrar"]) == "cadastrar") and ($_GET["nome"] != "") and ($_GET["email"] != "") and ($_GET["assunto"] != "") and ($_GET["mensagem"] != "")){

   echo "<script LANGUAGE=\"Javascript\">
alert(\"Dados enviados com sucesso, abaixo seguem os dados que você enviou.\");
</SCRIPT>" ;
}elseif(isset($_GET["cadastrar"]) == "cadastrar"){
    
    echo "<script LANGUAGE=\"Javascript\">
alert(\"Preencha os campos.\");
</SCRIPT>" ;
 
}

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

