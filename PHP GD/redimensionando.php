<?php

$arquivo = "imagem2.jpg";

$largura = 200;
$altura = 200;

list($largura_original, $altura_original) = getimagesize($arquivo);

$ratio = $largura_original / $altura_original;



if ($largura/$altura > $ratio){
	$largura = $altura * $ratio;
}
else{
	$altura = $largura / $ratio;
}

/*echo "Largura original: ".$largura_original ." Altura original:". $altura_original."<br/>";
echo "Largura: ".$largura ." Altura". $altura;*/

$new_image = imagecreatetruecolor($largura, $altura);
$imagem_original = imagecreatefromjpeg($arquivo);


//Nova imagem, imagem original, posicao que vai ficar, nova largura, nova altura, largura original, altura original
imagecopyresampled($new_image, $imagem_original, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);

//header("Content-Type: image/jpeg"); //Para exibir a imagem: Transforma o arquivo php em arquivo de imagem
//imagepng($imagem_final, null); // Se a imagem for png
imagejpeg($new_image, "New Image.jpg", 100); // Imagem jpeg

echo "Nova imagem criada";




 ?>