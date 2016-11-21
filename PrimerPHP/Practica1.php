<?php
#1. Comentarios de los tres tipos
#* Sentencias echo con los dos tipos de comillas
$nombre="David";
$modulo="DWES";
echo "<h3>Mi nombre es $nombre</h3>\n";
echo '<h3>Mi nombre es $nombre</h3>\n';
echo "<h3>Este modulo es $modulo</h3>\n";
echo "<h3>"."Probamos con ". $nombre ." el comportamiento de echo";

#* Uso de al menos tres operadores de comparación y dos operadores lógicos
#* Uso de un operador de asignación
#* Declaración y uso de una variable por referencia
$nombre_inicial="Juan";
$nombre_juan=&$nombre_inicial;
echo "<h3>El nombre inicial es  ".$nombre_inicial."</h3>\n";
$nombre_juan="David";
echo "<h3>El nuevo nombre de Juan es ".$nombre."</h3> \n";
#* Declaración y uso de dos constantes, una que obligue a respetar las mayúsculas en su uso y otra que no lo haga
define("Alumno","David");

echo "<h2>Pruebas de constantes</h2>";
echo "<h3>1El alumno de DAW es ".Alumno."</h3>\n";
echo "<h3>2El alumno de DAW es ".ALUMNO."</h3>\n";
define("CLASE","Desarrollo de apps web",true);
echo "<h3>El nombre de este ciclo es ".clase."</h3>\n";
#* Declaración y uso de un variable booleana y otra de tipo double
$llueve=true;
$gotas_segundo=190.5;
 if($llueve==true){
 	echo "<h3>El cielo esta nublado y cae con una intensidad de ".$gotas_segundo." gotas por segundo</h3>\n";
 }else{
 	echo "<h3>El día está soleado</h3>\n";
 }

#* Uso de is_numeric, is_boolean y is_double con estas variables
#* Declaración de una variable de tipo string. Pruebas con la función *strlen* y con tres de las funciones indicadas en el enlace.
#* Declaración de un array escalar y uno asociativo
#* Ordenación y volcado de información con *var_dump* siguiendo dos criterios de ordenación en cada uno de los arrays

 	#*Declaracion de un array escalar
$modulos=array("DWES","DAW","DWEC","INTERFACES");
echo "<h3>El tamaño de mi array es ".sizeof($modulos)."</h3>\n";
var_dump($modulos);
echo "</br>";
echo "</br>";
print_r($modulos);
echo "</br>";
echo "</br>";
	#*Declaracion de un array asociativo
$equipos=array("Real Madrid","Dinamo de Kiev","Bayern Munich");

#Array distinto asociativo
$pais["Real Madrid"]="España";
$pais["Dinamo de Kiev"]="Rusia";
$pais["Bayern Munich"]="Alemania";
var_dump($equipos);
echo "</br>";
echo "</br>";
print_r($pais);

	#*Ordenacion de arrays 
	sort($equipos);
	echo "<p>Equipos ordenados:</p>";
	print_r($equipos);



#* Una estructura de control de cada tipo (if-elsif-else, switch, while, do-while, for)
#* Un recorrido por cada uno de los dos arrays utilizando foreach, generando por ejemplo una lista ordenada con sus elementos
echo "<ul>";
$ciclos=array("SMR","ASIR","DAW");
	foreach($ciclos as $actual){
		echo "<li>$actual</li>";
	}
echo "</ul>";

echo "<ul>";
$capitales=array("Madrid"=>"España","Paris"=>"Francia","Lisboa"=>"Portugal");
	foreach($capitales as $capital){
		echo "<li>$capital</li>";
	}
echo "</ul>";
echo "<ul>";
	foreach($capitales as $pais =>$capital){
		echo "<li>La capital de $pais es $capital</li>";
	}
echo "</ul>";
	
$numero=5;
echo gettype($numero);
#* Dos pruebas con la variable superglobal _SERVER_

echo "<p>".$_SERVER['PHP_SELF']."</p>";
echo "<br>";
echo "<p>El nombre del servidor es " .$_SERVER['SERVER_NAME']."</p>";
echo "<br>";
echo "<p>El host es " .$_SERVER['HTTP_HOST']."</p>";
echo "<br>";
echo "<p>El usuario es ".$_SERVER['HTTP_USER_AGENT']."</p>";
echo "<br>";
echo "<p>".$_SERVER['SCRIPT_NAME']."</p>";
#* Dos pruebas de funciones: una devolverá algun tipo, la otra no

function producto($num1,$num2){
	$resultado=$num1*$num2;
	return $resultado;
}
echo "<h4>El producto de 10 por 5 es ".producto(10, 5)."</h4>";

function division($num1,$num2) : float{
	$resultado=$num1/$num2;
	return $resultado;
}
echo "<h4>El cociente de 10 entre 5 es ".division(10, 5)."</h4>";
#* Una función que utilice una variable global
#* Un formulario que reciba datos y los muestre por pantalla

