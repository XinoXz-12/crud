<html>
<head>
	<meta charset="UTF-8">
	<title>Añadir Libro</title>
</head>

<body>
<?php
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$paginas = mysqli_real_escape_string($mysqli, $_POST['paginas']);
	$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
	
	if(empty($titulo) || empty($paginas) || empty($autor)) {
				
		if(empty($titulo)) {
			echo "Título vacío.<br/>";
		}
		
		if(empty($paginas)) {
			echo "Páginas vacío.<br/>";
		}
		
		if(empty($autor)) {
			echo "Autor vacío.<br/>";
		}
		echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
	} else { 
		$result = mysqli_query($mysqli, "INSERT INTO $tabla(titulo,paginas,autor) VALUES('$titulo','$paginas','$autor')");
	
		echo "Libro añadido correctamente.";
		echo "<br/><a href='index.php'>Listar libros</a>";
	}
}
?>
</body>
</html>
