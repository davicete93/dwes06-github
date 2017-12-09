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
	<th>ID_OBRA</th>
	<th>TITULO</th>
	<th>AÑO</th>
	<th>GENERO</th>
	<th>ID_AUTOR</th>
	<th>IMAGEN</th>
	<th>NOMBRE_AUTOR<th>
</tr>
<?php 


if(!isset($_REQUEST["id_obra"])) die ("<h3>ERROR en la peticion,no existe identificador de obra");
$id=$_REQUEST["id_obra"];
$resultado=$conexion ->query("SELECT * FROM obra WHERE id_obra=".$id);
if($resultado->num_rows==0)echo "<p>No hay peliculas en la base de datos</p>";

while ($obra = $resultado->fetch_object('Obra')) {
    
    $resultado2=$conexion ->query("SELECT nombre FROM autor WHERE id_autor=".$obra->getIdAutor());
    $autor=$resultado2->fetch_assoc();
    
    echo "<tr bgcolor='lightgreen'>";
    echo "<td>".$obra->getIdObra()."</td>\n";
    echo "<td>".$obra->getTitulo()."</td>\n";
    echo "<td>".$obra->getAñoPublicacion()."</td>\n";
    echo "<td>".$obra->getGenero()."</td>\n";
    echo "<td>".$obra->getIdAutor()."</td>\n";
    echo "<td><img src=img/".$obra->getImagen()."></td>\n";
    echo "<td>".$autor['nombre']."</td>\n";
    echo "</tr>";
    mysqli_free_result($resultado2);
}
?>
</table>
<a href="mostrarCatalogo.php"><button>Volver al catalogo</button></a>
</body>
</html>

