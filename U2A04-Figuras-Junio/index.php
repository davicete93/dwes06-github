<html>
<head>
</head>
<body>
<?php 
if(! isset($_POST['enviar'])){
?>
<form action="$_SERVER['PHP_SELF']" method="post">
	<h1>Introducir datos del triángulo</h1>
	<span>Base:<input type="number" name="base"></span>
	<span>Altura:<input type="number" name="altura"></span>
	<input type="submit" name="enviar"></input>
</form>
</body>
</html>
<?php 
	
}else {
	
$base=$_POST['base'];
$altura=$_POST['altura'];

	
 class Triangulo{
 	private $base;
 	private $altura;

 	function contruct($base,$altura){
 		$this->$base=$base;
 		$this->$altura=$altura;
 	}
 	function getBase(){ 
 		return $this->$base;
	}
	function getAltura(){
 		return $this->$altura;
 	}
 	function calcularArea($base,$altura){
 		return $base*$altura;
 	}
 }
 $triangulo=new Triangulo($base,$altura);
 $area=$triangulo->calcularArea($base, $altura);
 echo "El área del triángulo es ".$area;
}
?>