<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM $tabla ORDER BY id DESC");
?>

<html>
<head>	
	<meta charset="UTF-8">
	<title>Biblioteca</title>
</head>

<body>
	<a href="add.html">Añadir libro</a><br/><br/>

	<table width="80%" border=1>

	<tr>
		<td>T&iacute;tulo</td>
		<td>P&aacute;ginas</td>
		<td>Autor</td>
		<td>Modificar</td>
	</tr>
	<?php
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['titulo']."</td>";
		echo "<td>".$res['paginas']."</td>";
		echo "<td>".$res['autor']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Seguro?')\">Borrar</a></td>";	
	}
	?>
	</table>
</body>
</html>
