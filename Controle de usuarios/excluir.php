<?php

require 'config.php';

if(isset($_GET['id']) && !empty($_GET['id'])){

	$id = addslashes($_GET['id']);

	$sql = $pdo->prepare("DELETE FROM usuarios WHERE id=?");
	$sql->execute(array($id));
	header('Location: index.php');
}
else{
	header('Location: index.php');
}

?>