<?php
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
	$paginas = mysqli_real_escape_string($mysqli, $_POST['paginas']);
	$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);	
	
	if(empty($titulo) || empty($paginas) || empty($autor)) {	
			
		if(empty($titulo)) {
			echo "Título vacío<br/>";
		}
		
		if(empty($paginas)) {
			echo "Páginas vacías<br/>";
		}
		
		if(empty($autor)) {
			echo "Autor vacío<br/>";
		}		
	} else {	
		echo "UPDATE $tabla SET titulo='$titulo',paginas='$paginas',autor='$autor' WHERE id=$id";
		$result = mysqli_query($mysqli, "UPDATE $tabla SET titulo='$titulo',paginas='$paginas',autor='$autor' WHERE id=$id");
		
		header("Location: index.php");
	}
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM $tabla WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$titulo = $res['titulo'];
	$paginas = $res['paginas'];
	$autor = $res['autor'];
}
?>
<html>
<head>	
	<title>Editar libros</title>
</head>

<body>
	<a href="index.php">Inicio</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		Título<input type="text" name="titulo" value="<?php echo $titulo;?>"><br>
		Páginas<input type="text" name="paginas" value="<?php echo $paginas;?>"><br>
		Autor<input type="text" name="autor" value="<?php echo $autor;?>"><br>
		<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
		<input type="submit" name="update" value="Modificar">
	</form>
</body>
</html>
