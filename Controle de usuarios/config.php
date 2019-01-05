<?php

try{

	$pdo = new PDO("mysql:dbname=my_system_videos;host=localhost", "root", "");

}catch(PDOException $e){
	echo "Falhou a conexão: ".$e->getMessage();
}
