<html>
<head>
</head>
<body>
<?php
//Comentario de linea
/*
Comentario de bloque
*/
#Comentario de linea

$nombre="David";
echo "<p>Mi nombre es $nombre</p>\n";
echo '<p>Mi nombre es $nombre \n';

$a=5;
$b=3;
if($a>$b){
    echo "<p>El numero $a es mayor que $b</p>";
}else if($b>$a){
    echo "<p>El numero $b es mayor que $a</p>";
}else if($a==$b){
    echo "<p>Los dos numeros son iguales</p>";
}else{
    echo "<h1>No son numeros</h1>";
}

if($a>$b && $a==5){
    echo "<p>$a es mayor que $b y encima es 3</p>";
}
if($b<$a || $b<=3){
    echo "<p>El numero es $b</b>";
}

$c=4;
$d=6;
$c+=$d;
echo "<p>La suma de 4 y 6 es $c</b>";

$salario_base=1000000;
$salario_lebron=&$salario_base;
$salario_curry=&$salario_base;
$complemento=2000000;
$salario_base=$salario_base+$complemento;
echo "<p>El salario de Lebron James es $salario_lebron</p>";
echo "<p>El salario de Stephen Curry es $salario_curry</p>";

define("WESTCOAST","Tupac Amaru");
define("EASTCOAST","Notorious BIG",true);

echo "<p>Rapero de la costa oeste ".WESTCOAST."</p>";
echo "<p>Rapero de la costa este ".eastcoast."</p>";

$llover=true;
$ciudad="Madrid";
$ciudad2="Las Palmas";
$decimal=4.5;

if($ciudad=="Madrid" && $llover){
    echo "<p>En Madrid está lloviendo</p>";
}else{
    echo "<p>En Las Palmas hace un día soleado</p>";
}

echo "<p>El numero decimal es $decimal</p>";

if(is_bool($llover)){
    echo '<p>La variable $llover es booleana</p>';
}
if(is_numeric($a)){
    echo '<p>La variable $a es un numero</p>';
}
if(is_double($decimal)){
    echo '<p>La variable $decimal es double</p>';
}

$cadena="Esto es Desarrollo Web Entorno Servidor";
echo "<p>La cadena: $cadena tiene ".strlen($cadena). " caracteres</p>";
echo "<p>Reemplazamos la cadena por ".str_replace($cadena,"Hola soy David Moran",$cadena). "</p>";
echo "<p>Reordenamos la cadena aleatoriamente: ".str_shuffle($cadena)."</p>";
echo "<p>Invertimos la cadena: ".strrev($cadena)."</p>";

$capitales=array("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");


echo "<h1>Array asociativo con claves y valores</h1>";
foreach($capitales as $pais=>$capital){
    echo "<b>El pais es $pais y su capital $capital</b>";
    echo "</br>";
}

echo "<p>Ordenamos un array asociativo por claves</p>";
ksort($capitales);
var_dump($capitales);
  
echo "<p>Ordenamos un array asociativo por valores</p>";
asort($capitales);
var_dump($capitales);
    echo "</br>";
    echo "</br>";
    
 switch ($b){
     case 1:echo "El numero es 1";break;
     case 2:echo "El numero es 2";break;
     case 3:echo "El numero es 3";break;
     case 4:echo "El numero es 4";break;
 }
 echo "</br>";
 
 $numero=0;
 while($numero!=5){
     echo "El numero todavia no vale 5";
     echo "</br>";
    $numero++;
 }
 $numero2=0;
 do{
      echo "<p>El numero vale $numero2</p>";
      $numero2++;
 }while($numero2<=5);

 $equipos=array(0=>"Real Madrid",1=>"Atletico de Madrid",2=>"Betis");
 echo "<b>El tamaño del array es ".sizeof($equipos)."</b>";
 for($i=0;$i<=sizeof($equipos);$i++){
     if(isset($equipos[$i])){
         echo "<ul>";
         echo "<li>$equipos[$i]</li>";
         echo "</ul>";
     }
 }
 
 $capitales=array("España"=>"Madrid","Portugal"=>"Lisboa","Francia"=>"Paris");
 foreach($capitales as $pais=>$capital){
     echo "<ul>";
     echo "<li>El pais es $pais y su capital $capital</li>";
     echo "</ul>";
   
 }
 //nombre del archivo
 echo $_SERVER['PHP_SELF'];
 echo "</br>";
 //usuario utilizado
echo $_SERVER['HTTP_USER_AGENT'];

$numero1=5;
$numero2=3;
function sumar($numero1,$numero2){
    return $suma=$numero1+$numero2;
}
echo "<p>La suma de 3 más 5 es " .sumar($numero1, $numero2)."</p>";

$granizo="si";
function granizar($granizo){
    if($granizo=="si"){
        echo "<p>Está granizando</p>";
    }else{
        echo "<p>No va a granizar</p>";
    }
}
echo granizar($granizo);

echo "<p>Hoy es ".date("d-m-y")." y son las ".date("h:i")."</p>";

$coste=300;
$descuento=20;
function precio($coste){
    $total=$coste-$coste*($GLOBALS["descuento"]/100);
    return $total;
}
echo "<p>El precio del producto con descuento es ".precio($coste)."</p>";
?>
<form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
	Nombre:<input type="text" name="nombre">
	<input type="submit" name="enviar" value="Enviar">
<?php 
if(isset($_POST['enviar'])){
    $nombre=$_POST['nombre'];
    echo "<h3>Mi nombre es ".$nombre."</h3>";
}
?>
</form>
</body>
</html>

