<?php

class Foto extends Model {


	public function getFotos()
	{
		$array = array();

		$sql = "SELECT * FROM fotos ORDER BY id DESC";
		$sql = $this->pdo->query($sql);

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}


		return $array;
	}

	public function saveFotos()
	{

		// $nome = md5(time().rand(0, 999)).'jpg';
		// 		echo $nome;
		if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])){
			//Define os arquivos permitidos
			$permitidos = array('image/jpeg', 'image/jpg', 'image/png');

			if(in_array($_FILES['arquivo']['type'], $permitidos)) {

				//Novo nome do arquivo
				$nome = md5(time().rand(0, 999)).'.jpg';
				//Move o arquivo para pasta galeria
				move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);
				$titulo = '';

				if (isset($_POST['titulo']) && !empty($_POST['titulo'])) {
					$titulo = addslashes($_POST['titulo']);
				}

			
				$sql = "INSERT INTO fotos SET titulo = '$titulo', url = '$nome'";
				$this->pdo->query($sql);
			}
			else {
				echo "Tipo e arquivo não permitido";
			}
		} 
	}
}

// 	$sql = $this->pdo->prepare("INSERT INTO `fotos`(titulo, url) VALUES(?,?)");
			// 	$sql->execute(array($nome, $titulo));
			// }