<html>
<head>
</head>
<body>
	<h1>OBJETOS</h1>
	<?php 
	class Cuadrado{
		
	private $lado;
	function construct($lado){
		$this->$lado=$lado;
	}
	function getLado(){
		return $this->$lado;
	}
	function calcularArea($lado){
		return $area=pow($lado, 2);
	}
	function calcularPerimetro($lado){
		 return $perimetro=$lado*4;
	}
	}
	
	?>
	<?php
		if(! isset($_POST['calculo'])){
	?>
		
	<form action="objetos.php" method="post">
	<span>Lado</span><input type="number" name="lado"></br>
	<input type="submit" value="Calcular" name="calculo">
	</form>


<?php	
}else{
	$lado=$_POST['lado'];
	$cuadrado=new Cuadrado($lado);
	$area=$cuadrado->calcularArea($lado);
	$perimetro=$cuadrado->calcularPerimetro($lado);
	echo "El área del cuadrado es ".$area;
	echo "</br>";
	echo "El perímetro del cuadrado es ".$perimetro;
}
?>
</body>
</html>