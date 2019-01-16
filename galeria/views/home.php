<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Adicionar uma Foto</h2>
	<form method="POST" enctype="multipart/form-data">
		<label for="foto">Foto:</label><br>
		<input type="text" name="titulo"><br>
		<input type="file" name="arquivo"><br>
		<input type="submit" name="acao" value="Enviar arquivo">
	</form>
	<br><br><br>
	
	<?php foreach ($fotos as $foto): ?>
	
	<img src="assets/images/galeria/<?php echo $foto['url']; ?>" width="300" border="0"/><br/>
	<?php echo $foto['titulo']; ?>

	<hr>

	<?php endforeach ?>

	
</body>
</html>