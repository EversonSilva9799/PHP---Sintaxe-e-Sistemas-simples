
<?php

$arquivo = $_FILES['arquivos'];



if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false){

	if (is_dir('Cursos/PHP')){
		echo "Já existe";
	}
	else{
		umask(0); mkdir("Cursos/PHP", 0777, true);
	}
	
	for($i = 0; $i < count($arquivo['tmp_name']); $i++){
		move_uploaded_file($arquivo['tmp_name'][$i], 'Cursos/PHP/'.$arquivo['name'][$i]);
	}
}


?>