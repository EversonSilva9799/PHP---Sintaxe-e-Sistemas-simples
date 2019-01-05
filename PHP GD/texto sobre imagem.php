<?php 


$imagem = "imagem2.jpg";

list($largura_original, $altura_original) = getimagesize($imagem);
list($largura_mini, $altura_mini) = getimagesize("mini_imagem.jpg");

$imagem_final = imagecreatetruecolor($largura_original, $altura_original);

$imagem_original = imagecreatefromjpeg($imagem);
$imagem_mini = imagecreatefromjpeg("mini_imagem.jpg");

imagecopy($imagem_final, $imagem_original, 0, 0, 0, 0, $largura_original, $altura_original);

imagecopy($imagem_final, $imagem_mini, 300, 600, 0, 0, $largura_mini, $altura_mini);

imagejpeg($imagem_final, "imagem_marca d'agua2.jpg", 100);

echo "Imagem criada";





?>