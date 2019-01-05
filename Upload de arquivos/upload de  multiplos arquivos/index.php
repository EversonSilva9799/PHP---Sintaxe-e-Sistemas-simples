
<!DOCTYPE html>
<html>
<head>
	<title>Envio de arquivos</title>
	<meta charset="utf-8">
</head>
<body>

	<form action="recebedor-file.php" method="post" enctype="multipart/form-data">
		<input type="file" name="arquivos[]" multiple=""><br><br>
		<input type="submit" name="upload" value="Upload">
		
	</form>

</body>
</html>