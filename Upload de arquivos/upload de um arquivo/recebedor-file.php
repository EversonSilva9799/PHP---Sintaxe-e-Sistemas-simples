
<?php

$arquivo = $_FILES['arquivo'];
//Nome original do arquivo: $arquivo['name']


if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){
	if (is_dir('arquivos')) {
		echo "A pasta já existe"."<br>";
	}
	else{
		mkdir("arquivos", 0777, true);//Cria um diretório
	}
	
	//Cria um nome aleatório
	//$nomeDoArquivo = md5(time().rand(0, 99)).'.jpg';
	//Move o arquivo: recebe o arquivo teporário e o nome
	move_uploaded_file($arquivo['tmp_name'], 'arquivos/'.$arquivo['name']);
	echo "Arquivo enviado com sucesso!";

}


?>