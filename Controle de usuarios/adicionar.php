<?php
	require 'config.php';

	if(isset($_POST['nome']) && !empty($_POST['nome']) && 
		isset($_POST['email']) && !empty($_POST['email']) && 
		isset($_POST['senha']) && !empty($_POST['senha'])){

		$nome = addslashes($_POST['nome']);
		$email = addslashes($_POST['email']);
		$senha = md5((addslashes($_POST['senha'])));

		$sql = $pdo->prepare("INSERT INTO usuarios(nome, email, senha) VALUES(?,?,?)");

		$sql->execute(array($nome, $email, $senha));
		header("Location: index.php");
	}
?>


<form method="POST">
	<input type="text" name="nome" placeholder="Nome"><br><br>
	<input type="email" name="email" placeholder="E-mail"><br><br>
	<input type="password" name="senha" placeholder="senha"><br><br>
	<input type="submit" name="" value="cadastrar">


</form>