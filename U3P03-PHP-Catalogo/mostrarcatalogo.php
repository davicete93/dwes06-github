<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
include 'Obra.php';
$servidor="localhost";
$usuario="alumno";
$clave="alumno";

$conexion = new mysqli($servidor,$usuario,$clave,"catalogo");
//si quisiéramos hacerlo en dos pasos:
// $conexion = new mysqli($servidor,$usuario,$clave);
// $conexion->select_db("animales");

if ($conexion->connect_errno) {
    echo "<p>Error al establecer la conexión (" . $conexion->connect_errno . ") " . $conexion->connect_error . "</p>";
}
$conexion->query("SET NAMES 'UTF8'");

$ruta="img";
?>
<table style='border:0'>
<tr style='background-color:lightblue'>
	<th>Titulo <a href="">&#9650</a> <a href="">&#9660</a></th>
	<th>IdAutor</th>
	<th>Nombre <a href="">&#9650</a> <a href="">&#9660</a></th>
</tr>
<?php 
$resultado=$conexion ->query("SELECT * FROM obra ORDER BY id_autor");
if($resultado->num_rows==0)echo "<p>No hay peliculas en la base de datos</p>";
while ($obra = $resultado->fetch_object('Obra')) {
    //$consulta2 ="SELECT nombre FROM autor WHERE id_autor=".$obra->getIdAutor(); query($consulta2);
    $resultado2=$conexion ->query("SELECT nombre FROM autor WHERE id_autor=".$obra->getIdAutor());
    $autor=$resultado2->fetch_assoc();
    echo "<tr bgcolor='lightgreen'>";
    echo "<td><a href='mostrarObra.php?id_obra=".$obra ->getIdObra()."'>".$obra->getTitulo()."</td>\n";
    echo "<td>".$obra->getIdAutor()."</td>\n";
    echo "<td>".$autor['nombre']."</td>\n";
    echo "</tr>";
    mysqli_free_result($resultado2);
}

?>
</table>
</body>
</html>
