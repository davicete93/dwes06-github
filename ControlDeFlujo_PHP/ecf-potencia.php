<html>
<head>
</head>
<body>
<h1>POTENCIA</h1>
<p>Introduce un número y su exponente</p>
<?php
	if(! isset($_POST['elevar'])){
?>
	<form action="ecf-potencia.php" method="post">
	<span>Número:</span><input type="number" name="numero">
	<span>Exponente:</span><input type="number" name="exponente">
	<input type="submit" value="Operar" name="elevar">
	</form>
<?php 
	}else{
		$numero=$_POST['numero'];
		$exponente=$_POST['exponente'];
		$potencia=1;
		for($i=1;$i<=$exponente;$i++){
			$potencia*=$numero;
		}
		echo "<p>El resultado de la potencia es ".$potencia."</p>";
	}
?>

</body>
</html>

