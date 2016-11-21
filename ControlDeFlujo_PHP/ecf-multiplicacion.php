<html>
<head>
</head>
<body>
	<h1>TABLA DE MULTIPLICAR</h1>
	<p>Introduce un número para realizar su tabla de multiplicar</p>
	<?php
	if(! isset($_POST['tabla'])){
	?>
	<form action="ecf-multiplicacion.php" method="post">
	<span>Número:</span><input type="number" name="numero">
	<input type="submit" value="Tabla Multiplicar" name="tabla">
	</form>
	<?php 
	}else{
		$numero=$_POST['numero'];
		$producto=0;
		for($i=0;$i<=10;$i++){
			$producto=$numero*$i;
			echo"<p>El numero ".$numero." por ".$i." es igual a ".$producto."</p>";
		}
	}
	?>
</body>
</html>

