
<?php 

//if(isset($_POST['enviar'])){
if(isset($_POST['nome']) && !empty($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);
	$msg = addslashes($_POST['msg']);
	
	$para = "email@mail.com";
	$assunto = "pergunta do contato";
	$corpo = "Nome:". $nome." - E-mail: ".$email." - Mensagem ".$msg;
	$cabecalho = "From: suportedev@gmail.com"."\r\n"."Reply-To".$email."\r\n"."X-Mailer: PHP/".phpversion();


	mail($para, $assunto, $corpo, $cabecalho);

	echo "<h2>E-mail enviado com sucesso</h2>";
	exit;
}	



?>

<!DOCTYPE html>
<html>
<head>
	<title>Contato</title>
</head>
<body>

	<form method="POST">
		<label>Nome</label><br/>
		<input type="text" name="nome"><br/>
		<label>E-mail</label><br/>
		<input type="email" name="email"><br/><br/>
		<textarea name="msg"></textarea><br/>
		<input type="submit" name="enviar" value="Enviar">
	</form>

</body>
</html>