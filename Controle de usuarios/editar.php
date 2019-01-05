<?php

require 'config.php';
$id = 0;
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = addslashes($_GET['id']);
}
else{
	header('Location: index.php');
}

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['email']) && !empty($_POST['email'])){
	$nome = addslashes($_POST['nome']);
	$email = addslashes($_POST['email']);

	$sql = $pdo->prepare("UPDATE usuarios SET nome=?, email=? WHERE id=?");
	$sql->execute(array($nome, $email, $id));

	header('Location: index.php');

}

	
$sql = $pdo->prepare("SELECT * FROM usuarios WHERE id=?");
$sql->execute(array($id));

if($sql->rowCount() > 0){
	$usuario = $sql->fetch();
}
else{
	header('Location: index.php');
}



?>


<form method="POST">
	<input type="text" name="nome" value="<?=$usuario['nome']?>" placeholder="Nome"><br><br>
	<input type="email" name="email" value="<?=$usuario['email']?>" placeholder="E-mail"><br><br>
	
	<input type="submit" name="" value="Atualiza">
</form>